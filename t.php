<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Popup Login Form Design | CodingNepal</title>
      <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   <?php
    $stmt = mysqli_connect("localhost","root","","login_register_pure_coding");
    $result = mysqli_query($stmt,"SELECT pdf, imge FROM pub order by pubdate limit 15;");

    $i = 0;
    echo '<table cellspacing="3" cellpadding="4" cellspacing="9" border="1"><tr>';
    if ($result) {
      while($row = mysqli_fetch_array($result)) {
        $c1 = 'single-box:hover img';
        $c2 = 'img-area img';
        $c3 = 'info-area i';
        $c4 = 'info-area a';
        if($i%4==0) {
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
                                
    </section>
    <div class="topright">
      <input type="checkbox" id="show">
      <label for="show" class="show-btn">ADD</label>
      <div class="container">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
        <div class="title">Publication details</div>
          <div class="content">
          <form method="post" enctype="multipart/form-data">
            <div class="user-details">
              <div class="data">
                <label>File Upload</label>
                <input type="File" name="file">
              </div>
              <div class="data">
                <label>Image Upload</label>
                <input type="File" name="image">
              </div>
              <div class="data">
                <label>Title</label>
                <input type="text" name="title" placeholder="Enter the title">
              </div>
              <div class="data">
                <label>Publication Type</label>
                <input type="text" name="pubtype" placeholder="Enter the Publication Type">
              </div>
              <div class="data">
                <label>Publication Date</label>
                <input type="text" name="pubdate" placeholder="Enter the Publication Date">
              </div>
              <div class="data">
                <label>Publishers</label>
                <input type="text" name="publishers" placeholder="Enter Publishers name">
              </div>
              <div class="data">
                <label>References</label>
                <input type="text" name="otherpub" placeholder="Enter other publication references">
              </div>
              <div class="data">
                <label>Guides</label>
                <input type="text" name="guides" placeholder="Enter Guides name">
              </div>
              <div class="data">
                <label>Organisation</label>
                <input type="text" name="organisation" placeholder="Enter the organisation">
              </div>  
              <div class="data">
                <label>Author1</label>
                <input type="text" name="a1" placeholder="Enter author name">
              </div>
              <div class="data">
                <label>Author2</label>
                <input type="text" name="a2" placeholder="Enter author name">
              </div>
              <div class="data">
                <label>Author3</label>
                <input type="text" name="a3" placeholder="Enter author name">
              </div>
              <div class="data">
                <label>Impact factor</label>
                <input type="text" name="impfac" placeholder="Enter the impact factor">
              </div>
              <div class="data">
                <label>Funded</label>
                <input type="text" name="funded" placeholder="Is it funded(yes/no)">
              </div>
              <div class="data">
                <label>Fees</label>
                <input type="text" name="fees" placeholder="Enter the fee">
              </div>
              <div class="btn">
                <div class="inner"></div>
                  <button type="submit" name="save">SAVE</button>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
</body>
  <style>
    .single-box {
      width: 40%;
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
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "login_register_pure_coding";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["save"]))
{
    $title = $_POST['title'];
    $pubtype = $_POST['pubtype'];
    $pubdate = $_POST['pubdate'];
    $publishers = $_POST['publishers'];
    $guides = $_POST['guides'];
    $organisation = $_POST['organisation'];
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $impfac = $_POST['impfac'];
    $funded = $_POST['funded'];
    $fees = $_POST['fees'];
    $otherpub = $_POST['otherpub'];
    
	  
		  if($_FILES['file']['name']!='')
      {
        $tname = $_FILES["file"]["tmp_name"];
        $pname = $_FILES["file"]["name"];
        $uploads_dir = 'login-reg-img';
        $fileUpload = move_uploaded_file($tname, $uploads_dir.'/'.$pname);


      }



      if($_FILES['image']['name']!='')
      {
        $tname1 = $_FILES["image"]["tmp_name"];
        $pname1 = $_FILES["image"]["name"];
        $uploads_dir1 = 'pdf';
        $fileUpload2 = move_uploaded_file($tname1, $uploads_dir1.'/'.$pname1);
      }

      #sql query to insert into database
      $sql = "INSERT INTO pub(title, pubtype, pubdate, publishers, guides, organisation, a1, a2, a3, impfac, funded, fees, pdf, imge, otherpub) 
                VALUES ('$title', '$pubtype', '$pubdate', '$publishers', '$guides', '$organisation', '$a1', '$a2', '$a3', '$impfac',
                        '$funded', '$fees', '$pname', '$pname1', '$otherpub')";
 
      if(mysqli_query($conn,$sql)){
        echo "<script>alert('File Sucessfully uploaded.')</script>";
      } else{
        echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
      }
		
    
}
 
 
?>
