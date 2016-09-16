<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Circumstance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    
    
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    
  </head>
  <body >

  <div class="cont">
     <div class="row">
      <div class="col-md-4 col__1">
         <a href="http://www.excelmec.org"> 
           <img class ="excel__logo" src="http://www.excelmec.org/2016cs/images/xxl.png">  </a>
      </div>
      <div class="col-md-4 col__2">
       <p class="login__signup" style="text-align:center">Circuimstance</p>
       <!--<img class="event__logo" width="300px" src= "#">-->
      </div>
      <div class="col-md-4 col__3">
        <a href="http://www.mec.ac.in">
          <img class="mec__logo" width="120px" src="<?php echo base_url(); ?>assets/img/mec_logo.png">
        </a>
      </div>
     </div>
  <div class="demo">
    <div class="login">
       
      <div class="login__form">
         <ul class="tab__group">
        <li class="tab"><a class="signup" href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>   
        <div class="tab__content">
        <div id="login">
          
        <!-- <form action="index.php/Open" method="post"> -->
      <!--<?php //echo form_open('Open'); ?>-->
      <!-- <form action="Verify/login" method="post"> -->
       <?php echo form_open("Verify/login"); ?>
        <p class="login__signup">Welcome Back!</p>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M18 22.082v-1.649c2.203-1.241 4-4.337 4-7.432 0-4.971 0-9-6-9s-6 4.029-6 9c0 3.096 1.797 6.191 4 7.432v1.649c-6.784 0.555-12 3.888-12 7.918h28c0-4.030-5.216-7.364-12-7.918z" />
          </svg>
          <input type="text" name="email" class="login__input name" placeholder="Username" required="required"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M22 0c-5.523 0-10 4.477-10 10 0 0.626 0.058 1.238 0.168 1.832l-12.168 12.168v6c0 1.105 0.895 2 2 2h2v-2h4v-4h4v-4h4l2.595-2.595c1.063 0.385 2.209 0.595 3.405 0.595 5.523 0 10-4.477 10-10s-4.477-10-10-10zM24.996 10.004c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
          </svg>
          <input type="password" name="password" class="login__input pass" placeholder="Password" required="required"/>
        </div>
        <button type="submit" class="login__submit">Sign in</button>
          <button type="button" class="fb__login__button" onclick="FBlogin()"><span style="padding-right:1.5rem; font-size:2.5rem;"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>Login with facebook</button>
          <!--<p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>-->
            <div  style="color:white;font-size:200%;"><strong><?php echo validation_errors(); ?></strong></div>

          <!-- </form> -->
          <?php echo form_close(); ?>
            </div>
        <div id="signup">
        <!-- <form action="Verify/registration" method="post"> -->
        <?php echo form_open("Verify/registration"); ?>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M18 22.082v-1.649c2.203-1.241 4-4.337 4-7.432 0-4.971 0-9-6-9s-6 4.029-6 9c0 3.096 1.797 6.191 4 7.432v1.649c-6.784 0.555-12 3.888-12 7.918h28c0-4.030-5.216-7.364-12-7.918z" />
          </svg>
          <input type="text" class="login__input name" placeholder="Name" name = "name" required="required"/>
        </div>
        <div class="login__row">
         <svg class="login__icon mail svg-icon" viewBox="0 0 20 20">
            <path d="M26.666 0h-21.332c-2.934 0-5.334 2.4-5.334 5.333v21.333c0 2.934 2.4 5.334 5.334 5.334h21.332c2.936 0 5.334-2.4 5.334-5.334v-21.333c0-2.934-2.398-5.333-5.334-5.333zM8 8h16c0.286 0 0.563 0.061 0.817 0.177l-8.817 10.286-8.817-10.287c0.254-0.116 0.531-0.177 0.817-0.177zM6 22v-12c0-0.042 0.002-0.084 0.004-0.125l5.864 6.842-5.8 5.8c-0.045-0.167-0.069-0.34-0.069-0.517zM24 24h-16c-0.177 0-0.35-0.024-0.517-0.069l5.691-5.691 2.826 3.297 2.826-3.297 5.691 5.691c-0.167 0.045-0.34 0.069-0.517 0.069zM26 22c0 0.177-0.024 0.35-0.069 0.517l-5.8-5.8 5.864-6.842c0.003 0.041 0.004 0.083 0.004 0.125v12z" />
          </svg>
            <input type="text" class="login__input mail" name="email_address" placeholder="Email" required="required"/></div>
          <div class="login__row">
          <svg class="login__icon ins svg-icon" viewBox="0 0 20 20">
            <path d="M17.143 0l17.143 6.857v2.286h-2.286q0 0.464-0.366 0.804t-0.866 0.339h-27.25q-0.5 0-0.866-0.339t-0.366-0.804h-2.286v-2.286zM4.571 11.429h4.571v13.714h2.286v-13.714h4.571v13.714h2.286v-13.714h4.571v13.714h2.286v-13.714h4.571v13.714h1.054q0.5 0 0.866 0.339t0.366 0.804v1.143h-29.714v-1.143q0-0.464 0.366-0.804t0.866-0.339h1.054v-13.714zM33.054 28.571q0.5 0 0.866 0.339t0.366 0.804v2.286h-34.286v-2.286q0-0.464 0.366-0.804t0.866-0.339h31.821z" />
            <!--<path d="M16 0h2l16 10v2h-34v-2l16-10z" />-->
          </svg>
          <input type="text" class="login__input college" placeholder="College" required="required"/>
        </div>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M18 22.082v-1.649c2.203-1.241 4-4.337 4-7.432 0-4.971 0-9-6-9s-6 4.029-6 9c0 3.096 1.797 6.191 4 7.432v1.649c-6.784 0.555-12 3.888-12 7.918h28c0-4.030-5.216-7.364-12-7.918z" />
          </svg>
            <input type="text" class="login__input name" placeholder="User Name" name="user_name" required="required"/></div>
            <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M22 0c-5.523 0-10 4.477-10 10 0 0.626 0.058 1.238 0.168 1.832l-12.168 12.168v6c0 1.105 0.895 2 2 2h2v-2h4v-4h4v-4h4l2.595-2.595c1.063 0.385 2.209 0.595 3.405 0.595 5.523 0 10-4.477 10-10s-4.477-10-10-10zM24.996 10.004c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
          </svg>
          <input type="password" class="login__input pass" placeholder="Password" name="password" required="required"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M22 0c-5.523 0-10 4.477-10 10 0 0.626 0.058 1.238 0.168 1.832l-12.168 12.168v6c0 1.105 0.895 2 2 2h2v-2h4v-4h4v-4h4l2.595-2.595c1.063 0.385 2.209 0.595 3.405 0.595 5.523 0 10-4.477 10-10s-4.477-10-10-10zM24.996 10.004c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
          </svg>
            <input type="password" class="login__input pass" name = "con_password"placeholder="Confirm Password" required="required"/></div>
          <input type="submit" class="signup__submit" name="signup__submit" value="Get Started">
          <div  style="color:red;font-size:200%;"><?php echo validation_errors(); ?></div>
            <!-- </form> -->
            <?php echo form_close(); ?>
        </div>
        </div>
      </div>
    </div>
    <div class="app">
      <div class="app__top">
        
        <div class="app__user">
          
        </div>
      </div>
      <div class="app__bot">
        
        <div class="app__meetings">
          <div class="app__meeting">
    
          </div>
          <div class="app__meeting">
            
          </div>
          <div class="app__meeting">
           
          </div>
        </div>
      </div>
      <div class="app__logout">
        <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
          <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12"/>
        </svg>
      </div>
    </div>
  </div>

<footer class="login__footer">
 <div class="footer__center">
  <a href="#"><i class="fa fa-facebook"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-instagram"></i></a>
 </div>
</footer></div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

     <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
    
    
  </body>
</html>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '757669041002524',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>