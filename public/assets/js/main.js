// Quiz
var splide = new Splide(".splide", {
  type: "loop",
  perPage: 3,
  rewind: true,
  breakpoints: {
    640: {
      perPage: 2,
      gap: ".7rem",
      height: "12rem",
    },
    480: {
      perPage: 1,
      gap: ".7rem",
      height: "12rem",
    },
  },
});
splide.mount();
