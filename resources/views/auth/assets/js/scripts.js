// Aqui estara todos los js

//creamos  funciones
const navSlide = () => {
  const mas_opciones = document.querySelector(".mas-opciones");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");

  //Crear evento en el mas opciones para que se muestre
  mas_opciones.addEventListener("click", () => {
    //activar o desactivar mas opciones
    nav.classList.toggle("nav-active");

    //Crear evento para que se pasen los links adentro del mas opciones
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = ``;
      } else {
        link.style.animation = `navLinkAnimation 0.5s ease forwards ${index / 7 + 0.5}s`;
      }
    });

    //3 lineas animacion
    mas_opciones.classList.toggle("activar");
  });
};
navSlide();

/*----------para el slider o banner------------*/

//almacena slider en una variable
var slider = $("#slider");
//almacena botones
var sig = $("#btn-siguiente");
var ant = $("#btn-anterior");
//mover ultima imagen al primer lugar para la transicion
$("#slider section:last").insertBefore("#slider section:first");

//mostrar la primera imagen con un margen de -100%
slider.css("margin-left", "-" + 100 + "%");

function moverD() {
  slider.animate(
    {
      marginLeft: "-" + 200 + "%",
    },
    700,
    function () {
      $("#slider section:first").insertAfter("#slider section:last");
      slider.css("margin-left", "-" + 100 + "%");
    }
  );
}
function moverI() {
  slider.animate(
    {
      marginLeft: 0,
    },
    700,
    function () {
      $("#slider section:last").insertBefore("#slider section:first");
      slider.css("margin-left", "-" + 100 + "%");
    }
  );
}

sig.on("click", function () {
  moverD();
});

ant.on("click", function () {
  moverI();
});

function autoplay() {
  interval = setInterval(function () {
    moverD();
  }, 7000);
}
autoplay();

//CAMBIAR CONTENIDO HTML
