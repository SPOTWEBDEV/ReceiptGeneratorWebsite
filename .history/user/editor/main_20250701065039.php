<?php

use Dom\Mysql;

include('../../server/connection.php');

$template_id = isset($_GET['template_id']) ? $_GET['template_id'] : 0;


$query = mysqli_query($connection, "SELECT `html_contents` FROM `template` WHERE `template_id` = '$template_id'");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../../assets/css/template.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body class="p-2 w-full flex-col gap-2">
  <!-- SIDENAV -->
  <div
    class="bg-light p-2  shadow-sm rounded-sm w-full-mobile flex flex-col items-center gap-4 overflow-y-auto overflow-x-auto custom-scroll hide-scrollbar">
    <div
      onclick="openModal('designModal')"
      class="flex flex-col items-center gap-1 cursor-pointer">
      <i class="bi bi-layout-text-window-reverse text-2xl text-gray"></i>
      <span class="text-sm text-gray">Design</span>
    </div>

    <div
      onclick="openModal('elementModal')"
      class="flex flex-col items-center gap-1 cursor-pointer">
      <i class="bi-slash-square text-2xl text-gray"></i>
      <span class="text-sm text-gray">Elements</span>
    </div>

    <div
      onclick="openModal('colorModal')"
      class="flex flex-col items-center gap-1 cursor-pointer">
      <i class="bi bi-palette text-2xl text-gray"></i>
      <span class="text-sm text-gray">Color</span>
    </div>

    <div
      onclick="openModal('styleModal')"
      class="flex flex-col items-center gap-1 cursor-pointer">
      <i class="bi bi-brush text-2xl text-gray"></i>
      <span class="text-sm text-gray">Style</span>
    </div>

    <div
      onclick="openModal('positionModal')"
      class="flex flex-col items-center gap-1 cursor-pointer">
      <i class="bi bi-arrows-move text-2xl text-gray"></i>
      <span class="text-sm text-gray">Position</span>
    </div>

    <div
      onclick="openModal('shareModal')"
      class="flex flex-col items-center gap-1 cursor-pointer">
      <i class="bi bi-send text-2xl text-gray"></i>
      <span class="text-sm text-gray">Share</span>
    </div>
  </div>

  <style>
     main.template {
       width: calc(100% - 5.5rem);
     }
     @me
  </style>


  <main style="width: calc(100% - 5.5rem);" class="bg-light p-2 flex justify-center items-center">
    <div class="editor-holder border w-full h-[600px]  rounded overflow-auto p-4">
      <?php
      if (mysqli_num_rows($query)) {
        $row = mysqli_fetch_assoc($query);
        echo $row['html_contents'];
      } else {
        echo "<p class='text-gray'>Template not found.</p>";
      }
      ?>
    </div>
  </main>






  <!-- POSITION MODAL -->
  <div id="positionModal" class="modal hidden">
    <div class="modal-box">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray">Position</h2>
        <button onclick="closeModal('positionModal')" class="text-xl text-gray">&times;</button>
      </div>

      <div class="grid grid-cols-3 gap-2 mb-4">
        <button class="p-2 border rounded text-sm">Top</button>
        <button class="p-2 border rounded text-sm">Left</button>
        <button class="p-2 border rounded text-sm">Middle</button>
        <button class="p-2 border rounded text-sm">Center</button>
        <button class="p-2 border rounded text-sm">Bottom</button>
        <button class="p-2 border rounded text-sm text-gray bg-gray-200 cursor-not-allowed">Right</button>
      </div>

      <h3 class="text-sm font-bold mb-2">Advanced</h3>

      <div class="grid grid-cols-3 gap-2 mb-2">
        <input type="text" value="359.5 px" class="p-2 border rounded text-sm" />
        <input type="text" value="276.1 px" class="p-2 border rounded text-sm" />
      </div>

      <div class="grid grid-cols-3 gap-2">
        <input type="text" value="580.5 px" class="p-2 border rounded text-sm" />
        <input type="text" value="78.8 px" class="p-2 border rounded text-sm" />
      </div>
    </div>
  </div>

  <!-- COLOR MODAL -->
  <div id="colorModal" class="modal hidden">
    <div class="modal-box">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray">Color</h2>
        <button onclick="closeModal('colorModal')" class="text-xl text-gray">&times;</button>
      </div>

      <!-- Text Color Section -->
      <div class="mb-4">
        <label class="text-sm font-semibold block mb-2">Text Color</label>
        <input type="color" class="mb-2 w-full h-10 border rounded" />

        <div class="grid w-fit grid-cols-6 gap-2">
          <div class="w-10 h-10 rounded-full" style="background-color: #000;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #333;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #555;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #aaa;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #ddd;"></div>
          <div class="w-10 h-10 rounded-full border" style="background-color: #fff;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #ff4d4d;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #ff7f50;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #ffd700;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #90ee90;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #00ced1;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #1e90ff;"></div>
        </div>
      </div>

      <!-- Background Color Section -->
      <div>
        <label class="text-sm font-semibold block mb-2">Background Color</label>
        <input type="color" class="mb-2 " value="#ff4d4d" />

        <div class="grid w-fit grid-cols-6 gap-2">
          <div class="w-10 h-10 rounded-full" style="background-color: #000;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #333;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #555;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #aaa;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #ddd;"></div>
          <div class="w-10 h-10 rounded-full border" style="background-color: #fff;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #ff4d4d;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #ff7f50;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #ffd700;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #90ee90;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #00ced1;"></div>
          <div class="w-10 h-10 rounded-full" style="background-color: #1e90ff;"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- STYLE MODAL -->
  <div id="styleModal" class="modal hidden">
    <div class="modal-box">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray">Style</h2>
        <button onclick="closeModal('styleModal')" class="text-xl text-gray">&times;</button>
      </div>

      <div class="grid grid-cols-3 gap-2 mb-4">
        <button class="p-2 border rounded text-sm">Bold</button>
        <button class="p-2 border rounded text-sm">Underline</button>
        <button class="p-2 border rounded text-sm">Italic</button>
      </div>

      <div class="mb-2">
        <label class="text-sm font-semibold">Text Transform</label>
        <select class="w-full border rounded p-2 mt-1 text-sm">
          <option value="none">None</option>
          <option value="uppercase">Uppercase</option>
          <option value="lowercase">Lowercase</option>
          <option value="capitalize">Capitalize</option>
        </select>
      </div>

      <div class="mb-2">
        <label class="text-sm font-semibold">Text Size</label>
        <input type="range" min="10" max="100" class="w-full" />
      </div>

      <div class="mb-2">
        <label class="text-sm font-semibold">Letter Spacing</label>
        <input type="range" min="0" max="10" class="w-full" />
      </div>

      <div class="mb-2">
        <label class="text-sm font-semibold">Word Spacing</label>
        <input type="range" min="0" max="20" class="w-full" />
      </div>

      <div class="mb-2">
        <label class="text-sm font-semibold">Text Align</label>
        <div class="grid grid-cols-3 gap-2 mt-1">
          <button class="p-2 border rounded text-sm">Left</button>
          <button class="p-2 border rounded text-sm">Center</button>
          <button class="p-2 border rounded text-sm">Right</button>
          <button class="p-2 border rounded text-sm">Justify</button>
        </div>
      </div>
    </div>
  </div>


  <!-- ELEMENT MODAL -->
  <div id="elementModal" class="modal hidden">
    <div class="modal-box">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray">Elements</h2>
        <button onclick="closeModal('elementModal')" class="text-xl text-gray">&times;</button>
      </div>

      <div class="grid grid-cols-3 gap-2 text-sm">
        <button class="p-2 border rounded">H1</button>
        <button class="p-2 border rounded">H2</button>
        <button class="p-2 border rounded">H3</button>
        <button class="p-2 border rounded">Paragraph</button>
        <button class="p-2 border rounded">Image</button>
        <button class="p-2 border rounded">Button</button>
      </div>
    </div>
  </div>

  <!-- DESIGN MODAL -->
  <div id="designModal" class="modal hidden">
    <div class="modal-box">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray">Design</h2>
        <button onclick="closeModal('designModal')" class="text-xl text-gray">&times;</button>
      </div>

      <div class="grid grid-cols-3 gap-2">
        <img src="https://via.placeholder.com/100" class="rounded shadow-sm" alt="Design 1" />
        <img src="https://via.placeholder.com/100" class="rounded shadow-sm" alt="Design 2" />
        <img src="https://via.placeholder.com/100" class="rounded shadow-sm" alt="Design 3" />
        <img src="https://via.placeholder.com/100" class="rounded shadow-sm" alt="Design 4" />
        <img src="https://via.placeholder.com/100" class="rounded shadow-sm" alt="Design 5" />
        <img src="https://via.placeholder.com/100" class="rounded shadow-sm" alt="Design 6" />
      </div>
    </div>
  </div>

  <!-- SHARE MODAL -->
<div id="shareModal" class="modal hidden">
  <div class="modal-box">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-lg font-semibold text-gray">Share</h2>
      <button onclick="closeModal('shareModal')" class="text-xl text-gray">&times;</button>
    </div>

    <p class="mb-4 text-sm text-gray">Click below to download or save your project:</p>

    <div class="flex gap-2">
      <button class="p-2 px-4 border-none bg-hospital text-white rounded shadow text-sm">
        <i class="bi bi-download mr-1"></i> Download as PNG
      </button>

      <button onclick="saveHtml()" class="p-2 border-none px-4 bg-blue text-white rounded shadow text-sm">
        <i class="bi bi-save mr-1"></i> Save
      </button>
    </div>
  </div>
</div>





  <script>
    function openModal(id) {
      console.log('ghhg');
      document.getElementById(id).classList.add('active');
    }

    function closeModal(id) {
      document.getElementById(id).classList.remove('active');
    }
  </script>

  <script>
  function saveHtml() {
    const html = document.querySelector('.editor-holder').innerHTML;
    const templateId = new URLSearchParams(window.location.search).get('template_id');

    fetch('save_template.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ html_contents: html, template_id: templateId }),
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert('Template saved successfully!');
      } else {
        alert('Failed to save template.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error saving template.');
    });
  }
</script>


</body>

</html>