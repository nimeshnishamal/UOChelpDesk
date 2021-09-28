<?php require APPROOT . '/views/inc/header.php'; ?>

        <h2>Login</h2>
        <p>Please fill in your credentials to log in</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
          <div>
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email"<?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span><?php echo $data['email_err']; ?></span>
          </div>
          <div>
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password"<?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span><?php echo $data['password_err']; ?></span>
          </div>
          <div>
            <div class="col">
              <input type="submit" value="Login">
            </div>
            <div>
              <a href="<?php echo URLROOT; ?>/users/register">No account? Register</a>
            </div>
          </div>
        </form>
  
 <?php require APPROOT . '/views/inc/footer.php'; ?>