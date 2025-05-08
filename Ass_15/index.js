
  document.getElementById("myForm").addEventListener("submit", function (e) {
    e.preventDefault(); // prevent form from submitting by default

    // Get form values
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;

    const errorElement = document.getElementById("error");
    errorElement.textContent = ""; // Clear previous errors

    // Validate name
    if (name === "") {
      errorElement.textContent = "Name is required.";
      return;
    }

    // Validate email format (basic)
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      errorElement.textContent = "Please enter a valid email.";
      return;
    }

    // Validate password length
    if (password.length < 6) {
      errorElement.textContent = "Password must be at least 6 characters.";
      return;
    }

    // If all validations pass
    alert("Form submitted successfully!");
    // Optionally: this.submit(); to allow real submission
  });