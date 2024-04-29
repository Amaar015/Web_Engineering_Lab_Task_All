document.addEventListener("DOMContentLoaded", LoadProduct);

function LoadProduct() {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    document.getElementById("cards").innerHTML = xhr.responseText;
  };
  xhr.open("GET", "getproduct.php", true);
  xhr.send();
}
