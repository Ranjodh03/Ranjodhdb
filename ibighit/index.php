<!DOCTYPE html>
<html>
<head>
  <title>BTS Tour Dates</title>
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
        /* Style the dropdown button */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Style the dropdown content */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Style the dropdown links */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
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
        <h1 class="text-center text-at-top">Concert Details</h1>
  <button class="add-button"><a href="create.php">Add Tour</a></button>
    <button class="add-button"><a href="about.php">About</a></button>
  <button class="add-button"><a href="profile.php">Profile</a></button>
  <div class="dropdown">
  <button class="dropbtn">Upcoming Tour</button>
  <div class="dropdown-content">
    <a href="d-daytour.php">D-DAY TOUR</a>
    <a href="ptd.php">PERMISSION TO DANCE</a>
    <a href="loveyourselftour.php">LOVE YOURSELF TOUR</a>
    </div>
  <!-- Add this line for the About button -->
  <div class="h-100 three ourBTS " id="BTS">
                <h1 class="text-center">Our BTS</h1>
                <div class="box-section  flex-wrap">
                    <img src="RM.jpg" alt="" class="ourBTS object-cover under500">
                    <img src="jin.jpg" alt="" class="ourBTS object-cover under500">
                    <img src="yoongi.jpg" alt="" class="ourBTS object-cover under500">
                    <img src="jhope.jpg" alt="" class="ourBTS object-cover under500">
                    <img src="jimin.jpg" alt="" class="ourBTS object-cover under500">
                    <img src="taehyung.jpg" alt="" class="ourBTS object-cover under500">
                    <img src="jungkook.jpeg" alt="" class="ourBTS object-cover under500">

                    <!-- <img src="RM.png" alt="" class="ourBTS object-cover under500">
                    <img src="jungkook.jpeg" alt="" class="ourBTS object-cover under500"> -->
                </div>
            </div>


  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Location</th>
        <th>Date</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th> <!-- New column for actions -->
      </tr>
    </thead>
    <tbody>
      <?php
      // Connect to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "ibighit";

      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Fetch data from the "tour" table
      $sql = "SELECT * FROM tour";
      $result = $conn->query($sql);

      // Display the data in a table
      if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["title"]. "</td>";
          echo "<td>" . $row["location"]. "</td>";
          echo "<td>" . $row["date"]. "</td>";
          echo "<td>" . $row["description"]. "</td>";
          echo "<td><img src='ibighit/" . $row["image"]. "' alt='Tour Image' style='width: 100%;'></td>";

          
          // Add icons for read, edit, and delete actions
          echo "<td>";
          echo "<a href='read.php?id=" . $row['id'] . "'><img src='read_icon.png' alt='Read' title='Read'></a>";
          echo "<a href='edit.php?id=" . $row['id'] . "'><img src='edit_icon.png' alt='Edit' title='Edit'></a>";
          echo "<a href='delete.php?id=" . $row['id'] . "'><img src='delete_icon.png' alt='Delete' title='Delete'></a>";
          echo "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='6'>No data found.</td></tr>";
      }

      // Close the connection
      $conn->close();
      ?>
    </tbody>
  </table>
  
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
