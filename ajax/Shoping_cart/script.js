// add event listeners to button to triger loadProduct data
document.getElementById("get_data").addEventListener("click", loadProduct);

// create function to loadProduct

function loadProduct() {
  // create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();
  // Open a get Request to 'data.json' assynchronously
  xhr.open("GET", "data.json", true);
  // define onload event handler to execute when request is complete
  xhr.onload = function () {
    // check the status of request the response is OK or not
    if (this.status == 200) {
      // Parse the json data into javaScript object
      var products = JSON.parse(this.responseText);
      // create html markup to display data
      var output = "";
      products.forEach((product) => {
        output +=
          '<div class="card" id="card">' +
          '<img src="' +
          product.image +
          '" alt="' +
          product.name +
          '" class="card-img" />' +
          '<div class="card-info">' +
          // You can add more content here if needed
          +"</div>"; // Closing div for 'card-info'
        +"</div>"; // Closing div for 'card'
      });
      document.getElementById("box").innerHTML = output;
    }
  };
  xhr.send();
}
