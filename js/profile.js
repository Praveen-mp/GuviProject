document.getElementById("email").innerHTML = sessionStorage.getItem("email");

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    // Add the HTML table to the webpage
    document.getElementById("table-container").innerHTML = this.responseText;
  }
};

xhttp.open("GET", "fetch_data.php", true);
xhttp.send();