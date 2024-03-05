document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting normally

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // This is a simple example; in a real application, you would want to check the username and password against a database or other secure storage
    if (password !== "correctPassword") {
      showNotification("Error", "Incorrect password. Please try again.");
    } else {
      showNotification("Success", "Welcome, " + username + "!");
    }
  });

function showNotification(title, message) {
  // You can customize the appearance of the notification using CSS or a library
  alert(title + "\n" + message);
}
