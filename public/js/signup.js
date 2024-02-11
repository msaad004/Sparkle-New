$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#register_form').submit(function(e){
        e.preventDefault();
        let email = $('#email').val();
        if(email === "") {
            $('#email').addClass('border-danger')
        }
        let full_name = $('#full_name').val();
        if(full_name === "") {
            $('#full_name').addClass('border-danger')
        }
        let password = $('#password').val();
        if(password === "") {
            $('#password').addClass('border-danger')
        }
        let cpassword = $('#cpassword').val();
        if(cpassword === "") {
            $('#cpassword').addClass('border-danger')
        }
        $.ajax({
            type: "POST",
            url: baseUrl + "/register",
            data: {email: email, full_name: full_name, password: password},
            success: function(){
                window.location.href = baseUrl + "/login";
            }
        })
    })
});
