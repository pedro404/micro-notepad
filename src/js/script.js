(function () {
  //!------------------: START

  //!---------------------------------------------: Получаем высоту окна просмотра
  let vh = window.innerHeight * 0.01;
  //!------: устанавливаем значение свойства --vh
  document.documentElement.style.setProperty("--vh", `${vh}px`);

  //!------: Слушаем событие resize
  window.addEventListener("resize", () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  });
  //!---------------------------------------------: Получаем высоту окна просмотра

  //!------------------: STOP
})();

window.addEventListener(
  "click",
  (e) => {
    e = e || window.event;
    var elem = e.target || e.srcElement;

    if (elem.className === "but-save") {
      elem.classList.toggle("but-save-ok");
      document.querySelector("#myProgress").classList.toggle("on");
      window.navigator.vibrate(500);
      move();
      setTimeout(function () {
        document.querySelector('[name="save"]').click();
      }, 1000);
    }
  },
  true
);

var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
