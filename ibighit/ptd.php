<?php 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERMISSION TO DANCE TOUR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
    <style>
        /* Background image */
        body {
            background-image: url('ptd.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white; /* Text color for better visibility on background */
        }

        /* Additional CSS for styling */
        .container {
            padding: 50px;
        }

        h1 {
            margin-bottom: 30px;
        }

        /* Style for the booking form */
        form {
            max-width: 400px;
            margin: auto;
        }

        /* Additional styling for form inputs */
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
        }

       /* Style for the tour details section */
       .tour-details {
            padding: 50px 0;
            text-align: center;
            color: black;
            
        }

        .tour-details h2 {
            margin-bottom: 20px;
            font-family: 'Broadway', cursive; /* Broadway font */
        }

        .tour-details p {
            line-height: 2;
            margin-bottom: 30px;
            font-size: 125%;
            font-family: bold;

        }

         /* Style for the tour dates section */
         .tour-dates {
            text-align: center;
            margin-top: 50px;
           
        }

        .tour-dates h2 {
            margin-bottom: 20px;
        }

        .tour-dates p {
            line-height: 1.6;
            margin-bottom: 20px;
        }


         /* Style for the performances section */
         .performances {
            text-align: center;
            margin-top: 50px;
           
        }

        .performances h2 {
            margin-bottom: 20px;
        }

        .performances ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .performances ul li {
            font-size: 18px;
            margin-bottom: 10px;
        }

         /* Style for the encore section */
         .encore {
            text-align: center;
            margin-top: 50px;
          
        }

        .encore h2 {
            margin-bottom: 20px;
        }

        .encore ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .encore ul li {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PERMISSION TO DANCE TOUR</h1>
        
        <!-- Booking form -->
        <form action="process_booking.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="tel" name="phone" placeholder="Your Phone Number" required>

            <!-- Select tour date -->
            <label for="tourDate">Select Tour Date:</label>
            <select id="tourDate" name="tourDate">
                <option value="2024-04-10">June 10, 2025</option>
                <option value="2024-04-11">June 11, 2025</option>
                <option value="2024-04-12">June 12, 2025</option>
                <option value="2024-04-17">June 17, 2025</option>
                <option value="2024-04-18">June 18, 2025</option>
                <option value="2024-04-19">June 19, 2025</option>
            </select>

            <!-- Ticket type and quantity selection -->
            <div class="ticketsection">
                <label for="ticketType">Select Ticket Type:</label>
                <select id="ticketType" name="ticketType">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                    <option value="senior">Senior</option>
                </select>
                   
                <label for="quantity">Quantity:</label>
                
                <input type="number" id="quantity" name="quantity" min="1" value="1">
                    <!-- Add more options for quantity if needed -->
                </select>
            </div>

            <button type="submit">Book Tickets</button>
        </form>
    </div>

    <!-- Tour details section -->
    <div class="tour-details">
        <h2>Tour Details</h2>
        
        <p style="font-family: 'Times New Roman', Times, serif;">Hi, This is big hit entertainment. we are officially declaring that BTS is going to have thier last concert before goin to military in the coming month in the given countries.</p>
        <p style="font-family: 'Times New Roman', Times, serif;">South Korea.Los Angeles.United States.Bangkok.Singapore.Seoul.</p>
    </div>
      <!-- Tour dates section -->
      <div class="tour-dates">
        <h2>Tour Dates and Locations</h2>
        <p>In Asia:</p>
        <p>1. Tokyo, Japan - June 10-12, 2024</p>
        <p>2. Seoul, South Korea - June 15-17, 2024</p>
        <!-- Add more locations and dates as needed -->
        <p>In USA:</p>
        <p>1. Los Angeles, CA - July 20-22, 2024</p>
        <p>2. New York City, NY - July 25-27, 2024</p>
        <!-- Add more locations and dates as needed -->
    </div>

    <!-- Performances section -->
    <div class="performances">
        <h2>Performances</h2>
        <ul>
            <li>"On"</li>
            <li>"Fire"</li>
            <li>"Dope"</li>
            <li>"DNA"</li>
            <li>"Blue & Grey"</li>
            <li>"Black Swan"</li>
            <li>"Blood Sweat & Tears"</li>
            <li>"Fake Love"</li>
            <li>"Life Goes On"</li>
            <li>"Boy With Luv"</li>
            <li>"Dynamite"</li>
            <li>"Butter (feat. Megan Thee Stallion)"</li>
            <li>"Airplane Pt. 2"</li>
            <li>"Silver Spoon"</li>
            <li>"Disease"</li>
            <li>"Telepathy"</li>
            <li>"Stay"</li>
            <li>"So What"</li>
            <li>"Save Me"</li>
            <li>"I'm Fine"</li>
            <li>"Idol"</li>
            </ul>
    </div>
    <div class="encore">
        <h2>Encore</h2>
        <ul>
            <li>Encore</li>
            <li>"Epilogue: Young Forever"</li>
            <li>"Spring Day"</li>
            <li>"Permission to Dance"</li>
        </ul>
    </div>
</body>
</html>
