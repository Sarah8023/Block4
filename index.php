<html>

	<head>
<!--Font-awesome link from Lecturer Babusab's PHP code sample-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--A div class created to separate the school logo from other elements on the head section-->
    <div class="logo">
      <img src="LOGO.png">
    </div>
    
   <!--CSS Navbar Style code(edited with own database details) from Lecturer Babusab's PHP code sample-->
    <style>
      .logo{
        text-align: center;
        }
        body {
          font-family: Arial, Helvetica, sans-serif;
          background-color: whitesmoke;
          align-items: center;
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

/*--CSS styling code for button on the index page*/
        .btn{
    background: #FF6600;
    font-weight: bolder;
    display: inline-block;
    text-transform: uppercase;
    color: whitesmoke;
    border-radius: 0.2rem;
    padding: 10px;
    margin-top: 3%; 
    }

/*--CSS styling using hover code for button on the index page
(the hover option enables a button to change its original colour to another*/

.btn:hover{
    background: #333333;
    letter-spacing: 2px;
    transition: 0.2s;
}

  h2{
    color: #FF6633;
    text-align: center;
    text-transform: uppercase;


  }
  h1{
    font-size: 1rem;
  }

  p{
    text-align: center;
    margin-bottom: 0%;
    margin-top: 2%;
  }
 
  /*--CSS styling code for the footer section on the home page 
  (This code moves the footer items/text to the center of the page)*/
  small{
    margin-left: 35%;
  }
  .home{
    text-align: center;
  }
        </style>

 <!--HTML code section containing the header and tittle of the index/home page-->

        <title>Rishton Academy Primary School</title>
</head>

	<body>
    
  <header>
        <h2>Welcome to our School Management System</h2>
        
        <h1>Choose what you would like to do:</h1>

     <!--HTML/PHP Navbar codes from Lecturer Babusab's code sample 
     containing the navigation list(s) that takes a user to other pages of the website-->
            <div class="navbar">
          
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

  </header>


<!--HTML code section containing the details(School Overview) of the index/home page-->
  <div class="home">

  <a href="#" class="btn">Overview</a>  
        <p>
            Rishton Academy Primary School is located in the heart of Manchester, United Kingdom.<br>
            The School was opened in the year 2000 and has an interesting history. The building 
            is Traditional in style with different classrooms <br> available for kids to study and  
            enjoy learning, not out of site is the equipped Library which makes learning easy 
            as pupils can find the tools needed for their learning. <br>The classrooms as well is 
            equipped to provide an interesting learning environment for the children. It has a 
            playground and an attractive lawn.
            <br></br>
            RA as it is foundly called is an academy that is focused in making sure to grow pupil
            for a greater future. <br> We strive our best over the years to build and grow a reputation that 
            can only be seen with intergrity. We do our best to ensure our school is safe and secure for <br>
            our pupil, especially the playground which is completely enclosd and the gate kept locked 
            during the school day.
        </p>

        <a href="#" class="btn">Our Open Days are June 20th and November 4th each Year (Agenda for change)</a> 
        <p>Please use our contact page for more information on this and also for our Registration Dates and Process.</p>

  </div>
        
       <br></br>

       <!--HTML footer code section of the index/home page-->
        <div class="footer">
                       <small>&copy; Rishton Academy Primary School. All Copy Rights Reserved | 2023.</small>
                    </div>
	
	</body>

</html>