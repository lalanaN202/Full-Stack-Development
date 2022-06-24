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
 <div class="topnav">
        <div class="search-container">
          <form target="_blank" action="search.php" method="POST">  
            <input type="text" placeholder="Search.." name="valueToSearch">
            <button type="submit" name="search" value="Filter"><i class="fa fa-search"></i></button>
          </form>
        </div>
     </div>
     <?php
  $conn = mysqli_connect("localhost", "root", "", "login_register_pure_coding");
  $result = mysql_query($conn, "CALL get_top5");
  $i = 0;
  echo '<table cellspacing="3" cellpadding="4" cellspacing="9" border="1"><tr>';
  if ($result) {
    while($row = mysqli_fetch_array($result)) {
      $c1 = 'single-box:hover img';
      $c2 = 'img-area img';
      $c3 = 'info-area i';
      $c4 = 'info-area a';
      if($i%5==0) {
        echo  '<tr><td><div class="img-area '.$c2.'"><img alt="" class="image" src="pdf/'.$row['imge'].'"  width=200 height=200></div>
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
</body>
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

  while($row = mysqli_fetch_array($search_result)) {
    $c1 = 'single-box:hover img';
    $c2 = 'img-area img';
    $c3 = 'info-area i';
    $c4 = 'info-area a';
    echo '<div class="single-box '.$c1.'" text="">
          <div class="img-area '.$c2.'"><img alt="" class="image" src="pdf/'.$row['imge'].'"  ></div>
            <div class="info-area '.$c3.''.$c4.'">
              <tr><a href="login-reg-img/' . $row['pdf'] . '">Learn More</a></tr>
            </div>
        </div>';
  }
?>
