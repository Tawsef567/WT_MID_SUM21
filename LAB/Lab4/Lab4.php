<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $address="";
    $err_address="";
    $dob="";
    $err_dob="";
	$gender="";
	$err_gender="";
	$bio="";
	$err_bio="";
	
	
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
    
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Information Required*";
		}
		
		else
		{
			$name = $_POST["name"];
		}

        if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="Information Required*";
		}
		elseif (strlen($_POST["uname"]) <=6)
		{
			$hasError = true;
			$err_uname = "User Name must be greater than 6 characters*";
		}
		else if(strpos($_POST["uname"]," "))
		{
			$err_uname = "no space is allowed*";
		}	
		else
		{
			$uname = $_POST["uname"];
		}

        if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="Password Required*";
		}
		elseif (strlen($_POST["pass"]) <=8)
		{
			$hasError = true;
			$err_pass = "Password must be greater than 8 characters*";
		}
		
		else
		{
			$pass = $_POST["pass"];
		}


		if(empty($_POST["confirm_pass"]))
		{
			$hasError=true;
			$err_confirm_pass="Password Required*";
		}

		elseif($pass != $confirm_pass)
		{
			$hasError=true;	
   			$err_confirm_pass ="Password and Confirm password not matched*";  
		}
		if($pass ==  $confirm_pass)
        {
            if( ctype_upper($pass) && ctype_lower($pass) && is_numeric($pass) )
            {
               $pass = $_POST["pass"];
            }

            else
            {
                 $err_pass="Uppercase & Lowercase & Numeric Not detected*";
            }
        }


        if(empty($_POST["email"]))
		{
			$hasError=true;
			$err_email="Email is Required*";
		}
		else if(!strpos($_POST["email"],"@"))
		{
			$err_email = "Invalid Email*";
		}
		else
		{
			$email = $_POST["email"];
		}


        if(!empty($_POST["phone"]))
		{
			$hasError=true;
			$err_phone=" Number is Required*";
		}
		
		else
		{
			$phone = $_POST["phone"];
		}

        if(empty($_POST["address"])){
			$hasError=true;
			$err_address="Address Information is  Required*";
		}
		else
		{
			$address = $_POST["address"];
		}

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Select a Gender*";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio is Required*";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["pass"]."<br>";
            echo $_POST["confirm_pass"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["phone"]."<br>";
            echo $_POST["address"]."<br>";
            echo $_POST["dob"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["bio"]."<br>";

			}
		}
?>
<html>
	<body>
		<form action="" method="post">
        <fieldset>
        <legend style="color:cyan;"> <h1>Club Member Registration</h1></legend>
			<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"placeholder="Your Name"><br>
					<span style="color:cyan;"><?php echo $err_name;?></span></td>
				</tr>

				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text"placeholder="Your User Name"><br>
					<span style="color:cyan;"><?php echo $err_uname;?></span></td>
				</tr>

				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass" value="<?php echo $pass;?>" type="password"placeholder="Password"><br>
					<span style="color:cyan;"><?php echo $err_pass;?></span></td>
				</tr>

                <tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirm_pass" value="<?php echo $confirm_pass;?>" type="password"placeholder="Rewrite Password"><br>
					<span style="color:cyan;"><?php echo $err_confirm_pass;?></span></td>
				</tr>

                <tr>
					<td align="right">Email</td>
					<td>:<input name="email" value="<?php echo $email;?>" type="text"placeholder="Confirm Email"><br>
					<span style="color:cyan;"><?php echo $err_email;?></span></td>
				</tr>

                <tr>
					<td align="right">Phone</td>
					<td>:<input name="phone" value="<?php echo $phone;?>" type="number" placeholder="Code">
                    <input name="phone" value="<?php echo $phone;?>" type="number" placeholder="Number"><br>
					<span style="color:cyan;"><?php echo $err_phone;?></span></td>
				</tr>

                <tr>
					<td align="right">Address</td>
					<td>:<input name="address" value="<?php echo $address;?>" type="text" placeholder="Street Address"><br>
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="City">
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="State"><br>
                    <input name="address" value="<?php echo $address;?>" type="text" placeholder="Postal/Zip Code"><br>
					<span style="color:cyan;"><?php echo $err_address;?></span></td>
				</tr>

                <tr>
					<td align="right">Birth Date</td>
					<td>
                    <select id="dob" name="day" >
					<?php			
						for ($i = 0; $i < 32; $i++) 
						{
							if($i == 0)
								{

									echo "<option value='day' disabled selected>Day</option>";
								}
									else
									{
										echo "<option value='$i'>$i</option>";
									}
						}
					?>			
                    </select>
                    <select id="dob" name="month" >
					<?php			
						for ($i = 0; $i < 13; $i++) 
						{
							if($i == 0)
								{

									echo "<option value='month' disabled selected>Month</option>";
								}
									else
									{
										echo "<option value='$i'>$i</option>";
									}
						}
					?>			
                    </select>
                    <select  id="dob" name="year" >
                    <?php			
						for ($i = 1995; $i < 2022; $i++) 
						{
							if($i == 1995)
								{

									echo "<option value='year' disabled selected>Year</option>";
								}
									else
									{
										echo "<option value='$i'>$i</option>";
									}
						}
					?>			
                    </select>
                    </td>
					<td><span style="color:cyan;"><?php echo $err_dob?></span></td>
				</tr>

                <tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span style="color:cyan;"><?php echo $err_gender;?></span></td>
				</tr>

				<tr>
					<td align="right"></td>
                    <td><input type="checkbox" id="" name="">A Friend or Colleague</td>
				</tr>

                <tr>
					<td align="right"> Where did you hear us? </td>
                    <td><input type="checkbox" id="" name="">Google</td>
				</tr>
                
                <tr>
					<td align="right"> About us? </td>
                    <td>
                    <input type="checkbox" id="" name="">Blog post <br>
                    <input type="checkbox" id="" name="">News Article <br>
                    </td>
				</tr>

                <tr>
					<td align="right">Bio</td>
					<td><textarea name="bio"placeholder="Your Bio"><?php echo $bio;?></textarea>
						<br><span style="color:cyan;"><?php echo $err_bio;?></span>
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
            </fieldset>
		</form>
	</body>
</html>