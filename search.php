<html>
<head>
    <link rel="stylesheet" href="stycle.css">
</head>
<body>
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



<?php

if(isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM pub WHERE CONCAT(title, pubtype, pubdate, publishers, guides, organisation, a1, a2, a3, impfac, funded, fees, pdf, imge)
    LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
  } else {
    echo "<script>alert('no such item present.')</script>";
  }

  // function to connect and execute the query
  function filterTable($query) {
    $connect = mysqli_connect("localhost", "root", "", "login_register_pure_coding");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
  }

  
  $i = 0;
  echo '<table cellspacing="3" cellpadding="4" cellspacing="9" border="1"><tr>';
                    
  while($row = mysqli_fetch_array($search_result)) {
    $c1 = 'single-box:hover img';
    $c2 = 'img-area img';
    $c3 = 'info-area i';
    $c4 = 'info-area a';
    if($i%5==0) {
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
                
  echo '</tr></table>';

  mysqli_free_result($result);
    
?>