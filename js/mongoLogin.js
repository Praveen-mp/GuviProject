$(document).ready(function() {
    $('#register-form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'mongodb/mongoose.php',
        data: $('#register-form').serialize(),
        success: function(response) {
          console.log(response," hello");
        },
        error: function(error) {
          console.log(error);
        }
      });
    });
  });
  