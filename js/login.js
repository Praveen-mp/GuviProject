function registerUser() {
  var formData = $('#login-form').serialize();
  
  $.ajax({
    type: 'POST',
    url: 'php/login.php',
    data: formData,
    dataType: 'json',
    encode: true
  })
  .done(function(data) {
    console.log(data);
  });
 
}

$(document).ready(function() {
  $('#login-form').submit(function(event) {
    event.preventDefault();
    registerUser();
  });
});
