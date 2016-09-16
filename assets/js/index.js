$(document).ready(function() {
  
  var animating = false,
      submitPhase1 = 1100,
      submitPhase2 = 400,
      logoutPhase1 = 800,
      $login = $(".login"),
      $app = $(".app");
  
  
  
 
  $('.tab a').on('click', function (e) {
  
  e.preventDefault();
  var classname = this.className;
  console.log(classname);
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  if(window.matchMedia("(max-width: 800px)").matches){
     if(classname=='signup')
  {
    $('.login').css({"height":"100%","margin-top":"30px"});
    $('.login__footer').css({"margin-top":"65rem"});
    $('.tab__group').css({"margin_top":"0px"});
  }
  else
  { 
    $('.login').css({"height":"85%"});
    $('.login__footer').css({"margin-top":"65rem"});
  }
  }
  else{
  if(classname=='signup')
  {
    $('.login').css({"height":"100%"});
    $('.login__footer').css({"margin-top":"55rem"});
  }
  else
  { 
    $('.login').css({"height":"85%"});
    $('.login__footer').css({"margin-top":"51.15rem"});
  }}
  target = $(this).attr('href');

  $('.tab__content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
});
