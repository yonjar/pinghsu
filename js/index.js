const scrollElement =
  window.document.scrollingElement ||
  window.document.body ||
  window.document.documentElement;

const goTopBtn = document.querySelector(".go-top-btn");
const goDownBtn = document.querySelector(".go-down-btn");

goTopBtn.addEventListener("click", () => {
  anime({
    targets: scrollElement,
    scrollTop: 0,
    duration: 500,
    easing: "easeInOutQuad"
  });
});

goDownBtn.addEventListener("click", () => {
  anime({
    targets: scrollElement,
    scrollTop: document.body.offsetHeight,
    duration: 500,
    easing: "easeInOutQuad"
  });
});
