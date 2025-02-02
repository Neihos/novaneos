// =================================================================================================================
//                                                  page Home
// =================================================================================================================

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
    cubeElements.forEach(cubeElement => {
        observer.observe(cubeElement);
    });
}

// Appeler la fonction une seule fois
document.addEventListener("DOMContentLoaded", cubeMove);
