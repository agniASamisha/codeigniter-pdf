var dropdownButtons = document.querySelectorAll('.dropbtn');

// Loop through dropdown buttons
dropdownButtons.forEach(function(button) {
    // Add click event listener to each dropdown button
    button.addEventListener('click', function() {
        // Close all dropdowns except the clicked one
        closeDropdowns(this);
        
        // Get the dropdown content associated with this dropdown button
        var content = this.nextElementSibling;
        
        // Toggle the visibility of the dropdown content
        content.style.display = (content.style.display === 'block') ? 'none' : 'block';
    });
});

// Function to close all dropdowns except the clicked one
function closeDropdowns(clickedButton) {
    dropdownButtons.forEach(function(button) {
        // Check if the button is not the clicked one
        if (button !== clickedButton) {
            // Get the dropdown content associated with this dropdown button
            var content = button.nextElementSibling;
            
            // Hide the dropdown content
            content.style.display = 'none';
        }
    });
}
