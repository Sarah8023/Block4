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

        /*--CSS styling for the page Heading*/
        h2{
    color: #FF6633;
    margin-left: 20%;

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
        <a href="seeteacher.php">See all Teachers</a>
        <a href="seeclass.php">See all Class</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="addstudent.php">Add a Student</a>
		<a href="addparent.php">Add a Parent</a> 
        <a href="addteacher.php">Add a Teacher</a>
        <a href="addclass.php">Add Class</a>
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
		<h3>SEE ALL CLASSES</h3>
	
    <!--Using A Table Row Element to retreive the datas on the teachers database with these IDs-->
		<table>
			<tr>
				<th width="100px">Class ID<br><hr></th>
				<th width="250px">Class Name<br><hr></th>
				<th width="100px">Student ID<br><hr></th>
				<th width="100px">Teachers ID<br><hr></th>
        <th width="150px">Class Capacity<br><hr></th>
			</tr>
					
      <!--Data Collection from the class database-->
			<?php
			$sql = mysqli_query($link, "SELECT ClassID, ClassName, StudentID, 
            TeacherID, ClassCapacity FROM class");
			while ($row = $sql->fetch_assoc()){

         /*Using the echo function to output all the strings on the class ID database*/
			echo "
			<tr>
				<th>{$row['ClassID']}</th>
				<th>{$row['ClassName']}</th>
				<th>{$row['StudentID']}</th>
				<th>{$row['TeacherID']}</th>
        <th>{$row['ClassCapacity']}</th>
                
			</tr>";
			}
			?>
			
		</table>
		
		<?php
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