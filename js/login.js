function logUser() {
  var formData = $('#login-form').serialize();
  
  $.ajax({
    type: 'POST',
    url: 'php/login.php',
    data: formData,
    dataType: 'json',
    encode: true
  })
  .done(function(data) {
    if(data.success) {
      window.location.replace("profile.html");
      alert('Login successful!');
    } else {
      alert(data.error);
    }
  });
}

$(document).ready(function() {
  $('#login-form').submit(function(event) {
    event.preventDefault();
    logUser();
  });
})