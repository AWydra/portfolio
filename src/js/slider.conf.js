window.addEventListener('DOMContentLoaded', () => {
  const slider = tns({
    container: '.testimonials__slider',
    items: 1,
    slideBy: "page",
    controlsContainer: "#customize-controls",
    mouseDrag: true,
    swipeAngle: false,
    speed: 400
  });
});