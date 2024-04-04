<?php
$servername="localhost";
$username="root";
$password="";
$database="ibighit";
$con=mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
    die("error detected".mysqli_error($con));
}
else
{
    echo "connection established successfully";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <style>
         /* Additional CSS for logo and text positioning */
    .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            display: inline-block;
            padding: 10px;
            top: 4%;
           
        }
       

        .logo {
            width: auto; /* Adjust the width of the logo as needed */
            height: 50px; /* Set the height of the logo */
            margin-right: 10px; /* Adjust the distance between the logo and the text */
            top: 0%;
            left: 30%;
            position: absolute;
            
        }
      

        .text-at-top {
            position: absolute;
            color: white;
            font-size: 40px;
            font-family: serif;
            text-align: center;
            top: 1%;
            left: 45%;
            margin: 0; /* Remove default margin */
        }

       
          /* CSS for the black-colored table */
          .black-table {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 9%;
            background-color: black;
            opacity: 1; /* Adjust opacity as needed */
            z-index: -1; /* Ensure the table stays behind other elements */
        }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 15px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    .addtour-button {
      position: absolute;
      top: 10px;
      right: 10px;
    }
    /* Additional CSS for the button */
.profile-button {
            background-color: black; /* Set button background color */
            color: white; /* Set button text color */
            padding: 10px 20px; /* Adjust padding */
            border: none; /* Remove border */
            border-radius: 5px; /* Apply border radius */
            cursor: pointer; /* Change cursor on hover */
        }

        /* Style the button on hover */
        .profile-button:hover {
            background-color:black; /* Darker background color on hover */
        }

        /* Position the button on the top right corner */
        .profile-button-container {
            position: absolute;
            top: 10px;
            right: 240px;
        }
        /* Additional CSS for the button */
.about-button {
            background-color: black; /* Set button background color */
            color: white; /* Set button text color */
            padding: 10px 20px; /* Adjust padding */
            border: none; /* Remove border */
            border-radius: 5px; /* Apply border radius */
            cursor: pointer; /* Change cursor on hover */
        }

        /* Style the button on hover */
        .about-button:hover {
            background-color:black; /* Darker background color on hover */
        }

        /* Position the button on the top right corner */
        .about-button-container {
            position: absolute;
            top: 20px;
            right: 540px;
        }
        .videoSection {
    max-width: 900px; /* Set a maximum width for the video container */
    margin: 0 auto;   /* Center the container horizontally */
}

.videoSection iframe {
    width: 100%;      /* Make the iframe fill the width of its container */
    height: 300px;    /* Set the height of the iframe */
}
.video-container iframe {
    position: absolute;
    top: 10;
   
   
}


    /* Define the styles for the blue-colored table */
    .footer-table {
            width: 100%;
            background-color: lightBlue; /* Set the background color */
            color: black; /* Set the text color */
            padding: 10px 0; /* Add some padding for spacing */
            margin-top: 50px; /* Adjust the top margin to separate from footer */
            text-align: center; /* Center-align text */
            
        }

        /* Center the text within the table */
        .footer-table p {
            margin: 0;
           
        }

        /* Style the footer */
        footer.container {
            z-index: 1; /* Ensure the footer is above the blue table */
            margin-top: auto; /* Push the footer to the bottom */
            position: relative; /* Position relative for absolute positioning of footer */
            bottom: 0; /* Stick to the bottom */
        }
        


</style>
</head>

<body>
<div class="container">
    <!-- Header container with logo and text -->
    <div class="header-container">
        <!-- Black-colored table -->
        <div class="black-table"></div>
        <!-- Logo -->
        <img src="main-btsarmy-logo.png" alt="BTS Logo" class="logo">
        <!-- Text at the top -->
        <h1 class="text-center text-at-top">Members</h1>
  <button class="add-button"><a href="index.php">Home</a></button>
    <button class="add-button"><a href="about.php">About</a></button>
  
  <!-- Add this line for the About button -->
   
                </ul>
            </div>
        </div>
    </div>

    <div class="content">
    <div class="h-100 three ourBTS " id="bts">
        <div class="videoSection">
            <iframe width="560" height="315" top="0" src="https://www.youtube.com/embed/mxXbzibBuOE?si=iLOH1CPkDyEV2qvZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           </div>
        <h1 class="text-centre">Our BTS</h1>
        <div class="box-section  flex-wrap">
            <img src="RM.jpg" alt="" class="ourBTS object-cover">
            <img src="jin.jpg" alt="" class="ourBTS object-cover">
            <img src="yoongi.jpg" alt="" class="ourBTS object-cover">
            <img src="jhope.jpg" alt="" class="ourBTS object-cover">
            <img src="jimin.jpg" alt="" class="ourBTS object-cover">
            <img src="taehyung.jpg" alt="" class="ourBTS object-cover">
            <img src="jungkook.jpeg" alt="" class="ourBTS object-cover">
            
             <!-- <img src="RM.png" alt="" class="ourBTS object-cover under500">
                    <img src="jungkook.jpeg" alt="" class="ourBTS object-cover under500"> -->
        </div>
    </div>
    </div>
  <!-- Footer -->
  <footer class="container mt-5 text-center">
     <div class="footer-table">
       <p>Designed with ❤️ by Ranjodh Kaur</p>
       <p>Student ID: 202107929</p>
     </div>
  </footer>
  <!-- End of Footer -->
</body>


</html>