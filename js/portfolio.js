/* button animation in the portfolio section*/
$(document).ready(function () {
  /* p1 */
  $("portfolio-container-abstract1").click(function () {
    $("portfolio-show-abstract1").slideToggle(1000);
  });
  /* p2 */
  $("portfolio-container-abstract2").click(function () {
    $("portfolio-show-abstract2").slideToggle(1000);
  });
  /* p3 */
  $("portfolio-container-abstract3").click(function () {
    $("portfolio-show-abstract3").slideToggle(1000);
  });
  /* p4 */
  $("portfolio-container-abstract4").click(function () {
    $("portfolio-show-abstract4").slideToggle(1000);
  });
  /* p5 */
  $("portfolio-container-abstract5").click(function () {
    $("portfolio-show-abstract5").slideToggle(1000);
  });
});

/* abstract pop up */
let popup1 = document.getElementById("portfolio-abstract-popup1");
let popup2 = document.getElementById("portfolio-abstract-popup2");
let popup3 = document.getElementById("portfolio-abstract-popup3");
let popup4 = document.getElementById("portfolio-abstract-popup4");
let popup5 = document.getElementById("portfolio-abstract-popup5");




/* p1 pop up functions */
function openPopup1() {
  popup1.classList.add("open-popup1")
}

function closePopup1() {
  popup1.classList.remove("open-popup1")
}

/* p2 pop up functions */
function openPopup2() {
  popup2.classList.add("open-popup2")
}
function closePopup2() {
  popup2.classList.remove("open-popup2")
}

/* p3 pop up functions */
function openPopup3() {
  popup3.classList.add("open-popup3")
}
function closePopup3() {
  popup3.classList.remove("open-popup3")
}

/* p4 pop up functions */
function openPopup4() {
  popup4.classList.add("open-popup4")
}
function closePopup4() {
  popup4.classList.remove("open-popup4")
}

/* p5 pop up functions */
function openPopup5() {
  popup5.classList.add("open-popup5")
}
function closePopup5() {
  popup5.classList.remove("open-popup5")
}










/* button animation in the portfolio section*/
/* $(document).ready(function () {
  $("portfolio-container-abstract").click(function () {
    $("portfolio-show-abstract").slideToggle(1000);
  });

}); */

/* abstract pop up */
/* let popup = document.getElementById("portfolio-abstract-popup");

function openPopup() {
  popup.classList.add("open-popup")
}
function closePopup() {
  popup.classList.remove("open-popup")
} */







/*   if (popup[i]) {
    popup[i].hidden = true;
  } else {
    console.log(pages[i] + " does not exist!");
  } */

/* prøv at lave et if statement til at bestemme hvilken popup der åbnes,
og gør så den kan ses ligemeget hvor langt man har scrollet ned */