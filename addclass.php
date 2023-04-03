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
          background-color: whitesmoke;
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

      /*--CSS styling for the page Heading*/
        h2{
    color: #FF6633;
    margin-left: 30%;

  }
        </style>

<!--HTML code section containing the header and tittle of the index/home page-->
        <title>Rishton Academy Primary School</title>
</head>

	<body>
        
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
    <a href="seeclass.php">See all Class</a>
    <a href="seeteachers.php">See all Teachers</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="addstudent.php">Add a Student</a>
		<a href="addparent.php">Add a Parent</a> 
    <a href="addclass.php">Add Class</a>
    <a href="addteacher.php">Add a Teacher</a>
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
		<h3>ADD A NEW CLASS</h3>

    <!--A Form list where new records are inputed-->
		<form method="post" action="addclass.php">
		
			<label>Class ID:</label>
			<input type="text" name="ClassID">
			<label>Class Name:</label>
			<input type="text" name="ClassName">
			<label>Student ID:</label>
			<input type="text" name="StudentID">     
			<label>Teacher ID</label>
			<input type="text" name="TeacherID">
			<label>Class Capacity</label>
			<input type="text" name="ClassCapacity">
			<label>Select Student:</label>
			<select name="StudentID">

      <!--Data Collection from a foriegn key(student)the database-->
				<?php
				$sql = mysqli_query($link, "SELECT StudentID, ParentID, StudentName, StudentAddress, StudentMedicals  FROM Student");
				/* PHP "While" statement which excutes and evalutes if a 
        statement/information inputed into the database is true/false before it can validate it*/
        while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['StudentID']}'>{$row['ParentID']}'>{$row['StudentName']}
                '>{$row['StudentAddress']}'>{$row['StudentMedicals']}</option>";
				}
				?>
			</select>
		
			<!--Data Collection from the a Foriegn Key(Teacher) database-->
			<label>Select Teacher:</label>
			<select name="TeacherID">
				<?php
				$sql = mysqli_query($link, "SELECT TeachersID, TeachersName, TeachersAddress, TeachersPhoneNo, 
        TeachersAnnualSal, TeachersBackgroundCheck  FROM teachers");
        	/* PHP "While" statement which excutes and evalutes if a 
        statement/information inputed into the database is true/false before it can validate it*/
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['TeachersID']}'>{$row['TeachersName']}'>{$row['TeachersAddress']}
                '>{$row['TeacherPhoneNo']}'>{$row['TeachersAnnualSal']}'>{$row['TeachersBackgroundCheck']}</option>";
				}
				?>
			</select>
			
			<br></br>
			<input type="submit" name="submit">
		
		</form>
		
		<?php
			/* PHP "If" statement which excutes and evalutes if a condition in the class database
      is true or false before it can be sent to a database*/
		if (isset($_POST['submit'])) {
		
			$StudentID = $_POST['ClassID'];
			$ParentID = $_POST['ClassName'];
			$StudentName = $_POST['StudentID'];
			$StudentAddress = $_POST['TeacherID'];
			$StudentMedicals = $_POST['ClassCapacity'];

			/*--INSERT INTO statement used to add new record or information to a database(MySQL table)*/
			$sql = "INSERT INTO student (ClassID, ClassName, StudentID, TeacherID, ClassCapacity) 
			VALUES ('$ClassID', '$ClassName', '$StudentID','$TeachersID', '$ClassCapacity')";
      
			/* PHP "If" statement which excutes and evalutes if a condition is true or false before it can be sent to a database*/
			if (mysqli_query($link, $sql)) {
			  echo "New record created successfully";
			} 
      
			/* PHP "else" statement which excutes and evalutes if a condition is true and another is false*/
      else {
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