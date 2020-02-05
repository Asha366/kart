<?php
	$msg="";
	include("../include/settings1.php");
	include("../include/check_session.php");
	$email=$_SESSION["userEmail"];
	if(isset($_POST["btnUpdate"]))
	{

		if(($_POST["email"]!=null) && ($_POST["pass"]!=null) && ($_POST["txtNewPassword"]!=null) && ($_POST["txtConfirmPassword"]!=null))
		{
			$sql=$mysqli->prepare("select pass from signup where email=?");
			$sql->bind_param("s",$_SESSION["userEmail"]);
			$sql->execute();
			$sql->bind_result($Pass);
			if($sql->fetch()>0 && $_POST["pass"]== $Pass)
			{
				if($_POST["txtNewPassword"]== $_POST["txtConfirmPassword"])
					{					
						$sql->close();
						$sql=$mysqli->prepare("update signup set pass=?  where email=?");
						$sql->bind_param("ss",$_POST["txtNewPassword"],$email);
						$sql->execute();
						$sql->close();
						
						$msg= "Updation done";
					}
					else
					{
						$msg= "Passwords don't match";
					}
				}
			else
			{
				$msg= "Invalid username and password";
			}
		}
		else
		{
			$msg= "Fields kept empty";
		}
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Change Password</title>
<style>
body{
    background-size: cover;
}
.t1{
background:rgb(0,0,128,0.2);
margin-top: 180px;
border:2px solid;



}


</style>
</head>
<body background="https://images.pexels.com/photos/697059/pexels-photo-697059.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
<table align="center" cellspacing="10" cellpadding="10" class="t1">
	<tr>
    	<td>
            <fieldset>
           		 <legend align="center"><b><i>Change Password</i></b></legend>
                	<form action="" method="post">
                        <table align="center" cellspacing="10">
                        <tr>
                              <td colspan="2" align="center">
                                    <font size="+2" color="#FF0000">
											<?php 
                                                echo $msg; 
                                            ?>
                                    </font>
                              </td>
               			 </tr>
                         <tr>
                                <td>
                                   <b> Email:</b>
                                </td>
                                <td>
                                     <input type="email" name="email" readonly value="<?php echo $_SESSION["userEmail"]?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <b> Password:</b>
                                </td>
                                <td>
                                    <input type="password" name="pass" required title="Enter the Password"/>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                   <b> New Password:</b>
                                </td>
                                <td>
                                    <input type="password" name="txtNewPassword" required title="Enter the New Password"/>
                                </td>
                            </tr>
                             <tr>
                                <td>
                                   <b> Confirm Password:</b>
                                </td>
                                <td>
                                    <input type="password" name="txtConfirmPassword" required title="Enter the Password to be confirmed"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" value="Update" name="btnUpdate" /> &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; 
                                    <input type="button" value="Cancel" name="btnCancel" onClick="window.location.replace('manage_profile.php')" />		
                                    <!--for onclick , input type must be button-->
                          
                                </td>
                            </tr>        
                        </table>
                   </form>
            </fieldset>
		</td>
	</tr>
</table>	
</body>
</html>
