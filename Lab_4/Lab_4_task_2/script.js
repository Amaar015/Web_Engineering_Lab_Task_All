function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var classes = document.getElementById("class").value;
  var password = document.getElementById("password");
  if (name === "" || email === "" || password === "" || classes === "") {
    alert("Please properly fill all fields.");
  } else {
    alert("Form submitted successfully.");
    document.getElementById("feedbackForm").reset();
  }
}
