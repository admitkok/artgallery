// script.js

document.addEventListener("DOMContentLoaded", function() {
    const container = document.querySelector(".color-change-container");

    // Function to update the background color based on scroll position
    function updateColor() {
        const scrollY = window.scrollY || window.pageYOffset;
        const containerHeight = container.clientHeight;

        // Calculate a percentage based on scroll position
        const scrollPercentage = (scrollY / containerHeight) * 100;

        // Update the background color based on the percentage
        container.style.backgroundColor = `hsl(${scrollPercentage}, 50%, 50%)`;
    }

    // Event listener for the scroll event
    window.addEventListener("scroll", function() {
        updateColor();
    });
});
