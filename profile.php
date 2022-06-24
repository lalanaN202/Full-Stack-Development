<!--{% extends "main.html" %}

{% block title %} Enter details {% endblock %}

{% block content %}-->
<head>
  <meta charset="UTF-8">
  <!---<title> Responsive Registration Form | CodingLab </title>-->
  <link rel="stylesheet" href="style1.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="insert1.php" method="POST">
<div class="container">
  <div class="title">Profile details</div>
  <div class="content">
    <div class="signup-w3ls">
      <div class="signup-agile1">
          <form action="#" method="post">
              <div class="form-control">
                  <label class="header">Profile Photo:</label>
                  
                  <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
              </div>
          </form>
      </div>
    </div>
    <form action="insert1.php" method="POST">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Qualifications</span>
          <!--<select name="LoginType" id="LoginType">
            <option value="Staff">Staff</option>
              <select name="Designation" id="Designation">
                <option value="Ms">Ms</option>
                <option value="Mse">Mse</option>
                <option value="MTech">MTech</option>
                <option value="PhD">PhD</option>
              </select>
            <option value="Student">Student</option>
              <select name="Semester" id="Semester">
                <option value="1st year">1st year</option>
                <option value="2nd year">2nd year</option>
                <option value="3rd year">3rd year</option>
                <option value="4th year">4th year</option>
              </select>
          </select>-->
          <select id="qualifications" name="qualifications">
            <option>--Select--</option>
            <optgroup label="Student">
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>      
            </optgroup>
            <optgroup label="Staff">
                <option value="Ms">Ms</option>
                <option value="Mse">Mse</option>
                <option value="MTech">MTech</option>
                <option value="PhD">PhD</option>
            </optgroup>
        </select>
        </div>
        <div class="input-box">
          <span class="details">Positions</span>
          <select name="positions" id="positions">
            <option value="staff">Staff</option>
            <option value="student">Student</option>
          </select>
        </div>
        <div class="input-box">
          <span class="details">First Name</span>
          <input type="text" name="fname" placeholder="Enter your first name" required>
        </div>
        <div class="input-box">
          <span class="details">Last name</span>
          <input type="text" name="lname" placeholder="Enter your last name" required>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input type="text" name="phone_no" placeholder="Enter your number" required>
        </div>
        <div class="input-box">
          <span class="details">Address</span>
          <input type="text" name="addr" placeholder="Enter your address" required>
        </div>
        <div class="input-box">
          <span class="details">Date of Birth</span>
          <input type="text" name="DOB" placeholder="Enter your DOB(yyyy-mm-dd)" required>
        </div>
      </div>
      <div class="input-box">
        <span class="details">Gender</span>
        <select name="gender" id="gender">
          <option value="M">Male</option>
          <option value="F">Female</option>
          <option value="PNTS">Prefer not to say</option>
        </select>
      </div>
      <div class="input-box">
        <span class="details">Department</span>
        <select name="department" id="department">
          <option value="Computer Science & Engineering">Computer Science & Engineering</option>
          <option value="Information Science & Engineering">Information Science & Engineering</option>
          <option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
          <option value="Electronics & Communications Engineering">Electronics & Communications Engineering</option>
          <option value="Mechanical Engineering">Mechanical Engineering</option>
          <option value="Civil Engineering">Civil Engineering</option>
        </select>
      </div>
      <div class="input-box">
        <span class="details">Specialisation</span>
        <select name="specialisation" id="specialisation">
          <option value="Artificial Intelligence">Artificial Intelligence</option>
          <option value="Computer Human Interface">Computer Human Interface</option>
          <option value="Game design">Game design</option>
          <option value="Web development">Web development</option>
          <option value="Data Science">Data Science</option>
          <option value="Information Security">Information Security</option>
          <option value="Networks">Networks</option>
        </select>
      </div>
      <div class="button">
        <input type="submit" value="Register">
      </div>
    </form>
  </div>
</div>


<!--{% endblock %}-->