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
                        $result = mysqli_query($conn,"SELECT pdf, imge FROM pub  where pubtype = 'magazines' order by pubdate desc limit 3; ");
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
                        $result = mysqli_query($conn,"SELECT pdf, imge FROM pub  where pubtype = 'magazines' order by impfac desc limit 3; ");
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
</html>    