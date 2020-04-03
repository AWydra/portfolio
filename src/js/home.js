//=include plugins\tiny-slider.js
//=include resources\slider.conf.js
//=include resources\Safe.js

document.addEventListener("DOMContentLoaded", () => {
  const safe = new Safe();
  safe.init();
});
