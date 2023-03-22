function registerUser() {
  var formData = $('#register-form').serialize();
  
  $.ajax({
    type: 'POST',
    url: 'php/index.php',
    data: formData,
    dataType: 'json',
    encode: true
  })
  .done(function(data) {
    console.log(data);
  });
 
}

$(document).ready(function() {
  $('#register-form').submit(function(event) {
    event.preventDefault();
    registerUser();
  });
});


  