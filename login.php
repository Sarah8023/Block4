<html>

	<head>

<!--Font-awesome link from Lecturer Babusab's PHP code sample-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Icon link from Fontawsome(Navbar)-->
<script src="https://kit.fontawesome.com/0943ff1378.js" crossorigin="anonymous"></script>


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

    .box{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 60vh;
}

.container{
    width: 350px;
    display: flex;
    flex-direction: column ;
    padding: 0 15px 0 15px;
}

span{
    color: black;
    font-size: small;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
}


.input-field{
    display: flex;
    flex-direction: column;

}

.input{
    height: 45px;
    width: 100%;
    border: none;
    outline: none;
    border-radius: 30px;
    color: #FF6633;
    padding: 0 0 0 42%;
    background: rgba(red, green, blue, alpha);
}

i{
    position: relative;
    top: -31px;
    left: 17px;
    color: #FF6633;

}

::-webkit-input-placeholder{
    color: black;

}

.submit{
    border: none;
    border-radius: 30px;
    font-size: 15px;
    height: 45px;
    outline: none;
    width: 100%;
    background: rgba(red, green, blue, alpha);
    cursor: pointer;
    transition: .3s;

}

.submit :hover{
    box-shadow: 1px 5px 7px 1px rgba(red, green, blue, alpha);
}

.bottom{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    font-size: small;
    color: black;
    margin-top: 10px;

}
.left{
    display: flex;

}

label a{
    color: black;
    text-decoration: none;

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

  <div class="box">
    <div class="container">
        <div class="top-header">
            <span>Have an account?</span>
            <h2>Login</h2>
        </div>

        <div class="input-field">
            <input type="text"class="input" placeholder="Username" required>
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-field">
            <input type="password"class="input" placeholder="Password" required>
            <i class="fa-solid fa-lock"></i>
        </div>
        <div class="input-field">
            <input type="submit"class="submit" value="Login">
        </div>

        <div class="bottom">
            <div class="left">
                <input type="checkbox" id="check">
                <label for="check"> Remember Me</label>
            </div>
            <div class="right">
                <label><a href="#">Forgot my password?</a></label>
            </div>
        </div>
    </div>
</div>    
  <br></br>
<!--HTML footer code section of the index/home page-->
 <div class="footer">
                <small>&copy; Rishton Academy Primary School. All Rights Reserved | 2023.</small>
 </div>
	
	</body>

</html>