<<<<<<< HEAD
// document.getElementById("email").innerHTML = sessionStorage.getItem("email");
// document.getElementById("age").innerHTML = sessionStorage.getItem("age");
=======
//ajax
console.info(sessionStorage.getItem("email"));
>>>>>>> f56b5a192ddbd92baadb9e4c3e6e113130abbcb8
$.ajax({
  type: "POST",
  url: "php/profile.php",
  data: { email: sessionStorage.getItem("email") },
  dataType: "json",
  encode: true,
}).done(function (data) {
  if (data.success == true) {
<<<<<<< HEAD
    console.log(data);
    alert(data);
    document.getElementById("email").innerHTML = data.email;
    document.getElementById("age").innerHTML = data.age;
    document.getElementById("dob").innerHTML = data.dob;
    document.getElementById("contact").innerHTML = data.contact;
=======
    //alert(data);
    document.getElementById("email").innerHTML = data.email;
    document.getElementById("age").innerHTML = data.age;
    document.getElementById("dob").innerHTML = data.dob;
    document.getElementById("num").innerHTML = data.num;
    // document.getElementById("num").innerHTML = data.num;
>>>>>>> f56b5a192ddbd92baadb9e4c3e6e113130abbcb8
  } else {
    //document.getElementById("name").innerHTML = data["name"];
    //alert(data);
    alert(data.error);
  }
<<<<<<< HEAD
});


=======
});
>>>>>>> f56b5a192ddbd92baadb9e4c3e6e113130abbcb8
