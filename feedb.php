<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
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
         
        // Taking all 5 values from the form data(input)
        $nam = $_POST['nam'];
        $journal_name = $_POST['journal_name'];
        $rating = $_POST['rating'];
        $mesage = $_POST['mesage'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO feedb (nam, journal_name, rating, mesage) VALUES ('$nam', '$journal_name', '$rating', '$mesage')";
          
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Sucessfully uploaded.')</script>";
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
        }
        
        header("Location: feedback.php");  
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>