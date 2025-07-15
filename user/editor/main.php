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

<body class="p-2 w-full flex flex-col md:flex-row gap-2">

  <!-- SIDENAV -->
  <div class="bg-light p-2 shadow-sm rounded-sm w-full md:w-20 flex md:flex-col items-center justify-center md:justify-start gap-3 fixed bottom-0 md:static z-50 overflow-x-auto hide-scrollbar">

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




  <main class="w-full md:w-[calc(100%-5.5rem)] bg-light p-2 flex justify-center items-center">

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

      <!-- HEIGHT AND WIDTH -->
      <h3 class="text-sm font-bold mb-2">Height And Width</h3>
      <div class="grid grid-cols-3 gap-2 mb-2">
        <div>
          <p class="text-xs">Height (px)</p>
          <input type="text" data-style="height" class="position-input p-2 border rounded text-sm" />
        </div>
        <div>
          <p class="text-xs">Width (px)</p>
          <input type="text" data-style="width" class="position-input p-2 border rounded text-sm" />
        </div>
      </div>

      <!-- PADDING -->
      <h3 class="text-sm font-bold mt-2">Padding</h3>
      <div class="grid grid-cols-3 gap-2 mt-2">
        <div>
          <p class="text-xs">Padding Top (px)</p>
          <input type="text" data-style="padding-top" class="position-input p-2 border w-full rounded text-sm" />
        </div>
        <div>
          <p class="text-xs">Padding Bottom (px)</p>
          <input type="text" data-style="padding-bottom" class="position-input p-2 border w-full rounded text-sm" />
        </div>
        <div>
          <p class="text-xs">Padding Left (px)</p>
          <input type="text" data-style="padding-left" class="position-input p-2 border w-full rounded text-sm" />
        </div>
        <div>
          <p class="text-xs">Padding Right (px)</p>
          <input type="text" data-style="padding-right" class="position-input p-2 border w-full rounded text-sm" />
        </div>
      </div>

      <!-- MARGIN -->
      <h3 class="text-sm font-bold mt-2">Margin</h3>
      <div class="grid grid-cols-3 gap-2 mt-2">
        <div>
          <p class="text-xs">Margin Top (px)</p>
          <input type="text" data-style="margin-top" class="position-input p-2 border w-full rounded text-sm" />
        </div>
        <div>
          <p class="text-xs">Margin Bottom (px)</p>
          <input type="text" data-style="margin-bottom" class="position-input p-2 border w-full rounded text-sm" />
        </div>
        <div>
          <p class="text-xs">Margin Left (px)</p>
          <input type="text" data-style="margin-left" class="position-input p-2 border w-full rounded text-sm" />
        </div>
        <div>
          <p class="text-xs">Margin Right (px)</p>
          <input type="text" data-style="margin-right" class="position-input p-2 border w-full rounded text-sm" />
        </div>
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

        <!-- Text Color Section -->
        <input type="text" data-style="color" class="color-input px-1 mb-2 w-full h-10 border rounded" placeholder="#000000 or red" />


        <!-- Suggested colors -->
        <div class="grid w-fit grid-cols-6 gap-2" data-style="color">
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #000;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #333;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #555;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #aaa;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #ddd;"></div>
          <div class="w-10 h-10 rounded-full border color-picker" style="background-color: #fff;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #ff4d4d;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #ff7f50;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #ffd700;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #90ee90;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #00ced1;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #1e90ff;"></div>
        </div>
      </div>

      <!-- Background Color Section -->
      <div>
        <label class="text-sm font-semibold block mb-2">Background Color</label>
        <!-- Background Color Section -->
        <input type="text" data-style="background-color" class="color-input mb-2 px-1 w-full h-10 border rounded" placeholder="#ffffff or lightblue" />


        <!-- Suggested colors -->
        <div class="grid w-fit grid-cols-6 gap-2" data-style="background-color">
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #000;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #333;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #555;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #aaa;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #ddd;"></div>
          <div class="w-10 h-10 rounded-full border color-picker" style="background-color: #fff;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #ff4d4d;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #ff7f50;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #ffd700;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #90ee90;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #00ced1;"></div>
          <div class="w-10 h-10 rounded-full color-picker" style="background-color: #1e90ff;"></div>
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
        <button class="p-2 border rounded text-sm"
          data-style="font-weight"
          data-value="bold">Bold</button>

        <button class="p-2 border rounded text-sm"
          data-style="text-decoration"
          data-value="underline">Underline</button>

        <button class="p-2 border rounded text-sm"
          data-style="font-style"
          data-value="italic">Italic</button>

      </div>

      <div class="mb-2">
        <label class="text-sm font-semibold">Text Transform</label>
        <select class="w-full border rounded p-2 mt-1 text-sm" data-style="text-transform">
          <option value="none">None</option>
          <option value="uppercase">Uppercase</option>
          <option value="lowercase">Lowercase</option>
          <option value="capitalize">Capitalize</option>
        </select>
      </div>

      <div class="flex flex-wrap gap-1 mb-4">
        <div class="mb-2 flex flex-col">
          <label class="text-sm font-semibold">Text Size</label>
          <input type="text" class="w-40 rounded border h-10 px-1" data-style="font-size" />
        </div>

        <div class="mb-2 flex flex-col">
          <label class="text-sm font-semibold">Letter Spacing</label>
          <input type="text" class="w-40 rounded border h-10 px-1" data-style="letter-spacing" />
        </div>

        <div class="mb-2 flex flex-col">
          <label class="text-sm font-semibold">Word Spacing</label>
          <input type="text" class="w-40 rounded border h-10 px-1" data-style="word-spacing" />
        </div>
      </div>


      <div class="mb-2">
        <label class="text-sm font-semibold">Text Align</label>
        <div class="grid grid-cols-3 gap-2 mt-1">
          <button data-style="text-align"
            data-value="left" class="p-2 border rounded text-sm">Left</button>
          <button data-style="text-align"
            data-value="center" class="p-2 border rounded text-sm">Center</button>
          <button data-style="text-align"
            data-value="right" class="p-2 border rounded text-sm">Right</button>
          <button data-style="text-align"
            data-value="justify" class="p-2 border rounded text-sm">Justify</button>
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

      <div class="mt-4">
        <label class="text-sm font-semibold block mb-1">Element Type</label>
        <select id="elementType" class="w-full border rounded p-2 text-sm">
          <option value="p">Paragraph</option>
          <option value="h1">Heading 1</option>
          <option value="h3">Heading 3</option>
          <option value="img">Image</option>
          <option value="button">Button</option>
          <option value="link-button">Button (with link)</option>
        </select>
      </div>

      <div id="srcInput" class="mt-2 hidden">
        <label class="text-sm font-semibold block mb-1">Image Source (src)</label>
        <input type="text" id="elementSrc" class="w-full border rounded p-2 text-sm" placeholder="https://example.com/image.png" />
      </div>

      <div id="linkInput" class="mt-2 hidden">
        <label class="text-sm font-semibold block mb-1">Link URL (for button)</label>
        <input type="text" id="elementLink" class="w-full border rounded p-2 text-sm" placeholder="https://example.com" />
      </div>

      <div id="innerHtmlInput" class="mt-2">
        <label class="text-sm font-semibold block mb-1">Text / Inner HTML</label>
        <input value="Button" type="text" id="elementContent" class="w-full border rounded p-2 text-sm" placeholder="Enter text here" />
      </div>

      <div class="mt-4">
        <label class="text-sm font-semibold block mb-1">Insert Position</label>
        <select id="insertPosition" class="w-full border rounded p-2 text-sm">
          <option value="inside">Inside</option>
          <option value="before">Before</option>
          <option value="after">After</option>
        </select>
      </div>

      <div class="mt-4 text-right">
        <button id="createElementBtn" class="border p-2 rounded text-sm bg-hospital text-white">Create</button>
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
      document.getElementById(id).classList.add('active');
    }

    function closeModal(id) {
      document.getElementById(id).classList.remove('active');
    }

    function saveHtml() {
      const html = document.querySelector('.editor-holder').innerHTML;
      const templateId = new URLSearchParams(window.location.search).get('template_id');

      fetch('save_template.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            html_contents: html,
            template_id: templateId
          }),
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

  <script>
    let selectedElement = null;

    // Select elements inside the editor
    document.querySelector('.editor-holder').addEventListener('click', function(e) {
      if (e.target !== this) {
        selectedElement = e.target;
        document.querySelectorAll('.editor-holder *').forEach(el => el.classList.remove('selected-element'));
        selectedElement.classList.add('selected-element');

        updateActiveStyleButtons();
        updateColorInputs();
      }
    });

    function applyStyle(property, value, button = null) {
      if (!selectedElement) return alert("Please select an element first.");
      const current = selectedElement.style[property];

      if (current === value) {
        selectedElement.style[property] = '';
        if (button && button.tagName !== 'SELECT') button.classList.remove('active-style-btn');
      } else {
        selectedElement.style[property] = value;
        if (button && button.tagName !== 'SELECT') {
          document.querySelectorAll(`[data-style="${property}"]`).forEach(b => {
            if (b.tagName !== 'SELECT') b.classList.remove('active-style-btn');
          });
          button.classList.add('active-style-btn');
        }
      }
    }

    function updateActiveStyleButtons() {
      if (!selectedElement) return;

      const styles = window.getComputedStyle(selectedElement);

      const styleMap = {
        'font-weight': styles.fontWeight === '700' || styles.fontWeight === 'bold' ? 'bold' : 'normal',
        'font-style': styles.fontStyle,
        'text-decoration': styles.textDecorationLine.toLowerCase(),
        'text-transform': styles.textTransform,
        'text-align': styles.textAlign,
        'font-size': styles.fontSize,
        'letter-spacing': styles.letterSpacing,
        'word-spacing': styles.wordSpacing
      };

      Object.keys(styleMap).forEach(key => {
        const value = styleMap[key];

        document.querySelectorAll(`[data-style="${key}"]`).forEach(control => {
          if (control.tagName === 'BUTTON') {
            const btnValue = control.getAttribute('data-value');
            const isActive = value === btnValue || value.includes?.(btnValue);
            control.classList.toggle('active-style-btn', isActive);
          }

          if (control.tagName === 'INPUT' && control.type === 'text') {
            control.value = value;
          }
        });
      });
    }

    document.querySelectorAll('[data-style]').forEach(control => {
      if (control.tagName === 'BUTTON') {
        control.addEventListener('click', function() {
          const prop = this.getAttribute('data-style');
          const value = this.getAttribute('data-value');
          applyStyle(prop, value, this);
        });
      }

      if (control.tagName === 'SELECT') {
        control.addEventListener('change', function() {
          const prop = this.getAttribute('data-style');
          const value = this.value;
          applyStyle(prop, value, this);
        });
      }

      if (control.tagName === 'INPUT' && control.type === 'text') {
        control.addEventListener('input', function() {
          const prop = this.getAttribute('data-style');
          const value = this.value;
          applyStyle(prop, value);
        });
      }
    });

    function updateColorInputs() {
      if (!selectedElement) return;

      const styles = window.getComputedStyle(selectedElement);

      document.querySelectorAll('.color-input').forEach(input => {
        const styleName = input.getAttribute('data-style');
        let color = styles.getPropertyValue(styleName);

        if (color.startsWith('rgb')) {
          const rgb = color.match(/\d+/g);
          color = '#' + rgb.map(x => parseInt(x).toString(16).padStart(2, '0')).join('');
        }

        input.value = color;
      });
    }

    document.querySelectorAll('.color-input').forEach(input => {
      input.addEventListener('input', function() {
        if (!selectedElement) return;
        const prop = input.getAttribute('data-style');
        const value = input.value.trim();
        if (value && (value.startsWith('#') || /^[a-zA-Z]+$/.test(value))) {
          selectedElement.style[prop] = value;
        }
      });
    });

    document.querySelectorAll('.color-picker').forEach(picker => {
      picker.addEventListener('click', function() {
        if (!selectedElement) return;

        const value = this.style.backgroundColor;

        // Traverse up to find the container with data-style
        let parent = this.parentElement;
        const prop = parent?.getAttribute('data-style');

        if (prop) {
          selectedElement.style[prop] = value;

          // Optional: update matching input
          const input = parent.previousElementSibling;
          if (input && input.classList.contains('color-input')) {
            input.value = rgbToHex(value);
          }
        }
      });
    });


    function rgbToHex(rgb) {
      const result = rgb.match(/\d+/g);
      return '#' + result.map(x => parseInt(x).toString(16).padStart(2, '0')).join('');
    }

    // ========== 🧱 ELEMENT CREATION (NEW CODE) ==========
    const elementButtons = document.querySelectorAll('#elementModal [data-element]');
    const positionSelect = document.getElementById('insertPosition');

    elementButtons.forEach(button => {
      button.addEventListener('click', function() {
        if (!selectedElement) return alert("Please select an element first.");

        const tag = button.getAttribute('data-element');
        const position = positionSelect.value;

        const newEl = document.createElement(tag);

        // Default content or attributes
        if (tag === 'img') {
          newEl.src = 'https://via.placeholder.com/150';
          newEl.alt = 'Image';
          newEl.style.maxWidth = '100%';
        } else if (tag === 'button') {
          newEl.textContent = 'Click Me';
        } else if (tag === 'p') {
          newEl.textContent = 'New paragraph';
        } else {
          newEl.textContent = tag.toUpperCase();
        }

        // Insert based on selected position
        if (position === 'inside') {
          selectedElement.appendChild(newEl);
        } else if (position === 'before') {
          selectedElement.parentNode.insertBefore(newEl, selectedElement);
        } else if (position === 'after') {
          selectedElement.parentNode.insertBefore(newEl, selectedElement.nextSibling);
        }

        // Auto select new element
        document.querySelectorAll('.editor-holder *').forEach(el => el.classList.remove('selected-element'));
        newEl.classList.add('selected-element');
        selectedElement = newEl;

        updateActiveStyleButtons();
        updateColorInputs();
      });
    });

    // Show/hide inputs depending on element type
    document.getElementById('elementType').addEventListener('change', function() {
      const type = this.value;

      document.getElementById('srcInput').classList.toggle('hidden', type !== 'img');
      document.getElementById('linkInput').classList.toggle('hidden', type !== 'link-button');
    });

    // Create Element
    document.getElementById('createElementBtn').addEventListener('click', function() {
      if (!selectedElement) return alert('Please select an element first.');

      const type = document.getElementById('elementType').value;
      const position = document.getElementById('insertPosition').value;
      const content = document.getElementById('elementContent').value;
      const src = document.getElementById('elementSrc').value;
      const link = document.getElementById('elementLink').value;

      let newElement;

      if (type === 'img') {
        newElement = document.createElement('img');
        newElement.src = src || '';
        newElement.alt = content || '';
      } else if (type === 'link-button') {
        newElement = document.createElement('a');
        newElement.href = link || '#';
        newElement.innerHTML = content || 'Click Me';
        newElement.className = 'p-2 border rounded inline-block';
      } else {
        newElement = document.createElement(type === 'button' ? 'button' : type);
        newElement.innerHTML = content || '';
      }

      // Insert element
      if (position === 'inside') {
        selectedElement.appendChild(newElement);
      } else if (position === 'before') {
        selectedElement.parentNode.insertBefore(newElement, selectedElement);
      } else if (position === 'after') {
        selectedElement.parentNode.insertBefore(newElement, selectedElement.nextSibling);
      }

      // Reset form
      document.getElementById('elementContent').value = '';
      document.getElementById('elementSrc').value = '';
      document.getElementById('elementLink').value = '';
    });
  </script>





</body>

</html>