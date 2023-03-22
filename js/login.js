<<<<<<< HEAD
function loginUser() {
  var formData = $("#login-form").serialize();
  // console.log(formData);
=======
function registerUser() {
  var formData = $('#login-form').serialize();
  
>>>>>>> f56b5a192ddbd92baadb9e4c3e6e113130abbcb8
  $.ajax({
    type: "POST",
    url: "php/login.php",
    data: formData,
<<<<<<< HEAD
    dataType: "json",
    encode: true,
  }).done(function (data) {
    // console.log(data);
    if (data.success) {
      sessionStorage.setItem("email", data.email);
      // sessionStorage.getItem("email",data.email);
      // console.log(sessionStorage.getItem("age",data.age));
      window.location.assign("profile.html");
      alert("Login successful!");
    } else {
      alert(data.error);
    }
=======
    dataType: 'json',
    encode: true
  })
  .done(function(data) {
    console.log(data);
>>>>>>> f56b5a192ddbd92baadb9e4c3e6e113130abbcb8
  });
 
}
<<<<<<< HEAD

=======
>>>>>>> f56b5a192ddbd92baadb9e4c3e6e113130abbcb8
$(document).ready(function () {
  $("#login-form").submit(function (event) {
    event.preventDefault();
    loginUser();
  });
});
