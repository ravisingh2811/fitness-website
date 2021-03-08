<?php
include "db_con.php";
if(isset($_POST['SUBMIT'])){
   $name= mysqli_real_escape_string($con, $_POST['name']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $number=mysqli_real_escape_string($con,$_POST['number']);
   $promblem= mysqli_real_escape_string($con,$_POST['text']);

 
             $sql = "INSERT INTO regis ( `name` , `email`, `number` , `promblem`, `dd`) 
             VALUES ('$name' , '$email' , '$number' , '$promblem' , CURRENT_TIMESTAMP())";
             $iquery = mysqli_query($con , $sql);


             if($iquery){
        

                header("location:index.php");

                   }
                else{
                    echo "ERROR: $sql <br> $con->error";
                  }
                  $con->close();
                
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title> fitness website</title>
</head>
<body>


<header>

<nav>
  <ul>
    <li><a href="#home">home</a></li>
    <li><a href="#feature">features</a></li>
    <li><a href="#about">about</a></li>
    <li><a href="#gallery">gallery</a></li>
    <li><a href="#contact">contact</a></li>
    <li><a href="bmi_cal.html">Fitness calculator</a></li>
  </ul>
</nav>

<div class="fas fa-bars"></div>

<div class="logo">
  <a href="#"><h1><span>fit</span>ness</h1></a>
</div>

</header>


<section id="home">

<h1>get fit don't quit</h1>
<h3>- commit to be fit -</h3>
<a href="#"><button>join us</button></a>


<div class="icons">
  <a href="#" class="fab fa-facebook"></a>
  <a href="#" class="fab fa-twitter"></a>
  <a href="#" class="fab fa-github"></a>
  <a href="#" class="fab fa-pinterest"></a>


</section>



<section id="feature">

<h1>feature</h1>

<div class="card-container">

<div class="card">
  <img src="images/about3.jpg" alt="">
  <div class="content">
    <h1>heavy weights</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus blanditiis nihil exercitationem ipsum rerum eaque dolores quis laborum adipisci dignissimos!</p>
    <a href="#"><button>learn more</button></a>
  </div>
</div>

<div class="card">
  <img src="images/gallery1.jpg" alt="">
  <div class="content">
    <h1>expert trainers</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus blanditiis nihil exercitationem ipsum rerum eaque dolores quis laborum adipisci dignissimos!</p>
    <a href="#"><button>learn more</button></a>
  </div>
</div>

<div class="card">
  <img src="images/gallery3.jpg" alt="">
  <div class="content">
    <h1>eco environment</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus blanditiis nihil exercitationem ipsum rerum eaque dolores quis laborum adipisci dignissimos!</p>
    <a href="#"><button>learn more</button></a>
  </div>
</div>

</div>

</section>




<section id="about">

<div class="image">
  <img src="images/about3.jpg" alt="">
</div>

<div class="content">
  <h1>why you should choose us?</h1>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mi dui, fringilla quis odio a, convallis dictum metus. Etiam facilisis malesuada iaculis. Ut dapibus lacinia nibh
    <br><br>
    ut ultricies urna rhoncus nec. Phasellus euismod nec felis quis dapibus. Cras malesuada placerat venenatis. Suspendisse fringilla turpis mollis orci facilisis euismod. Nullam at lacus commodo
  </p>

  <h1>
    our gym includes
  </h1>

  <div class="buttons">
    <a href="#"><button>training</button></a>
    <a href="#"><button>exercise</button></a>
    <a href="#"><button>bicycle</button></a>
    <a href="#"><button>treadmill</button></a>
    <a href="#"><button>dumbbell</button></a>
    <a href="#"><button>barbell</button></a>
  </div>
</div>

</section>


<section id="contact">

  <form method= "POST" action="">
    <h1>contact us</h1>
    <input type="text" name="name" placeholder="full name" required>
    <input type="email" name="email" placeholder="e-mail" required>
    <input type="number" name="number" placeholder="phone" required>
    <textarea placeholder="message" name="text" cols="30" rows="10" required></textarea>
    <input type="submit" name = "SUBMIT" value="send">
  </form>

</section>


<section id="footer">

  <div class="footer-container">

    <div class="brand">
      <div class="logo">
        <a href="#"><h1><span>fit</span>ness</h1></a>
      </div>
      <div class="icons">
        <a href="#" class="fab fa-facebook" data-text="facebook"></a>
        <a href="#" class="fab fa-twitter" data-text="twitter"></a>
        <a href="#" class="fab fa-github" data-text="git-hub"></a>
        <a href="#" class="fab fa-pinterest" data-text="pinterest"></a>
      </div>
    </div>

    <div class="contact-info">
      <div class="info">
        <a href="#" class="fas fa-map-marker-alt" data-text="xyz address name"></a>
        <a href="#" class="fas fa-envelope" data-text="example@gmail.com"></a>
        <a href="#" class="fas fa-phone" data-text="+9100000000"></a>
      </div>
    </div>

    <div class="letter">
      <h1>newsletter</h1>
      <p>submit your e-mail for latest updates</p>
      <input type="email" placeholder="e-mail">
      <input type="submit" placeholder="subscribe">
    </div>

  </div>


  <h1 class="msg">copyright &copy; 2020 <span>mr. Ravi Singh</span> | all rights reserved!</h1>

</section>



<script>
  $(document).ready(function(){

    $('.fa-bars').click(function(){
      $(this).toggleClass('fa-times');
      $('nav').toggleClass('nav-toggle');
    });

    $('nav ul li a').click(function(){
      $('.fa-bars').removeClass('fa-times');
      $('nav').removeClass('nav-toggle');
    });


    $(window).scroll(function(){
      if($(window).scrollTop() >= 20){
        $('header').addClass('active');
      }else{
        $('header').removeClass('active');
      }
    });

  });
</script>

</body>
</html>