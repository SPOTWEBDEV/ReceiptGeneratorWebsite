<?php
include('../../server/connection.php');
include('../../server/client/auth/index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Canva Design Clone</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fc;
            padding: 2rem;
            color: #333;
        }

        .main-container {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .sidebar {
            width: 280px;
            background: #ffffff;
            padding: 1rem;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.06);
            height: fit-content;
            flex-shrink: 0;
        }

        .search-box input {
            width: 100%;
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 1rem;
        }

        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 1rem;
        }

        .tab {
            padding: 6px 12px;
            background: none;
            border: none;
            font-weight: 500;
            font-size: 13px;
            cursor: pointer;
            border-bottom: 2px solid transparent;
        }

        .tab.active {
            border-color: #6c63ff;
            color: #6c63ff;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 1.5rem;
        }

        .filter {
            background: #f1f1f1;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            color: #555;
            cursor: pointer;
        }

        .filter.active {
            background-color: #6c63ff;
            color: white;
        }

        .sidebar-section {
            margin-bottom: 1.5rem;
        }

        .section-title {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .thumb-row {
            display: flex;
            gap: 0.5rem;
            margin-top: 10px;
            border: 2px solid;
        }

        .thumb-row img {
            width: 100%;
            border-radius: 8px;
            height: auto;
            object-fit: fill;
        }

        .content-area {
            flex: 1;
            min-width: 300px;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease;
            cursor: pointer;
            width: 400px;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-content {
            padding: 1rem;
        }

        .card-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #222;
            text-transform: capitalize;
        }

        .card-meta {
            font-size: 12px;
            color: #777;
        }

        .card-meta span {
            text-transform: capitalize;
            display: inline-block;
            margin-right: 10px;
        }

        .tag {
            color: #6c63ff;
            font-weight: 500;
        }
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            margin-bottom: 1rem;
            cursor: pointer;
        }

        @media screen and (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .show-sidebar {
                display: block !important;
                position: absolute;
                left: 0;
                top: 0;
                background: white;
                height: 100vh;
                width: 250px;
                z-index: 999;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                padding: 1rem;
            }

            .menu-toggle {
                display: block;
            }
        }

        
    </style>
</head>

<body>
    <div class="main-container">
        <button class="menu-toggle">☰</button>

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="search-box">
                <input type="text" id="search-input" placeholder="Search templates...">
            </div>
            <div class="tabs">
                <button class="tab active">Templates</button>
            </div>
            <div class="filters" id="category-filters"></div>
            <div class="sidebar-section">
                <p class="section-title">Your Edited Templates</p>
                <div class="edittemplate"></div>
            </div>
        </aside>
        <!-- Main Content -->
        <div class="content-area">
            <h1>Admin Designs</h1>
            <div class="grid adminTemplate"></div>
            <h1 style="margin-top:20px">Client Designs</h1>
            <div class="grid clientTemplate"></div>
        </div>
    </div>

    <script src="../../assets/js/jquery.min.js"></script>
    <script>
        let selectedCategory = 'All';
        let currentKeyword = '';
        let allTemplates = {
            admin_templates: [],
            user_templates: [],
            edited_templates: []
        };

        function fetchTemplates(category = '', keyword = '') {
            selectedCategory = category || 'All';
            currentKeyword = keyword || '';

            $.ajax({
                url: '<?php echo $domain ?>server/client/api/get_templates.php',
                type: 'GET',
                data: {
                    category: selectedCategory === 'All' ? '' : selectedCategory,
                    keyword: currentKeyword
                },
                success: function(res) {
                    if (res.success) {
                        allTemplates = res;
                        renderFilters(res.categories);
                        renderTemplates(res, currentKeyword);
                    }
                }
            });
        }

        function renderFilters(categories) {
            const container = $('#category-filters');
            container.empty();

            const allBtn = $(`<span class="filter">All</span>`);
            if (selectedCategory === 'All') allBtn.addClass('active');
            container.append(allBtn);

            categories.forEach(cat => {
                const btn = $(`<span class="filter">${cat}</span>`);
                if (cat === selectedCategory) btn.addClass('active');
                container.append(btn);
            });
        }

        function renderTemplates(data, keyword = '') {
            renderSection('.adminTemplate', data.admin_templates, keyword);
            renderSection('.clientTemplate', data.user_templates, keyword);
            renderEdited(data.edited_templates);
        }

        function renderSection(selector, templates, keyword) {
            const container = $(selector);
            container.empty();
            const filtered = templates.filter(tpl => tpl.title.toLowerCase().includes(keyword.toLowerCase()));
            if (filtered.length === 0) {
                container.html('<p>No templates found.</p>');
                return;
            }
            filtered.forEach(tpl => {
                const card = $(`
          <div class="card" onclick="location.href='editor.php?template_id=${tpl.template_id}'">
            <img src='<?php echo $domain ?>uploads/template/${tpl.image}' alt="${tpl.title}" />
            <div class="card-content">
              <div class="card-title">${tpl.title}</div>
              <div class="card-meta">
                <span class="tag">${tpl.catergory}</span> • ₦${tpl.price} Credit
              </div>
            </div>
          </div>`);
                container.append(card);
            });
        }

        function renderEdited(templates) {
            const container = $('.edittemplate');
            container.empty();
            if (templates.length === 0) {
                container.html('<p>No templates found.</p>');
                return;
            }
            templates.forEach(tpl => {
                const card = `<div class="thumb-row">
            <img src="<?php echo $domain ?>uploads/template/${tpl.image}" alt="${tpl.title}" />
          </div>`;
                container.append(card);
            });
        }

        $(document).ready(() => {
            fetchTemplates();

            $('#category-filters').on('click', '.filter', function() {
                const cat = $(this).text();
                selectedCategory = cat;
                fetchTemplates(cat === 'All' ? '' : cat, $('#search-input').val());
            });

            $('#search-input').on('input', function() {
                const keyword = $(this).val();
                renderTemplates(allTemplates, keyword);
            });
        });


        document.addEventListener('click',(event)=>{
             if(event.target.classList.contains('menu-toggle')){
                document.querySelector('.sidebar').classList.add('show-sidebar');
             }else{
                document.querySelector('.sidebar').classList.toggle('show-sidebar');
             }
        })


        // function toggleSidebar() {
        //     document.querySelector('.sidebar').classList.toggle('show-sidebar');
        // }
    </script>
</body>

</html>