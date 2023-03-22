function loginUser() {
  var formData = $("#login-form").serialize();
  // console.log(formData);
  $.ajax({
    type: "POST",
    url: "php/login.php",
    data: formData,
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
  });
}

$(document).ready(function () {
  $("#login-form").submit(function (event) {
    event.preventDefault();
    loginUser();
  });
});
