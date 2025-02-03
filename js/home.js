// =================================================================================================================
//                                                  page Home
// =================================================================================================================

document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".main-container")) {

    // Fonction pour l'animation des cubes de la section nos services

    function cubeMove() {
      const cubeElements = document.querySelectorAll(".cubeNovaneos");

      const observerOptions = {
        root: null,
        threshold: 1, // 100% du cube visible
        rootMargin: "0px 0px -5% 0px",
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const cubeElement = entry.target;

            // Lancer l'animation pour le cube visible
            cubeElement.classList.add("move");

            // Stopper l'observation après le déclenchement
            observer.unobserve(cubeElement);
          }
        });
      }, observerOptions);

      // Ajouter l'observateur à chaque cube
      cubeElements.forEach((cubeElement) => {
        observer.observe(cubeElement);
      });
    }
    cubeMove();

    function pourcentUp() {
      const pourcentElements = [
        document.querySelector("#pourcentBlock1"),
        document.querySelector("#pourcentBlock2"),
        document.querySelector("#pourcentBlock3"),
        document.querySelector("#pourcentBlock4"),
      ];

      const observerOptions = {
        root: null,
        threshold: 1, // 100% de l'élément visible
        rootMargin: "0px 0px -5% 0px",
      };

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const pourcentElement = entry.target;

            const targetNumber = pourcentElement.querySelector("#number");

            if (pourcentElement.id === "pourcentBlock1") {
              animateCounter(targetNumber, 78, 10);
            } else if (pourcentElement.id === "pourcentBlock2") {
              animateCounter(targetNumber, 93, 14);
            } else if (pourcentElement.id === "pourcentBlock3") {
              animateCounter(targetNumber, 62, 22);
            } else if (pourcentElement.id === "pourcentBlock4") {
              animateCounter(targetNumber, 90, 22);
            }

            observer.unobserve(pourcentElement); // Stopper l'observation après le déclenchement
          }
        });
      }, observerOptions);

      // Observer chaque élément de compétence
      pourcentElements.forEach((number) => {
        observer.observe(number);
      });

      // Fonction générique pour animer les compteurs
      function animateCounter(targetElement, maxValue, intervalTime) {
        let counter = 0;

        if (!targetElement) {
          console.error("Élément introuvable pour l'animation.");
          return;
        }

        const interval = setInterval(() => {
          if (counter >= maxValue) {
            clearInterval(interval);
          } else {
            counter++;
            targetElement.innerHTML = counter + "%";
          }
        }, intervalTime);
      }
    }

    pourcentUp();
  }
});
