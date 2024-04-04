<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-DAY TOUR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
    <style>
        /* Background image */
        body {
            background-image: url('d-day.jpeg');
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
            font-size: 18px;
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
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>D_DAY TOUR</h1>
        
        <!-- Booking form -->
        <form action="process_booking.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="tel" name="phone" placeholder="Your Phone Number" required>

            <!-- Select tour date -->
            <label for="tourDate">Select Tour Date:</label>
            <select id="tourDate" name="tourDate">
                <option value="2024-04-10">June 10, 2024</option>
                <option value="2024-04-11">June 11, 2024</option>
                <option value="2024-04-12">June 12, 2024</option>
                <option value="2024-04-17">June 17, 2024</option>
                <option value="2024-04-18">June 18, 2024</option>
                <option value="2024-04-19">June 19, 2024</option>
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
        
        <p style="font-family: 'Times New Roman', Times, serif;">Hi, This is big hit entertainment. we are officially declaring that Augst D is going to have his concert D-Day in the coming month in the given countries.</p>
        <p style="font-family: 'Times New Roman', Times, serif;">Belmont Park.Newark.Rosemont.Los Angeles.Oakland.Jakarta.Kanagawa.Bangkok.Singapore.Seoul.</p>
    </div>
     <!-- Tour dates section -->
     <div class="tour-dates">
        <h2>Tour Dates and Locations</h2>
        <p>In Asia:</p>
        <p>1. Tokyo, Japan - May 09-11, 2024</p>
        <p>2. Seoul, South Korea - May 17-19, 2024</p>
        <!-- Add more locations and dates as needed -->
        <p>In USA:</p>
        <p>1. Los Angeles, CA - June 24-26, 2024</p>
        <p>2. New York City, NY - June 28-30, 2024</p>
        <!-- Add more locations and dates as needed -->
    </div>
     <!-- Performances section -->
     <div class="performances">
        <h2>Performances</h2>
        <ul>
            <li>"Haegeum"</li>  
            <li>"Daechwita"</li>
            <li>"Agust D"</li>
            <li>"Give It to Me"</li>
            <li>"Trivia: Seesaw"</li>
            <li>"SDL"</li>
            <li>"People"</li>
            <li>"People Pt. 2"</li>
            <li>"Moonlight"</li>
            <li>"Burn It"</li>
            <li>"Interlude: Shadow"</li>
            <li>"BTS Cypher Pt. 3: Killer"</li>
            <li>"BTS Cypher 4"</li>
            <li>"UGH!"</li>
            <li>"Disease"</li>
            <li>"Ddaeng"</li>
            <li>"HUH?"</li>
            <li>"Life Goes On" (piano)"</li>
            <li>"Snooze"</li>
            <li>"Polar Night"</li>
            <li>"Amygdala"</li>
            </ul>
    </div>
    <div class="encore">
        <h2>Encore</h2>
        <ul>
            <li>Encore</li>
            <li>"D-Day"</li>
            <li>"Intro: Never Mind"</li>
            <li>"The Last"</li>
        </ul>
    </div>


  
</body>
</html>
