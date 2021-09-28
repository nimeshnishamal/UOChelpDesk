
<?php require APPROOT . '/views/inc/header.php'; ?>
     
        <h2>Create An Account</h2>
        <p>Please fill out this form to register with us</p>
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
        <div>
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span ><?php echo $data['name_err']; ?></span>
          </div>
          <div>
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span><?php echo $data['email_err']; ?></span>
          </div>
          <div>
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span><?php echo $data['password_err']; ?></span>
          </div>
          <div>
            <label for="confirm_password">Confirm Password: <sup>*</sup></label>
            <input type="password" name="confirm_password"<?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span><?php echo $data['confirm_password_err']; ?></span>
          </div>
              <input type="submit" value="Register">
              <div>
              <a href="<?php echo URLROOT; ?>/users/login">Have an account? Login</a>

        </form>   
  </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>

