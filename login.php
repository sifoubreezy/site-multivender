<?php
include('header.php');

?>
    <link href="css/style3.css" rel="stylesheet">



    
   </head>
<body>
    <center>
  <div class="container">
      <br><br><br>
    <h1>Login</h1>
    <div class="content">
    <?php  include('check_user.php'); ?>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="user-details">
         <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email"  >
            <span class="error">* <?php  echo $E_Err;?></span><br>

          </div>
       
      
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Password" name="password" >
            <span class="error">* <?php  echo  $passwordErr;?></span><br>
          </div>

         
        </div>

              <div class="button">
          <input type="submit" value="Login" name="log_in" >
        </div>
      </form>
    </div>
  </div>
</center>

</body>



</html>
