<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Metro Kopi Tiam</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" href="<?= base_url();?>/Login_Asset/css/style.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="<?= site_url('login/signup');?>">Sign Up</a></li>
        <li class="tab"><a href="<?=site_url('login');?>">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>
          
          <form action="" method="post">
          <div class="field-wrap">
            <input type="text" name="username" placeholder="Username" required autocomplete="off"/>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" name="first_name" placeholder="First Name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              
              <input type="text" name="last_name" placeholder="Last Name" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <input type="email" name="email" placeholder="Email Address" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            
            <input type="password" name="password" placeholder ="Password" required autocomplete="off"/>
          </div>
            <div class="field-wrap">
            <input type="text" name="alamat" placeholder="Alamat" required autocomplete="off"/>
          </div>
           <div class="field-wrap">
            <input type="text" name="no_hp" placeholder="Nomor HP" required autocomplete="off"/>
          </div>
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
