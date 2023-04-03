<html>

	<head>

  <!--Font-awesome link from Lecturer Babusab's PHP code sample-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--CSS style link from water.css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">

<!--CSS Navbar Style code(edited with own database details) from Lecturer Babusab's PHP code sample-->
    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: #FF6600;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }

        h2{
    color: #FF6633;
    margin-left: 20%;
  }
        </style>

        <title>Rishton Academy Primary School</title>
</head>

	<body>
     <!--HTML code section containing the header and tittle of the index/home page-->
		<h2>Welcome to our School Management System</h2>
		<p>Choose what you would like to do:</p>

       <!--HTML/PHP Navbar codes from Lecturer Babusab's code sample (edited with own database)
     containing the navigation list(s) that takes a user to other pages of the website-->
        <div class="navbar">
		<a href="index.php">Home</a>

        <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
    <a href="seestudent.php">See all Students</a> 
		<a href="seeparent.php">See all Parents</a>
		<a href="seeteacher.php">See all Teachers</a>
    <a href="seeclass.php">See all Classes</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
    <a href="addstudent.php">Add a Student</a>
		<a href="addparent.php">Add a Parent</a>
    <a href="addclass.php">Add all Class</a> 
        
                </div>
            </div>

            <a href="contact.php">Contact Us</a>

        </div>
		
        <!--PHP code containing the 
     $host = "localhost";
     $username  = "root";
     $passwd = " ";
     $dbname = "school";
    from my Database using XAMPP-->
		<?php
		
		$link = mysqli_connect("localhost", "root", "", "school");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
	<hr>
		
  <h3>ADD A NEW TEACHER</h3>
	
  <!--A Form list where a new records are inputed-->
 <form method="post" action="addteacher.php">
 
 <label>Teachers ID:</label>
   <input type="text" name="TeachersID">
   <label>Teachers Name:</label>
   <input type="text" name="TeachersName">
   <label>Teachers Address:</label>
   <input type="text" name="TeachersAddress">
   <label>Teachers PhoneNo:</label>
   <input type="text" name="TeachersPhoneNo">
   <label>Teachers Annual Salary:</label>
   <input type="text" name="TeachersAnnualSal">
   <label>Teachers Background Check:</label>
   <input type="text" name="TeachersBackgroundCheck">
   <input type="submit" name="submit">
 
 </form>
 
<?php

/* PHP "If" statement which excutes and evalutes if a 
condition inputed in the parent database is true or false before it can be sent to a database*/
if (isset($_POST['submit'])) {

  $TeachersID = $_POST['TeachersID'];
  $TeachersName = $_POST['TeachersName'];
  $TeachersAddress = $_POST['TeachersAddress'];
  $TeachersPhoneNo = $_POST['TeachersPhoneNo'];
  $TeachersAnnualSal = $_POST['TeachersAnnualSal'];
  $TeachersBackgroundCheck = $_POST['TeachersBackgroundCheck'];
  
   /*--Data Collection from the teachers database*/
      /*--INSERT INTO statement used to add new record or information to a database(MySQL table)*/
  $sql = "INSERT INTO teachers (TeachersID, TeachersName, TeachersAddress, TeachersPhoneNo, TeachersAnnualSal, TeachersBackgroundCheck) 
  VALUES ('$TeachersID', '$TeachersName', '$TeachersAddress','$TeachersPhoneNo', '$TeachersAnnualSal', '$TeachersBackgroundCheck')";
  if (mysqli_query($link, $sql)) {

       /* PHP "echo" statement which gives command to a database of the success message to give a 
     user if the required information inputed into a database is true or false*/
    echo "New record created successfully";
  } else {
    echo "Error adding record ";
  }

}

$link->close();


?>
	
	<hr>

  <br></br>

<!--HTML footer code section of the index/home page-->
 <div class="footer">
                <small>&copy; Rishton Academy Primary School. All Copy Rights Reserved | 2023.</small>
             </div>
	</body>

</html>