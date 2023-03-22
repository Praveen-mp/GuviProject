//ajax
console.info(sessionStorage.getItem("email"));
$.ajax({
  type: "POST",
  url: "php/profile.php",
  data: { email: sessionStorage.getItem("email") },
  dataType: "json",
  encode: true,
}).done(function (data) {
  if (data.success == true) {
    //alert(data);
    document.getElementById("email").innerHTML = data.email;
    document.getElementById("age").innerHTML = data.age;
    document.getElementById("dob").innerHTML = data.dob;
    document.getElementById("num").innerHTML = data.num;
    // document.getElementById("num").innerHTML = data.num;
  } else {
    //document.getElementById("name").innerHTML = data["name"];
    //alert(data);
    alert(data.error);
  }
});