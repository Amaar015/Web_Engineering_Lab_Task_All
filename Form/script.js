const form = document.getElementById("myForm");
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

form.addEventListener("submit", function (event) {
  event.preventDefault();
  if (validateForm()) {
    // Form is valid, proceed with submission
    alert("Form submitted successfully!");
  }
});

function validateForm() {
  let isValid = true;

  // Reset previous error messages
  document.querySelectorAll(".error").forEach(function (error) {
    error.remove();
  });

  if (
    nameInput.value.trim() === "" ||
    emailInput.value.trim() === "" ||
    passwordInput.value.trim() === ""
  ) {
    displayError(nameInput, "All is required");
    isValid = false;
  }

  if (!isValidEmail(emailInput.value.trim())) {
    displayError(emailInput, "Invalid email address");
    isValid = false;
  }
  if (nameInput.value.trim().length > 10) {
    displayError(
      nameInput,
      "First Name & Last Name cannot be longer than 10 characters"
    );
    isValid = false;
  }
  if (emailInput.value.trim().length > 30) {
    displayError(emailInput, "email cannot be longer than 10 characters");
    isValid = false;
  }

  return isValid;
}

function isValidEmail(email) {
  // Very basic email validation
  return /\S+@\S+\.\S+/.test(email);
}

function displayError(input, message) {
  const errorElement = document.createElement("div");
  errorElement.className = "error";
  errorElement.textContent = message;
  input.parentNode.appendChild(errorElement);
}
