// document.getElementById("email").innerHTML = sessionStorage.getItem("email");
// document.getElementById("age").innerHTML = sessionStorage.getItem("age");
$.ajax({
  type: "POST",
  url: "php/profile.php",
  data: { email: sessionStorage.getItem("email") },
  dataType: "json",
  encode: true,
}).done(function (data) {
  if (data.success == true) {
    console.log(data);
    alert(data);
    document.getElementById("email").innerHTML = data.email;
    document.getElementById("age").innerHTML = data.age;
    document.getElementById("dob").innerHTML = data.dob;
    document.getElementById("contact").innerHTML = data.contact;
  } else {
    //document.getElementById("name").innerHTML = data["name"];
    //alert(data);
    alert(data.error);
  }
});


