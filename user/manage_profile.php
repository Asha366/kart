<?php
$msg="";
include("../include/settings1.php");//including the settings.php file
include("../include/check_session.php");


if(isset($_POST["btnUpdate"]))
{
	if(($_POST["email"]!=null)&&($_POST["pass"]!=null)&&($_POST["firstname"]!=null)&&($_POST["lastname"]!=null)&&
		($_POST["email"]!=null)&&($_POST["number"]!=null)&&
	($_POST["gender"]!=null))
	{
		
		
			//$user_id=$SESSION["USERId"];
		
			$sql1=$mysqli->prepare("update signup set firstname=?,lastname=?,email=?,number=?,gender=?
				where user_id=?");
			$sql1->bind_param("sssisi",$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["number"],$_POST["gender"],$_SESSION["userId"]);
			$sql1->execute();
			//echo $_POST['txtName'];
			$sql1->close();
			//$msg="records updated";
		}
		
	}
		else
		{

			$msg="Please fill all the fields";
		}
	
	$sql="select * from signup where signup.user_id=".'"'.$_SESSION["userId"].'"';
				
			$result=mysqli_query($mysqli,$sql);
			$row=mysqli_fetch_object($result);
			?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My Profile</title>





<style>
body{
    background-size: cover;
}
a{
    color:black;
}
table{
background:rgb(0,0,128,0.2);
margin-top: 80px;
width:380px;



}



</style>
</head>
<body background="https://images.pexels.com/photos/697059/pexels-photo-697059.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">





   <form method="POST">
	<table cellpadding="10" cellspacing="0" border="1" align="center" >
    	<tr>
        	<td align="center">
            	<b><i>My Profile</i></b>
            </td>
        </tr>
        
        <tr>
        	<td>
            	
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="change_password.php" name="Changepass" ><b>Change Password</b></a>&nbsp;&nbsp;
               
              
            </td>
        </tr>
        <tr>
        	<td>
            	<fieldset>
                	<legend align="center"> <b><i>Account Information</i></b></legend>
                 <table cellspacing="10" class="t2">
                 	<tr>
                    	<td width="120">
                        	<b>Email</b>
                        </td><br>
                        <td>
                        	<input type="email" name="email" required title="Enter email" readonly value="<?php echo $row->email?>"/>
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	<b>Password:</b>
                        </td>
                        <td>
                        	<input type="password" name="pass" required title="Enter Password" readonly value="<?php echo
                            $row->pass ?>"/>
                        </td>
                    </tr>
                  

                 </table>

                </fieldset>
                
                <fieldset>
                	<legend align="center"><b> <i>Personal Information </i></b></legend>
                 <table cellspacing="10">
                 	<tr>
                    	<td width="120">
                        	<b>First Name:</b>
                        </td>
                        <td>
                        	<input type="text" required name="firstname" title="Enter the Name"  value="<?php echo
                            $row->firstname?>"/>
                        </td>
                    </tr>
                   <tr>
                        <td width="120">
                            <b>Last Name:</b>
                        </td>
                        <td>
                            <input type="text" required name="lastname" title="Enter the Name"  value="<?php echo
                            $row->lastname?>"  />
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	<b>Email:</b>
                        </td>
                        <td>
                        	<input type="email" name="email" required title="Enter the email" value="<?php echo
                            $row->email ?>" />
                        </td>
                    </tr>
                    
                    <tr>
                    	<td>
                        	<b>Phone:</b>
                        </td>
                        <td>
                        	<input type="number" name="number" required title="Enter the Number" value="<?php echo
                            $row->number ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="120">
                            <b>Gender:</b>
                        </td>
                        <td>
                            <input type="text" required name="gender"   value="<?php echo
                            $row->gender?>"/>
                        </td>
                    </tr>
                    
                     <tr>
                    	<td  align="center" colspan="2">
                        	<input type="submit" value="Update" name="btnUpdate"/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" value="Reset" name="btnReset"/>
                        </td>
                    </tr>
                </table>   
                </fieldset>
            </td> 
        </tr>
    </table>
</form>

</body>
</html>			

















