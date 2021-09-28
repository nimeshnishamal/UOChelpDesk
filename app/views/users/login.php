<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="makeCenter">
<div class="mainForm">

        <h2>Login</h2>
        <p>Please fill in your credentials to log in</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
          <div class="input-box">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email"<?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span><?php echo $data['email_err']; ?></span>
          </div>

          <div class="input-box">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password"<?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span><?php echo $data['password_err']; ?></span>
          </div>
          
          <div class="input-box">
            <div class="col">
              <input type="submit" class="mainbtn" value="Login">
            </div>
            <div>
              <a href="<?php echo URLROOT; ?>/users/register" >No account? Register</a>
            </div>
          </div>
        </form>

</div>
</div>

<title>Login Page</title>

<!-- <div class="makeCenter">
<div class="mainForm">
<form>
    <h1>User Login</h1>
    <h3> Don't have an account yet? </h3>
    <b><a href="register"><font color="blue">Sign Up Now</b></a>

        
        
        <div class="input-box">
            <label for="Email">
                Email
            </label>
            <input type="email" name="mail"  required= ""></input>
        </div>
        
        
        <div class="input-box">
            <label for="password">
                Password
            </label>
            <input type="password" name="pass"  required= "">
        </div>
        
        
        <div class="input-box">
            <input type="submit" name="" value="Login" class="mainbtn">
        </div>
        
        
        
        <br><b><a href="loginadmin.php"><font color="blue">Login as an Admin</b></font>
    </form>
</div>

</div> -->
  
 <?php require APPROOT . '/views/inc/footer.php'; ?>