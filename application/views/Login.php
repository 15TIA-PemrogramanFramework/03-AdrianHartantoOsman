<?php
  $this->load->view('templates/header_login');
?>

      <ul class="tab-group">
        <li class="tab"><a href="<?= site_url('login/signup');?>">Sign Up</a></li>
        <li class="tab active"><a href="<?= site_url('login');?>">Log In</a></li>
      </ul>
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="" method="post">
          
            <div class="field-wrap">
            <input type="text" placeholder="Username"required autocomplete="off" name="username"/>
          </div>
          
          <div class="field-wrap">
            <input type="password" placeholder="Password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
   <!-- tab-content -->
      

<?php
  $this->load->view('templates/footer_login');
?>
      