<?php
	$uid="";
	$err_uid="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";

    $hasError=false;
?>

<html>
    <body>
    <form action="" method="post">
        <fieldset>
            <legend style="color:cyan;"> <h1>Dealer Login</h1></legend>
            <tr>
                <td align="right">UserId</td>
                <td>:<input name="uid" value="<?php echo $uid;?>" type="text"placeholder="UserId"><br>
                <span style="color:cyan;"><?php echo $err_name;?></span></td>
            </tr>
            <tr>
                <td align="right">Username</td>
                <td>:<input name="uname" value="<?php echo $uname;?>" type="text"placeholder="User Name"><br>
                <span style="color:cyan;"><?php echo $err_uname;?></span></td>
            </tr>
            <tr>
                <td align="right">Password</td>
                <td>:<input name="pass" value="<?php echo $pass;?>" type="password"placeholder="Password"><br>
                <span style="color:cyan;"><?php echo $err_pass;?></span></td>
            </tr>

        </fieldset>
        <table>
        </table>
    </body>
</html>