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
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
        $addr = $_POST['addr'];
        $DOB = $_POST['DOB'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $specialisation = $_POST['specialisation'];
        $qualifications = $_POST['qualifications'];
        $positions = $_POST['positions'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "SELECT * FROM prof_del WHERE email='$email'";
	    $result = mysqli_query($conn, $sql);
    
		if (!$result->num_rows > 0) {
            $sql = "INSERT INTO prof_del (fname, lname, email, phone_no, addr, DOB, gender, department, specialisation, 
                qualifications, positions) VALUES ('$fname', '$lname', '$email', $phone_no, '$addr', '$DOB', '$gender', '$department',
                '$specialisation', '$qualifications', '$positions')";
          
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('Profile Sucessfully uploaded.')</script>";
                header("Location: profile.php");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        } else {
            echo "<script>alert('Woops! Someone has Already logged in with this email.')</script>";
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>