// Function to create Intersection Observer for multiple elements
function observeElements(elements) {
    elements.forEach((element) => {
      let hasIntersected = false;
      const observer = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            // Check if the current element is in the viewport
            if (entry.isIntersecting && !hasIntersected) {
              element.classList.add('transition', 'active');
              hasIntersected = true; 
            }
          });
        },
      );
      observer.observe(element);
    });
  }
  function isScrolledToBottom() {
    const scrollPosition = window.scrollY; 
    const documentHeight = document.documentElement.scrollHeight; 
    const windowHeight = window.innerHeight; 
    return scrollPosition + windowHeight >= documentHeight; 
  }
  const targetElements = document.querySelectorAll('.reveal');
  const targetElements_lr = document.querySelectorAll('.reveal_faster');
  const targetElements_rl = document.querySelectorAll('.reveal_slow');
  observeElements(targetElements);
  observeElements(targetElements_lr);
  observeElements(targetElements_rl);
  // Event listener to trigger an action when the user scrolls to the bottom of the page
  window.addEventListener('scroll', () => {
    if (isScrolledToBottom()) {
      element.classList.remove('transition', 'active');
    }
  });
  window.addEventListener("scroll", function() {
    if (window.scrollY > 100) {}
});
