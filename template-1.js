function applyDynamicUtilities() {
  const allElements = document.querySelectorAll('*');

  allElements.forEach(el => {
    [...el.classList].forEach(cls => {
      // Width: w-[value]
      if (cls.startsWith('w-[')) {
        const value = cls.match(/w-\[(.+?)\]/)?.[1];
        if (value) el.style.width = value + (isNaN(value) ? '' : 'px');
      }

      // Height: h-[value]
      if (cls.startsWith('h-[')) {
        const value = cls.match(/h-\[(.+?)\]/)?.[1];
        if (value) el.style.height = value + (isNaN(value) ? '' : 'px');
      }

      // Padding: p-[value]
      if (cls.startsWith('p-[')) {
        const value = cls.match(/p-\[(.+?)\]/)?.[1];
        if (value) el.style.padding = value + (isNaN(value) ? '' : 'px');
      }

      // Margin: m-[value]
      if (cls.startsWith('m-[')) {
        const value = cls.match(/m-\[(.+?)\]/)?.[1];
        if (value) el.style.margin = value + (isNaN(value) ? '' : 'px');
      }

      // Padding sides: pt-[10], pl-[20]
if (/^p[tblrxy]-\[/.test(cls)) {
  const side = cls[1]; // t, b, l, r, x, y
  const value = cls.match(/p[tblrxy]-\[(.+?)\]/)?.[1];

  if (value) {
    const props = {
      t: ['paddingTop'],
      b: ['paddingBottom'],
      l: ['paddingLeft'],
      r: ['paddingRight'],
      x: ['paddingLeft', 'paddingRight'],
      y: ['paddingTop', 'paddingBottom']
    }[side];

    if (props) {
      props.forEach(prop => {
        el.style[prop] = value + (isNaN(value) ? '' : 'px');
      });
    }
  }
}

// Margin sides: mt-[10], ml-[20]
if (/^m[tblrxy]-\[/.test(cls)) {
  const side = cls[1]; // t, b, l, r, x, y
  const value = cls.match(/m[tblrxy]-\[(.+?)\]/)?.[1];

  if (value) {
    const props = {
      t: ['marginTop'],
      b: ['marginBottom'],
      l: ['marginLeft'],
      r: ['marginRight'],
      x: ['marginLeft', 'marginRight'],
      y: ['marginTop', 'marginBottom']
    }[side];

    if (props) {
      props.forEach(prop => {
        el.style[prop] = value + (isNaN(value) ? '' : 'px');
      });
    }
  }
}


      // Font size: text-[value]
      if (cls.startsWith('text-[')) {
        const value = cls.match(/text-\[(.+?)\]/)?.[1];
        if (value) el.style.fontSize = value;
      }

      // Letter spacing: tracking-[value]
      if (cls.startsWith('tracking-[')) {
        const value = cls.match(/tracking-\[(.+?)\]/)?.[1];
        if (value) el.style.letterSpacing = value;
      }

      // Color: text-[color], like text-[red] or text-[#ffcc00]
      if (cls.startsWith('text-[')) {
        const value = cls.match(/text-\[(.+?)\]/)?.[1];
        if (value) el.style.color = value;
      }

      // Background color: bg-[color]
      if (cls.startsWith('bg-[')) {
        const value = cls.match(/bg-\[(.+?)\]/)?.[1];
        if (value) el.style.backgroundColor = value;
      }
    });
  });
}

// Run after DOM is ready
document.addEventListener('DOMContentLoaded', applyDynamicUtilities);
