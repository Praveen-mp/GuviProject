$(document).ready(function() {
  // Load profile data from the server
  $.get("mongodb/profile.php", function(data) {
      // Update the profile page with the retrieved data
      $("#profile-container").html(data);
  });
});

  