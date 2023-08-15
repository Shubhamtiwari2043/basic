
  document.addEventListener("DOMContentLoaded", function () {
    // Select all the destination boxes
    const boxes = document.querySelectorAll(".box");

    // Options for the IntersectionObserver
    const options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5, // Adjust this value to control when the elements start revealing
    };

    // IntersectionObserver callback function
    function handleIntersection(entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("reveal");
        } else {
          entry.target.classList.remove("reveal");
        }
      });
    }

    // Create the IntersectionObserver
    const observer = new IntersectionObserver(handleIntersection, options);

    // Observe each box
    boxes.forEach((box) => observer.observe(box));
  });