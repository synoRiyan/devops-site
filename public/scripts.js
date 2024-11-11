document.getElementById('contactForm').onsubmit = function () {
    const name = document.getElementById('name').value;
    const message = document.getElementById('message').value;
    if (name && message) {
        alert("Message sent successfully!");
    } else {
        alert("Please fill out all fields.");
    }
    return false;
};
