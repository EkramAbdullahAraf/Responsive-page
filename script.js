$(document).ready(function() {
    $('#contact-form').submit(function(e) {
        e.preventDefault();

        // Get the form data
        var formData = $(this).serialize();

        // Submit the form data using AJAX
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: formData,
            dataType: 'json',
            encode: true
        })
            .done(function(data) {
                // Display the success message
                $('.success-message').fadeIn().html(data.message);
                // Clear the form
                $('#contact-form')[0].reset();
            })
            .fail(function(data) {
                // Display the error message
                $('.success-message').fadeIn().html(data.responseJSON.message);
            });
    });
});
