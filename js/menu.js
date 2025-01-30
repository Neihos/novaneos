// =================================================================================================================
//                                                  burger menu
// =================================================================================================================

document.addEventListener("DOMContentLoaded", () => {
  const burgerIcon = document.querySelector(".burgerIcon");
  const crossIcon = document.querySelector(".crossIcon");
  const burgerMenu = document.querySelector(".mobileNav");

  // Fonction pour ouvrir/fermer le menu
  function toggleMenu() {
    burgerMenu.classList.toggle("open");
    const isOpen = burgerMenu.classList.contains("open");

    // Met à jour l'affichage des icônes
    crossIcon.classList.toggle("hiddenNow", isOpen);
    burgerIcon.classList.toggle("hiddenNow", !isOpen);

    // Désactive le scroll quand le menu est ouvert
    document.body.style.overflow = !isOpen ? "hidden" : "auto";
  }

  // Fonction pour fermer le menu si la largeur dépasse 767px
  function checkWindowSize() {
    if (window.innerWidth > 767) {
      burgerMenu.classList.remove("open");
      burgerIcon.classList.remove("hiddenNow");
      crossIcon.classList.add("hiddenNow");
      document.body.style.overflow = "auto";
    }
  }

  // Ajoute les événements de clic
  burgerIcon.addEventListener("click", toggleMenu);
  crossIcon.addEventListener("click", toggleMenu);
  window.addEventListener("resize", checkWindowSize);

  // Vérification initiale de la taille de l'écran
  checkWindowSize();
});
