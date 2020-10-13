function getElementTop(element) {
  var actualTop = element.offsetTop;
  var current = element.offsetParent;
  while (current !== null) {
    actualTop += current.offsetTop + current.clientTop;
    current = current.offsetParent;
  }
  return actualTop;
}

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
    easing: "easeInOutQuad",
  });
});

goDownBtn.addEventListener("click", () => {
  anime({
    targets: scrollElement,
    scrollTop: document.body.offsetHeight,
    duration: 500,
    easing: "easeInOutQuad",
  });
});

if (location.href.indexOf("archives") > 0) {
  const directory = document.querySelector("#directory ul");

  directory.addEventListener("click", (e) => {
    e.preventDefault();
    let elem = e.target;
    let targetElem = document.querySelector(elem.getAttribute("href"));
    anime({
      targets: scrollElement,
      scrollTop: getElementTop(targetElem),
      duration: 500,
      easing: "easeInOutQuad",
    });
  });
}
