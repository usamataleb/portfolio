  $(document).ready(function () {
    // Attach a submit event handler to the form
    $(".contactform").submit(function (e) {
      e.preventDefault(); // Prevent the default form submission

      // Serialize the form data
      var formData = $(this).serialize();

      $.ajax({
        type: "POST", 
        url: "../APIs/email.php", 
        data: formData, 
        success: function (response) {
          $(".output_message").html(response); 
        },
        error: function (xhr, status, error) {
          // Handle errors here
          console.error("Error:", error);
          $(".output_message").html("An error occurred. Please try again later.");
        },
      });
    });
  });
