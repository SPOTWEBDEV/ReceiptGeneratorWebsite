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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
        rel="stylesheet" />
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

        /* === LAYOUT WRAPPER === */
        .main-container {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        /* === SIDEBAR === */
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
        }

        .thumb-row img {
            width: 98%;
            border-radius: 8px;
            object-fit: cover;
        }

        .crown {
            font-size: 14px;
            color: #f5b301;
            vertical-align: middle;
        }

        /* === MAIN CONTENT AREA === */
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
            width:400px;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        .card img {
            width: 100%;
            height: 400px;
            object-fit: contain;
            
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
    </style>
</head>

<body>

    <div class="main-container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="search-box">
                <input type="text" placeholder="Use 4+ words to describe...">
            </div>
            <div class="tabs">
                <button class="tab active">Templates</button>
            </div>
            <div class="filters" id="category-filters"></div>

            <div class="sidebar-section">
                <p class="section-title">Recently used</p>
                <div class="edittemplate">

                </div>
            </div>

             
        </aside>

        <!-- Main Content Area -->
        <div class="content-area">
            <h1>Admin Designs</h1>
            <div class="grid adminTemplate"></div>
            <h1 style="margin-top:20px">Client Designs</h1>
            <div class="grid clientTemplate"></div>
        </div>

       

    </div>


    <script src="../../assets/js/jquery.min.js"></script>
    <script>
        function fetchTemplates(category = '') {
            $.ajax({
                url: '<?php echo $domain  ?>server/client/api/get_templates.php',
                type: 'GET',
                data: {
                    category
                },
                success: function(res) {
                    console.log(res);

                    if (res.success) {
                        renderAdminTemplates(res.admin_templates);
                        renderFilters(res.categories);
                        renderclientTemplate(res.user_templates);
                        rendereditTemplate(res.edited_templates);
                    } else {
                        $('#template-grid').html('<p>Error loading templates.</p>');
                    }
                },
                error(error) {
                    console.log(error.statusText)
                }
            });
        }


         function rendereditTemplate(templates) {
            const container = $('.edittemplate');
            container.empty();
            if (templates.length === 0) {
                container.html('<p>No templates found.</p>');
                return;
            }

            templates.forEach(tpl => {
                const card = `<div class="thumb-row">
                    <img src="<?php echo $domain ?>uploads/template/${tpl.image}"
                        alt="Human Tech" />
                </div>`;
                container.append(card);
            });
        }


         function renderclientTemplate(templates) {
            const container = $('.clientTemplate');
            container.empty();
            if (templates.length === 0) {
                container.html('<p>No templates found.</p>');
                return;
            }

            templates.forEach(tpl => {
                const card = `
        <div class="card">
          <img src="<?php echo $domain ?>uploads/template/${tpl.image}" alt="Design" />
          <div class="card-content">
            <div class="card-title">${tpl.title}</div>
            <div class="card-meta">
              <span class="tag">${tpl.catergory}</span> • ₦${tpl.price} Credit 
            </div>
          </div>
        </div>
      `;
                container.append(card);
            });
        }



        function renderAdminTemplates(templates) {
            const container = $('.adminTemplate');
            container.empty();
            if (templates.length === 0) {
                container.html('<p>No templates found.</p>');
                return;
            }

            templates.forEach(tpl => {
                const card = `
        <div class="card">
          <img src="<?php echo $domain ?>uploads/template/${tpl.image}" alt="Design" />
          <div class="card-content">
            <div class="card-title">${tpl.title}</div>
            <div class="card-meta">
              <span class="tag">${tpl.catergory}</span> • ₦${tpl.price} Credit 
            </div>
          </div>
        </div>
      `;
                container.append(card);
            });
        }

        function renderFilters(categories) {
            const container = $('#category-filters');
            container.empty();

            categories.forEach(cat => {
                const btn = $(`<span class="filter">${cat}</span>`);
                container.append(btn);
            });
        }

        // Initial load
        $(document).ready(() => {
            fetchTemplates();
        });
    </script>


</body>

</html>