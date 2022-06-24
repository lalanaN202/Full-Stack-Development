<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "login_register_pure_coding");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        #retrieve file title
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
        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
        $tname = $_FILES["files"]["tmp_name"];
        $uploads_dir = 'C:/xampp/htdocs/project/login-reg-img';
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);

            #file name with a random number so that similar dont get replaced
            
                    #sql query to insert into database
        $sql = "INSERT INTO pub (title, pubtype, pubdate, publishers, guides, organisation, a1, a2, a3, impfac, funded, fees, pdf) 
                    VALUES ('$title', '$pubtype', '$pubdate', '$publishers', '$guides', '$organisation', '$a1', '$a2', '$a3', '$impfac',
                                '$funded', '$fees', '$pname)";

        
        if(mysqli_query($conn, $sql)){
                echo "uploaded successfully.";
                echo nl2br("\n$title\n $pubtype\n "
                . "$pubdate\n $publishers\n $guides");
        } else{
                echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        

        // Close connection
        mysqli_close($conn);
        ?>
    
</body>
  
</html>