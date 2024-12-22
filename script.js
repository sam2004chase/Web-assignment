function validateForm(event) {
    event.preventDefault();  // Prevent the form from submitting (which would cause a 405 error)
    
    const teamName = document.getElementById('teamName').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const teamSize = document.getElementById('teamSize').value.trim();
    const githubLink = document.getElementById('githubLink').value.trim();

    if (!teamName || !email || !phone || !teamSize || !githubLink) {
        alert('Please fill in all required fields.');
        return false;
    }

    if (!email.match(/^[^@\s]+@[^@\s]+\.[^@\s]+$/)) {
        alert('Please enter a valid email address.');
        return false;
    }

    if (!phone.match(/^\d{10}$/)) {
        alert('Please enter a valid 10-digit phone number.');
        return false;
    }

    if (teamSize < 1 || teamSize > 10) {
        alert('Team size must be between 1 and 10.');
        return false;
    }

    // Hide the form and display a thank-you message with the submitted data
    document.getElementById("registrationForm").style.display = "none";  // Hide the form
    
    // Show the success message and the form data
    document.body.innerHTML += `
        <h1>Thank you for registering!</h1>
        <p>Your team name: ${teamName}</p>
        <p>Your email: ${email}</p>
        <p>Your phone number: ${phone}</p>
        <p>Team size: ${teamSize}</p>
        <p>GitHub link: ${githubLink}</p>
    `;
    return false;  // Prevent the default form submission
}
