$(document).ready(function () {
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();

        // Gather form data
        var formData = {
            username: $('#username').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            dob: $('#dob').val(),
            age: $('#age').val(),
            contact_number: $('#contact_number').val()
        };

        // Optional: Basic client-side validation
        if (!formData.username || !formData.email || !formData.password || !formData.dob || !formData.age || !formData.contact_number) {
            $('#responseMessage').html('<div class="alert alert-danger">Please fill in all required fields.</div>');
            return;
        }

        $.ajax({
            url: 'php/register.php', // URL to PHP script
            type: 'POST',
            data: formData,
            dataType: 'json', // Expect JSON response
            success: function (response) {
                if (response.status === 'success') {
                    $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                    // Optionally redirect or clear form fields
                } else {
                    $('#responseMessage').html('<div class="alert alert-danger">' + response.message + '</div>');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#responseMessage').html('<div class="alert alert-danger">An error occurred: ' + textStatus + '</div>');
            }
        });
    });
});
