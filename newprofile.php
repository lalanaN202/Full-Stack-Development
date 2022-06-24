<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
 </head>
<frameset cols="25%,85%">
    <frame src="main1.php" name="sidebar">
<frameset rows="50,*" border="0">
    <frame src="navbar.php" name="navbar">
<frameset rows="1500,*" border="0">
    <frame src="profile.php" name="profile">
</frameset>
</frameset>
</frameset>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>    
</html>
