<html>

	<head>

<!--Font-awesome link from Lecturer Babusab's PHP code sample-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--CSS style link from water.css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">

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

    /*CSS Styling of the indexpage button hover*/
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
 
  small{
    margin-left: 35%;

  }
        </style>


        <title>Rishton Academy Primary School</title>
</head>

	<body>
    
  <header>
        <h2>Welcome to our School Management System</h2>
        <h1>Choose what you would like to do:</h1>
    
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
    
    
            </div>

  </header>

<div class="home">

  <h1>Contact Us</h1>

<form method="post" action="contact.php">
   <label for="name">Name</label>
   <input type="text" name="name" id="name" required>
   <label for="email">Email</label>
   <input type="email" name="email" id="email" required>
   <label for="subject">Subject</label>
   <input type="text" name="subject" id="subject" required>
   <label for="message">Message</label>
   <textarea name="message" id="message" required></textarea>

    <br>
    <button>Send</button>
</form>

</div>     
  <br></br>
<!--HTML footer code section of the index/home page-->
 <div class="footer">
                <small>&copy; Rishton Academy Primary School. All Copy Rights Reserved | 2023.</small>
 </div>
	
	</body>

</html>