<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
   <link rel="stylesheet" href="stycle.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
   <!--<title>{% block title %}tim's site{% endblock %}</title>-->
 </head>
 <body>
    
   <div class="menu-btn">
     <i class="fas fa-bars"></i>
   </div>
   <div class="side-bar">
     <div class="close-btn">
       <i class="fas fa-times"></i>
     </div>
     <div class="menu">
       <div class="item"><a href="profile.php" target="profile"><i class="fas fa-desktop"></i>profile</a></div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-folder"></i>MySpace<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="newposts.php" target="profile" class="sub-item">Posts</a>
         </div>
       </div>
       <div class="item"><a href="articles.php" target="profile"><i class="fas fa-file-alt"></i>Articles</a></div>
       <!--<div class="item"><a href="magazines.html"><i class="fas fa-clone"></i>Magazines</a></div>
       <div class="item"><a href="books.html"><i class="fas fa-book"></i>Books</a></div>-->
       <div class="item">
        <a class="sub-btn"><i class="fas fa-project-diagram"></i>Books<i class="fas fa-angle-right dropdown"></i></a>
        <div class="sub-menu">
          <a href="magazines.php" target="profile" class="sub-item">Magazines</a>
          <a href="books.php" target="profile" class="sub-item">Textbooks</a>
        </div>
      </div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-project-diagram"></i>Projects<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="pro.php" target="profile" class="sub-item">Projects</a>
           <a href="research.php" target="profile" class="sub-item">Research paper</a>
           <a href="patents.php" target="profile" class="sub-item">Patents</a>
         </div>
       </div>
      <div class="item"><a href="feedback.php" target="profile"><i class="fas fa-comment"></i>Editor Feedback</a></div>
      <div class="item"><a href="logout.php" target="_blank"><i class="fas fa-sign-out-alt"></i></i>Logout</a></div>
      <div class="social_media">
        <ul>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </ul>
      </div>
    </div>  
     </div>
    </div>
    <script type="text/javascript">
   $(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });
   });
   </script>
    <!--<div id="content", name="content" >
      {% block content%}
      {% endblock %}-->
</body>
<style>
.single-box {
    width: 20%;
    height: 400px;
    border-radius: 20px;
    overflow: hidden;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    transition: 0.6s ease;
    transition-property: left;
  }
  .info-area {
      padding: 0 20px 45px;
  }
  .img-area {
      overflow: hidden;
      padding: 15px 0 15px;
  }
  .img-area img {
    width: 230;
    height: 300;
      margin: 0 auto;
      -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease;
      max-width: 230px;
    position: relative;
  }
  .single-box:hover img {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
  }
  .info-area i {
      display: inline-block;
      color: #3700ff;
      margin: 0 4px;
    position: relative;
  }
  .info-area h4 {
      font-weight: 100
  }
  .info-area h5 {
      color: #3b04db;
      margin: 10px 0 0;
      font-weight: 100
  }
  .info-area a {
      display: inline-block;
      margin: 5px 0 0;
      background: linear-gradient(to right, #0d039e, #0359f7);
      color: rgb(10, 10, 10);
      padding: 5px 10px;
      border-radius: 4px;
    position: relative;
  }
  .team-slider .owl-dots {
      position: absolute;
      left: 0;
      right: 0;
      bottom: -60px;
      text-align: center;
      width: 100%;
  }
  .team-slider button.owl-dot {
      width: 16px;
      height: 16px;
      display: inline-block;
      margin: 0 6px;
      text-align: center;
      border-radius: 50%;
      background-color: #262626;
  }
  .team-slider .owl-dot.active {
      background-color: rgb(40, 4, 202);
  }
  .move-animation {
      position: relative;
      -webkit-animation: move-animation 2s ease-in-out infinite;
      animation: move-animation 2s ease-in-out infinite;
  }
  @-webkit-keyframes move-animation {
      0% {
          top: 3px;
    }
      50% {
          top: -3px;
    }
      100% {
          top: 3px;
    }
  }
</style>
</html>