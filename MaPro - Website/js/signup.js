$(document).ready(function()
{
    $("#register").click(function()
    {
        var username = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var passwordVerif = $("#cpasswordVerif").val();
        var token = $("#token").val();

        if (username == '' || email == '' || password == '' || passwordVerif == '' || token == '')
        {
            alert("Please fill all fields !!");
        }
        else if ((password.length) < 8)
        {
            alert("Password should atleast 8 character in length !!");
        }
        else if (!(password).match(passwordVerif))
        {
            alert("Your passwords don't match. Try again ?");
        }
        else
        {
            $.post("BDD_signup.php",
            {
                username1: username,
                email1: email,
                password1: password,
                token1: token
            },
            function(data)
            {
                if (data == 'You have Successfully Registered !!')
                {
					// window.location.href = 'account.php';
                    $("form")[0].reset();
                }
                alert(data);
            });
        }
    });
});