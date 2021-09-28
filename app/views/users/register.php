
<?php require APPROOT . '/views/inc/header.php'; ?>

<title>Register Page</title>

<div class="makeCenter">
<div class="mainForm">

        <h2>Create an Account</h2>

        <p>Please fill out this form to register with us</p>
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
          
          <div class="input-box">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span ><?php echo $data['name_err']; ?></span>
          </div>

          <div class="input-box">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span><?php echo $data['email_err']; ?></span>
          </div>

          <div class="input-box">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span><?php echo $data['password_err']; ?></span>
          </div>

          <div class="input-box">
            <label for="confirm_password">Confirm Password: <sup>*</sup></label>
            <input type="password" name="confirm_password"<?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span><?php echo $data['confirm_password_err']; ?></span>
          </div>

          <br>
          <input type="submit" class="mainbtn" value="Register">
          <br>

          <a href="<?php echo URLROOT; ?>/users/login">Have an account? Login</a>
         
        </form>   

</div>
</div>


<!-- <div class="makeCenter">
<div class="mainForm">
<form action="<?php echo URLROOT; ?>/users/register" method="post">

    <h1>User Register</h1>
    <h3> Already have an account</h3>

      <b><a href="login"><font color="blue">Log In</b></a>

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
              <input  class="mainbtn" type="submit" name="" value="Register">
          </div>
          
          
          
          <br><b><a href="login"><font color="blue">Login as an Admin</b></font>
</form>
</div>

</div> -->
  

<?php require APPROOT . '/views/inc/footer.php'; ?>

