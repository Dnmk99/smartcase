// Function to create Intersection Observer for multiple elements
function observeElements(elements) {
    elements.forEach((element) => {
      let hasIntersected = false; // Flag to track if the element has intersected
  
      const observer = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            // Check if the current element is in the viewport
            if (entry.isIntersecting && !hasIntersected) {
              // If the element is in the viewport for the first time, add the "transition" and "active" classes
              element.classList.add('transition', 'active');
              hasIntersected = true; // Set the flag to true, so the classes won't be toggled again
            }
          });
        },
        // Options for the Intersection Observer (in this case, we'll use the default options)
      );
  
      // Start observing the current element
      observer.observe(element);
    });
  }
  
  // Function to check if the user has scrolled to the bottom of the page
  function isScrolledToBottom() {
    const scrollPosition = window.scrollY; // Current scroll position
    const documentHeight = document.documentElement.scrollHeight; // Height of the entire document
    const windowHeight = window.innerHeight; // Height of the visible window
  
    return scrollPosition + windowHeight >= documentHeight; // True if scrolled to the bottom, false otherwise
  }
  
  // Get all elements with the class "your-elements"
  const targetElements = document.querySelectorAll('.reveal');
  
  // Call the function and pass the target elements to observe
  observeElements(targetElements);
  
  // Event listener to trigger an action when the user scrolls to the bottom of the page
  window.addEventListener('scroll', () => {
    if (isScrolledToBottom()) {
      // If scrolled to the bottom, do something
      console.log('Scrolled to the bottom!');
      // Add your logic here to perform an action when the user has scrolled to the bottom of the page
    }
  });
  