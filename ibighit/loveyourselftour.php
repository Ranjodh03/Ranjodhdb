<?php 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOVE YOURSELF TOUR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
    <style>
        /* Background image */
        body {
            background-image: url('2heart.jpg');
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
            
        }

        .tour-details h2 {
            margin-bottom: 20px;
            font-family: 'Broadway', cursive; /* Broadway font */
        }

        .tour-details p {
            line-height: 2;
            margin-bottom: 30px;
            font-size: 125%;

        }

          /* Style for the tour dates section */
          .tour-dates {
            text-align: center;
            margin-top: 50px;
            color: black;
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
            color: black;
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
            font-size: 20px;
            margin-bottom: 10px;
        }
         /* Style for the encore section */
         .encore {
            text-align: center;
            margin-top: 50px;
            color: black;
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
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LOVE YOURSELF TOUR</h1>
        
        <!-- Booking form -->
        <form action="process_booking.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="tel" name="phone" placeholder="Your Phone Number" required>

            <!-- Select tour date -->
            <label for="tourDate">Select Tour Date:</label>
            <select id="tourDate" name="tourDate">
                <option value="2024-04-10">April 10, 2024</option>
                <option value="2024-04-11">April 11, 2024</option>
                <option value="2024-04-12">April 12, 2024</option>
                <!-- Add more options for other dates -->
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
        <p style="font-family: 'Times New Roman', Times, serif;">The LOVE YOURSELF TOUR is a journey of self-discovery and love, aimed at spreading positivity and empowerment through music. During this tour, BTS will be performing a selection of their hit songs, including "Fake Love," "DNA," and "Boy with Luv." Through their music, BTS aims to inspire their fans to love themselves and embrace their true selves.</p>
        <p style="font-family: 'Times New Roman', Times, serif;">Join us for an unforgettable experience filled with joy, love, and powerful performances!</p>
    </div>
     <!-- Tour dates section -->
     <div class="tour-dates">
        <h2>Tour Dates and Locations</h2>
        <p>In Asia:</p>
        <p>1. Tokyo, Japan - April 10-12, 2024</p>
        <p>2. Seoul, South Korea - April 15-17, 2024</p>
        <!-- Add more locations and dates as needed -->
        <p>In USA:</p>
        <p>1. Los Angeles, CA - April 20-22, 2024</p>
        <p>2. New York City, NY - April 25-27, 2024</p>
        <!-- Add more locations and dates as needed -->
    </div>
    <!-- Performances section -->
    <div class="performances">
        <h2>Performances</h2>
        <ul>
            <li>"Idol"</li>          
            <li>"Save Me"</li>
            <li>"Trivia 起: Just Dance"</li>
            <li>"Magic Shop"</li>
            <li>"Euphoria"</li>
            <li>"Black Swan"</li>
            <li>"I Need U"</li>
            <li>"Run"</li>
            <li>"Serendipity"</li>
            <li>"Trivia 承: Love"</li>
            <li>"Boy in Luv"</li>
            <li>"DNA"</li>
            <li>"21st Century Girl”[a] / "Boyz with Fun"[b]/ "Dope"[c]</li>
            <li>"Go Go"[a][c] / "Attack on Bangtan"[b]</li>
            <li>"Blood Sweat & Tears"</li>
            <li>"Trivia 轉: Seesaw"</li>
            <li>"Mic Drop"</li>
            <li>"Fire"</li>
            <li>"The Truth Untold"</li>
            <li>"Epiphany"</li>
            <li>"So What"</li>
            <li>"Fake Love"</li>
            <li>"Singularity"</li>
            <li>"Airplane Pt. 2"</li>
    </ul>
    </div>
    <div class="encore">
        <h2>Encore</h2>
        <ul>
            <li>Encore</li>
            <li>"So What"</li>
            <li>"Anpanman"</li>
            <li>"Answer: Love Myself"</li>
        </ul>
    </div>
</body>
</html>
