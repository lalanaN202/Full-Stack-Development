<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
	<title>Responsive Team Slider using Bootstrap & Owl Carousel 2</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="bosb.css?v=<?php echo time(); ?>" rel="stylesheet">
   </head>
<body>
   
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="sec-heading text-center">
                            <h6>RECENT</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="container">
                    <div class="center">
                        <?php
                        $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
                        $result = mysqli_query($conn,"SELECT pdf, imge FROM pub  where pubtype = 'patent' order by pubdate desc, impfac desc limit 3; ");
                        $n=mysqli_num_rows($result);
                        $i = 0;
                        echo '<table cellspacing="3" cellpadding="4" cellspacing="9" border="1"><tr>';
                        if ($result) {
                            while($row = mysqli_fetch_array($result)) {
                                $c1 = 'single-box:hover img';
                                $c2 = 'img-area img';
                                $c3 = 'info-area i';
                                $c4 = 'info-area a';
                                if($i%3==0) {
                                    echo    '<tr><td><div class="img-area '.$c2.'"><img alt="" class="image" src="pdf/'.$row['imge'].'"  width=200 height=200></div>
                                                        <div class="info-area '.$c3.''.$c4.'">
                                                            <a href="login-reg-img/' . $row['pdf'] . '" target="_blank">Learn More</a>
                                                        </div></td>';
                                } else {
                                    echo    '<td><div class="img-area '.$c2.'"><img alt="" class="image" src="pdf/'.$row['imge'].'"  width=200 height=300></div>
                                                    <div class="info-area '.$c3.''.$c4.'">
                                                        <a href="login-reg-img/' . $row['pdf'] . '" target="_blank">Learn More</a>
                                                    </div></td>';
                                }
                                $i++;
                            }
                        }
                        echo '</tr></table>';

                        mysqli_free_result($result);
                        ?>
                    </div>
                </div>
            </div>


            <section id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="sec-heading text-center">
                                <h6>POPULAR</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box">
                    <div class="container">
                        <div class="center">
                            <?php
                            $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
                            $result = mysqli_query($conn,"SELECT pdf, imge FROM pub  where pubtype = 'patent' order by impfac desc limit 3; ");
                            $n=mysqli_num_rows($result);
                            $i = 0;
                            echo '<table cellspacing="3" cellpadding="4" cellspacing="9" border="1"><tr>';
                            if ($result) {
                                while($row = mysqli_fetch_array($result)) {
                                    $c1 = 'single-box:hover img';
                                    $c2 = 'img-area img';
                                    $c3 = 'info-area i';
                                    $c4 = 'info-area a';
                                    if($i%3==0) {
                                        echo    '<tr><td><div class="img-area '.$c2.'"><img alt="" class="image" src="pdf/'.$row['imge'].'"  width=200 height=200></div>
                                                            <div class="info-area '.$c3.''.$c4.'">
                                                                <a href="login-reg-img/' . $row['pdf'] . '">Learn More</a>
                                                            </div></td>';
                                    } else {
                                        echo    '<td><div class="img-area '.$c2.'"><img alt="" class="image" src="pdf/'.$row['imge'].'"  width=200 height=300></div>
                                                        <div class="info-area '.$c3.''.$c4.'">
                                                            <a href="login-reg-img/' . $row['pdf'] . '">Learn More</a>
                                                        </div></td>';
                                    }
                                    $i++;
                                }
                            }
                            echo '</tr></table>';
    
                            mysqli_free_result($result);
                            ?>
                        </div>
                    </div>
                </div>

        </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
    </script> 
    <script>
           $('.team-slider_01').owlCarousel({
               loop: true,            
               nav: false,
               autoplay: true,
               autoplayTimeout: 5000,
               smartSpeed: 450,
               margin: 20,
               responsive: {
                   0: {
                       items: 1
                   },
                   768: {
                       items: 2
                   },
                   991: {
                       items: 3
                   },
                   1200: {
                       items: 3
                   },
                   1920: {
                       items: 3
                   }
               }
           });
           $('.team-slider_02').owlCarousel({
            loop: true,            
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 450,
            margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });
    </script>
    
</body>
<style>
    .single-box {
        width: 100%;
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
        width: 200px;
        height: 300px;
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