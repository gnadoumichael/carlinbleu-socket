import $ from "jquery";
$(function() {
    $('#addUserForm').validate({
        rules: {
            'checkbox': {
                required: true
            },
            'gender': {
                required: true
            },
            password: "required",
            confirm_password: {
                equalTo: "#password"
            }
        },

        highlight: function(input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function(input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        }
    });
});