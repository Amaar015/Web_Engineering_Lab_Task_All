document.getElementById("postForm").addEventListener("submit", postForm);

function postForm(e) {
  e.preventDefault();
  var name = document.getElementById("name").value;
  var department = document.getElementById("department").value;
  var rollno = document.getElementById("rollno").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;

  var param = "";
  param +=
    "name=" +
    name +
    "&department=" +
    department +
    "&rollno=" +
    rollno +
    "&email=" +
    email +
    "&address=" +
    address;
  console.log(param);
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "process.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status) {
      console.log(this.responseText);
    }
  };
  xhr.send(param);
}
