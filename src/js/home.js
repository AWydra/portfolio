//=include plugins\tiny-slider.js
//=include resources\slider.conf.js
//=include resources\Safe.js
//=include resources\Form.js

document.addEventListener("DOMContentLoaded", () => {
  const safe = new Safe();
  safe.init();

  const form = new Form();
  form.init();
});
