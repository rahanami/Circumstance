<!--<!DOCTYPE html>
<html>
<head>
	<title>Question 1</title>
</head>
<body>
	<p>1.63 69 72 63 69 75 6d 73 6d 73 74 61 6e 63 65</p>
	<form name="q1" action="question1" method="post" >
		<input type="text" name="answer">
		<input type="submit" value="submit" >
		<div  style="color:red"><?php //echo validation_errors(); ?></div>
		</form>
</body>
</html>
-->

<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="http://localhost/questions/assets/css/newstylesheet.css">
<link rel="stylesheet" href="http://localhost/questions/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/questions/assets/font-awesome-4.6.3/css/font-awesome.min.css">
<!-- JavaScript -->
<script src="http://localhost/questions/assets/js/jquery.backstretch.min.js"></script>
<script src="http://localhost/questions/assets/js/bootstrap.min.js"></script>
<script src="http://localhost/questions/assets/js/jquery-1.11.1.min.js"></script>
<script src="http://localhost/questions/assets/js/scripts.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<head>
 
    
</head>
<body>
<div class="top-content">
<nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="logo"></div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h1><strong>Circumstance</strong></h1>    
                        </div> 
                        <p><a class="lout" href="Login/logout">Logout</a></p>
                        <div class="col-sm-4 ">
                            <div class="logo1"></div>
                        </div>
                    </div>    
                </div>
            </nav>
            <br><br>





<div class="inner-bg">
<div class="qno">Q1</div>
<div id="typewriter"></div>
<form id="form1" name="q1" action="question1" method="post">
<!-- <input type="text" name="answer">
<input type="submit"> -->

<!-- <input type="submit" value="submit" >
<div  style="color:red"><?php //echo validation_errors(); ?></div> --> 
<input type="text" name="answer">
        <input type="submit" value="submit" >
        <div  style="color:red"><?php// echo validation_errors(); ?> </div>
</form>

</div>

<footer>
<!-- <div class="row">
 




<ul class="soc_nav">
<li class="gplus"><a href="https://www.youtube.com/c/excelmec" target="_blank"><i class="fa fa-youtube"></i></a></li>
<li class="twitter"><a href="https://twitter.com/excelmec" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li class="fb"><a href="https://www.facebook.com/excelmec" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li class="insta"><a href="https://www.instagram.com/excelmec/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>                              
</ul>

</div> -->
</div>
</footer>


</body>

<script type="text/javascript">
    var str = "<p>63 69 72 63 69 75 6d 73 6d 73 74 61 6e 63 65</p>",
    i = 0,
    isTag,
    text;

(function type() {
    text = str.slice(0, ++i);
    if (text === str) return;
    
    document.getElementById('typewriter').innerHTML = text;

    var char = text.slice(-1);
    if( char === '<' ) isTag = true;
    if( char === '>' ) isTag = false;

    if (isTag) return type();
    setTimeout(type, 50);
}());
</script>

</html>