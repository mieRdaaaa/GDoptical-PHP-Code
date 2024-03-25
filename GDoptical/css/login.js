// Function to show alert box
function showAlert(message) {
    alert(message);
  }
  
  // Function to handle form submission
  document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form inputs
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var userType = document.getElementById("user-type").value;
  
    // Perform validation (replace this with your actual validation logic)
    if (username === "" || password === "") {
      showAlert("Please enter username and password.");
      return;
    }
  
    // Check if username and password are correct (replace this with your actual login logic)
    // For demonstration purposes, I'm just showing an alert if the username or password is "admin"
    if (username === "admin" || password === "admin") {
      showAlert("Incorrect username or password. Please try again.");
      return;
    }
  
    // If everything is valid, the form is submitted.
    this.submit();
  });
  