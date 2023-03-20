$(document).ready(function() {
    // Get the email parameter from the URL
    var email = new URLSearchParams(window.location.search).get('email');
    
    // Call the PHP script to retrieve user data
    $.get('profile.php', { email: email }, function(data) {
      $('#profile').html(data)
    });
  });