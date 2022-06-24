<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="fd.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            For further queries, report or complaints 
            contact us at the sites:  
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>BSK 1st stage, ashok nagar, B'lore-50</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>bnmitsparks208@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>91+ 8792888001</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
          <!--<form action="index.html" autocomplete="off">-->
            <h3 class="title">Give Feedback</h3>
            <form action="feedb.php" method="POST">
            <div class="input-container">
              <input type="text" name="nam" class="input" placeholder="username" required/>
              <!--<label for="">Username</label>
              <span></span>-->
            </div>
            <div class="input-container">
              <input type="text" name="journal_name" class="input" placeholder="journal_name" required/>
              <!--<label for="">Journal Name</label>
              <span></span>-->
            </div>
            <div class="input-container">
              <input type="text" name="rating" class="input" placeholder="rating" required/>
              <!--<label for="">rating</label>
              <span></span>-->
            </div>
            <div class="input-container textarea">
              <textarea name="mesage" class="input" placeholder="complain" required></textarea>
              <!--<label for="">Complain</label>
              <span></span>-->
            </div>
            <input type="submit" value="Send" class="btn" />
            </form>
        </div>
      </div>
    </div>
  
    <script src="app.js"></script>
  </body>
</html>
