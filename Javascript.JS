// Handle contact form submission
// Step 1: Get the form and response elements from the page
const contactForm = document.getElementById('contactForm'); // The form where users can type their message
const response = document.getElementById('response'); // The place to show the response message

// Step 2: Add a "submit" listener to the form
contactForm.addEventListener('submit', (event) => {
  // event.preventDefault(); // Removed this line to allow form submission to PHP

  // Get the values from the input fields
  const name = document.getElementById('name').value.trim(); // Get the name entered by the user
  const message = document.getElementById('message').value.trim(); // Get the message entered by the user

  // If both fields have text, show a thank-you message
  if (name && message) {
    response.textContent = `Thank you, ${name}! Your message has been received: "${message}"`; // Update the response message
    contactForm.reset(); // Clear the form fields
  } else {
    // If either field is empty, show an alert
    alert('Please fill in both fields before submitting.'); // Ask the user to fill all fields
  }
});
