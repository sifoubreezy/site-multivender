<?php
include('header.php');

?>
    <link href="css/style3.css" rel="stylesheet">

   </head>
<body>
    <center>
  <div class="container">
      <br><br><br>
    <h1>Registration</h1>
    <div class="content">
    <?php  include('insert_user.php'); ?>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name"  name="firstname">
            <span class="error">* <?php  echo $F_Err;?></span><br>

          </div>
          <div class="input-box">
            <span class="details">Surname</span>
            <input type="text" placeholder="Enter your username" name="surname" >
            <span class="error">* <?php  echo $L_Err;?></span><br>

          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email"  >
            <span class="error">* <?php  echo $E_Err;?></span><br>

          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phonenum"  >
            <span class="error">* <?php  echo $C_Err;?></span><br>

          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Address" name="address"  >
            <span class="error">* <?php  echo  $Add_Err;?></span><br>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Password" name="password" >
            <span class="error">* <?php  echo  $passwordErr;?></span><br>
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="confirmPas" >
          </div>

    
          <div class="input-box">
        <span class="details">Select type</span>
        <select class="text1" style="width: 100%; " name="type" >
					<option selected>-</option>
					<option>Vendor</option>
				</select>
        </div>

        <div class="input-box">
        <span class="details">Gender</span>
        <select class="text1" style="width: 100%; " name="gender" >
					<option selected>-</option>
					<option>Male</option>
					<option>Female</option>
				</select>
          </div>

  

          <div class="input-box">
            <span class="details">Company Name</span>
            <input type="text" placeholder="Company Name" name="company"  >
          </div>

        </div>

              <div class="button">
          <input type="submit" value="Register" name="register" >
        </div>
      </form>
    </div>
  </div>
</center>

</body>



</html>
