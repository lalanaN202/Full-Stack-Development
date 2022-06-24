<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Count Up Animation</title>
    <!-- FontAwesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="stycle1.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <div class="center">
      <div class="contain">
        <i class="fas fa-database"></i>
        <?php
            $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
            $result = mysqli_query($conn,"SELECT count(*) as total from pub; ");
            $data=mysqli_fetch_assoc($result);
            /*echo mysqli_num_rows($result);*/
            echo   '<span class="num" data-val="' .$data['total'] . '">000</span>
                    <span class="text">Publications</span>';
        ?>
      </div>
      <div class="contain">
        <i class="fas fa-project-diagram"></i>
        <?php
            $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
            $result = mysqli_query($conn,"SELECT count(*) as count1 from pub where pubtype='books'; ");
            $data=mysqli_fetch_assoc($result);
            /*echo mysqli_num_rows($result);*/
            echo   '<span class="num" data-val="' .$data['count1'] . '">000</span>
                    <span class="text">Books</span>';
        ?>
      </div>
      <div class="contain">
        <i class="fas fa-list"></i>
        <?php
            $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
            $result = mysqli_query($conn,"SELECT count(*) as count2 from pub where pubtype='magazines'; ");
            $data=mysqli_fetch_assoc($result);
            /*echo mysqli_num_rows($result);*/
            echo   '<span class="num" data-val="' .$data['count2'] . '">000</span>
                    <span class="text">Magazines</span>';
        ?>
      </div>
      <div class="contain">
        <i class="fas fa-file-alt"></i>
        <?php
            $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
            $result = mysqli_query($conn,"SELECT count(*) as count3 from pub where pubtype='articles'; ");
            $data=mysqli_fetch_assoc($result);
            /*echo mysqli_num_rows($result);*/
            echo   '<span class="num" data-val="' .$data['count3'] . '">000</span>
                    <span class="text">Articles</span>';
        ?>
      </div>
      <div class="contain">
        <i class="fas fa-folder"></i>
        <?php
            $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
            $result = mysqli_query($conn,"SELECT count(*) as count4 from pub where pubtype='projects'; ");
            $data=mysqli_fetch_assoc($result);
            /*echo mysqli_num_rows($result);*/
            echo   '<span class="num" data-val="' .$data['count4'] . '">000</span>
                    <span class="text">Projects</span>';
        ?>
      </div>
      <div class="contain">
        <i class="fas fa-hdd"></i>
        <?php
            $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
            $result = mysqli_query($conn,"SELECT count(*) as count5 from pub where pubtype='patent'; ");
            $data=mysqli_fetch_assoc($result);
            /*echo mysqli_num_rows($result);*/
            echo   '<span class="num" data-val="' .$data['count5'] . '">000</span>
                    <span class="text">Patent</span>';
        ?>
      </div>
      <div class="contain">
        <i class="fas fa-sd-card"></i>
        <?php
            $conn = mysqli_connect("localhost","root","","login_register_pure_coding");
            $result = mysqli_query($conn,"SELECT count(*) as count6 from pub where pubtype='research'; ");
            $data=mysqli_fetch_assoc($result);
            /*echo mysqli_num_rows($result);*/
            echo   '<span class="num" data-val="' .$data['count6'] . '">000</span>
                    <span class="text">Research</span>';
        ?>
      </div>
    </div>
    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>