$(document).ready(function()
{
	$("#login").click(function()
	{
		var username = $("#username").val();
		var password = $("#password").val();
		
		// Checking for blank fields.
		if( username =='' || password =='')
		{
			$('input[type="text"],input[type="password"]').css("border","2px solid red");
			$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
			alert("Please fill all the fields !!");
		}
		else
		{
			$.post("login.php",{ username1:username, password1:password },
			function(data)
			{
				if(data == 'Username or Password is wrong !!')
					$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
				
				else if(data == 'Login successful !!')
					window.location.href = 'account.php';
			});
		}
	});
});