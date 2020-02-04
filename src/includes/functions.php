<?php
function email_exists($email,$conn)
{
	$row = mysqli_query($conn,"SELECT idUsers FROM users WHERE emailUsers ='$email'");
	{
		if(mysqli_num_rows($row)==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

/*function logged_in()
{
	if(isset($_SESSION['emailUsers']) || isset($_COKKIE['name']))
	{
		return false;
	}
	else
	{
		return true;
	}
}*/
?>