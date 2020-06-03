<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>ONLINE ADMISSION SYSTEM</title>
  <meta name="description" content="website" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <script>
/*function validate() {
var output = true;
$(".signup-error").html('');
if($("#personal-field").css('display') != 'none') {
  if(!($("#name").val())) {
    output = false;
    $("#name-error").html("Name required!");
  }
  if(!($("#surname").val())) {
    output = false;
    $("#surname-error").html("Surname required!");
  }
  if(!($("#gender").val())) {
    output = false;
    $("#gender-error").html("Gender is required!");
  }
  if(!($("#state").val())) {
    output = false;
    $("#state-error").html("State is required!");
  }
   if(!($("#local").val())) {
    output = false;
    $("#local-error").html("Local govt is required!");
  }
  if(!($("#phone").val())) {
    output = false;
    $("#phone-error").html("Phone required!");
  }
  
  if(!($("#email").val())) {
    output = false;
    $("#email-error").html("Email required!");
  } 
  if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    $("#email-error").html("Invalid Email!");
    output = false;
  }
}

if($("#password-field").css('display') != 'none') {
  if(!($("#passport").val())) {
    output = false;
    $("#passport-error").html("Passport is required!");
  }
}
if($("#general-field").css('display') != 'none') {
  if(!($("#exam").val())) {
    output = false;
    $("#exam-error").html("Exam type is required!");
  }
  if(!($("#result").val())) {
    output = false;
    $("#result-error").html("O'level Result type is required!");
  }
  if(!($("#jamb").val())) {
    output = false;
    $("#jamb-error").html("Jamb Result type is required!");
  }
}
// if($("#program-field").css('display') != 'none') {
//   if(!($("#program").val())) {
//     output = false;
//     $("#program-error").html("Select program!");
//   }
// }
// if($("#course-field").css('display') != 'none') {
//   if(!($("#course").val())) {
//     output = false;
//     $("#course-error").html("Select course of study!");
//   }
// }
if($("#attest-field").css('display') != 'none') {
  if(!($("#attest").val())) {
    output = false;
    $("#attest-error").html("Kindly tick to agree to our terms and condition before you continue!");
  }
}
return output;
}
$(document).ready(function() {
  $("#next").click(function(){
    var output = validate();
    if(output) {
      var current = $(".active");
      var next = $(".active").next("li");
      if(next.length>0) {
        $("#"+current.attr("id")+"-field").hide();
        $("#"+next.attr("id")+"-field").show();
        $("#back").show();
        $("#finish").hide();
        $(".active").removeClass("active");
        next.addClass("active");
        if($(".active").attr("id") == $("li").last().attr("id")) {
          $("#next").hide();
          $("#finish").show();        
        }
      }
    }
  });
  $("#back").click(function(){ 
    var current = $(".active");
    var prev = $(".active").prev("li");
    if(prev.length>0) {
      $("#"+current.attr("id")+"-field").hide();
      $("#"+prev.attr("id")+"-field").show();
      $("#next").show();
      $("#finish").hide();
      $(".active").removeClass("active");
      prev.addClass("active");
      if($(".active").attr("id") == $("li").first().attr("id")) {
        $("#back").hide();      
      }
    }
  });
});
</script>

<script>
  // $(function(){
  //   $('#signup-form').on('submit',function(e){
  //     e.preventDefault();
  //     var form = $(this).get(0);
  //     console.log(form);
  //   })
  // })*/
</script>
</head>

<body>
  <div id="main">
    <div id="header">
    <div id="banner">
      <div id="welcome">
        <h3 id="daaru">DAARUL HADEETHIS SALAFIYYAH NIGERIA</h3> 
      </div><!--close welcome-->
      <div id="welcome_slogan">
      </div><!--close welcome_slogan-->
    </div><!--close banner-->
    </div><!--close header-->
    <div id="menubar">
      <ul id="menu">
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php">DAARUL HADEETH</a></li>
        <li><a href="index.php">SCIENCE ACADEMY</a></li>
        <li><a href="index.php">HIGHER ISLAM</a></li>
        <li><a href="index.php">ICT &amp; CAPACITY</a></li>
     <div class="dropdown" style="float:right;">
      <button class="dropbtn" style="line-height: 0.6; margin-top: 3px; width: 25px; border-radius: 5px; margin-right: 10px; height: 40px; margin-top: 5px">-<br>-<br>-</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
        
      </ul>

    </div><!--close menubar-->  
    
    <div id="site_content">   

  
  <div class="sidebar_container">
    <div class="sidebar">
      <div class="sidebar_item">
      <h2>Latest Update</h2>
      <p>New</p>
    </div><!--close sidebar_item--> 
    </div><!--close sidebar-->
         <div class="sidebar">
            <div class="sidebar_item">
              <h3 class="selected"> </h3>
              <p></p>         
            </div><!--close sidebar_item-->
          </div><!--close sidebar-->
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p style="font-size: 10px">Phone: +2348073047104</p>
            <p style="font-size: 10px">Developed by: <a href="dansadaucodingsite.blogspot.com">dansadau_programmer &trade;</a></p>
            <p style="font-size: 10px">Email: <a href="mailto:dansadauprogrammer@gmail.com">dansadauprogrammer@gmail.com</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->

