<?php
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <style>
    body {
      font-family: 'Noto Sans KR', sans-serif;
      text-align: center;
      padding: 50px 0;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 50px;
    }

    p {
      font-size: 1.2rem;
      line-height: 1.5;
      margin-bottom: 30px;
    }

    .artist-list {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .artist-item {
      margin: 0 20px;
    }

    .artist-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .artist-name {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .artist-description {
      font-size: 1rem;
      color: #666;
    }
  </style>
</head>
<body>
  <h1>빅히트 뮤직</h1>
  <p>
    빅히트 뮤직은 음악에 대한 믿음, 팬들의 공감과 지지를 기반으로 언제나 새로운 길을 개척해나가는 가장 선도적인 음악 레이블입니다.
    기존에 없던 빅히트 뮤직만의 방식으로 시대를 담는 가장 상징적인 음악을 만들고, 높은 기준과 끊임없는 개선으로 전 세계 팬들에게 닿을 수 있도록 노력하고 있습니다.
  </p>
  <p>
    빅히트 뮤직 소속 아티스트로는 이현, 방탄소년단, 투모로우바이투게더가 있습니다.
  </p>
  <div class="artist-list">
    <div class="artist-item">
      <img class="artist-image" src="lee-hyun.png" alt="Artist 1">
      <h2 class="artist-name">아티스트</h2>
      <p class="artist-description">
        이 아티스트는 앨범과 콘서트에서 팬들과 함께 즐거운 시간을 보내며, 음악을 통해 세상을 바꿔나가고 있습니다.
      </p>
    </div>
    <div class="artist-item">
      <img class="artist-image" src="bts_ai.jpeg" alt="Artist 2">
      <h2 class="artist-name">아티스트</h2>
      <p class="artist-description">
        이 아티스트는 음악을 통해 사람들의 마음을 건드리고, 창의적인 아이디어로 음악 장르를 혁신하고 있습니다.
      </p>
    </div>
    <div class="artist-item">
<img class="artist-image" src="txt.jpeg" alt="Artist 3">
      <h2 class="artist-name">아티스트</h2>
      <p class="artist-name"></p>

</body>
</head>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Big Hit Music</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
    }

    .artist-list {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .artist-item {
      margin: 0 20px;
    }

    .artist-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .artist-name {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .artist-description {
      font-size: 1rem;
      color: #666;
    }
    /* Define the styles for the blue-colored table */
.footer-table {
            width: 100%;
            background-color: lightBlue; 
            color: black; 
            padding: 10px 0; 
            margin-top: 50px; 
            text-align: center;
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
        .home-button {
            position: absolute;
            top: 1rem; /* Adjust as needed */
            right: 1rem; /* Adjust as needed */
            background-color: lightblue;
            color: black;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        /* Styling for the home button on hover */
        .home-button:hover {
            background-color: lightblue;
        }

  </style>
</head>
<body>
   <!-- Home button -->
   <a href="index.php" class="home-button">Home</a>
  <h1>Big Hit Music</h1>
  <p>
    Big Hit Music is a leading music label that always leads the way in music and fans' support. They create the most symbolic music and continuously improve it with high standards and unceasing improvement.
  </p>
  <p>
    Big Hit Music's artists include Lee Hi, BTS, and TWICE.
  </p>
  <div class="artist-list">
    <div class="artist-item">
      <img class="artist-image"src="lee-hyun1.png" alt="Artist 1">
      <h2 class="artist-name">Lee Hi</h2>
      <p class="artist-description">
        Lee Hi is a South Korean singer-songwriter who debuted in 2012 with her first single "1, 2, 3, 4." She is known for her powerful and soulful voice, which has earned her a large following in Korea and beyond.
      </p>
    </div>
    <div class="artist-item">
      <img class="artist-image" src="bts-ai-.jpg" alt="Artist 2">
      <h2 class="artist-name">BTS</h2>
      <p class="artist-description">
        BTS, also known as the Bangtan Boys, is a seven-member South Korean boy band that debuted in 2013. They are known for their music, which blends pop, hip hop, and R&B genres, and their socially conscious lyrics.
      </p>
    </div>
    <div class="artist-item">
      <img class="artist-image" src="twice.jpg" alt="Artist 3">
      <h2 class="artist-name">TWICE</h2>
      <p class="artist-description">
        TWICE is a nine-member South Korean girl group that debuted in 2015. They are known for their catchy pop music, colorful and cheerful image, and synchronized dance moves.
      </p>
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