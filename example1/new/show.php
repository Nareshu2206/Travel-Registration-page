<?php 
include("db.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Destinations</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>


    <header>
        <h1>Explore Amazing Destinations</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <!-- <li><a href="">Destinations</a></li> -->
            <div class="dropdown">
  <!-- The button that triggers the dropdown -->
  <button class="dropdown-btn">Dropdown</button>
  
  <!-- The actual dropdown content -->
  <div class="dropdown-content">
  <a href="./solo.php">Solo Traveling</a>
    <a href="./couple.php">Couple Traveling</a>
    <a href="./family.php">Family Traveling</a>
    <!-- <a href="">With Friendsing</a>
    <a href="">Adventure Travel</a> -->
  </div>
</div>
            <li><a href="./about.php">About Us</a></li>
            <li><a class="arrow" href="./phone.php">Contact</a></li>
            <li><a class="log" href="./signup.php">Logutout</a></li>
        </ul>
    </nav>
<form  class="secure">
    <section id="home">
        <h2>Welcome to our Travel World:</h2>
        <p class="bold"> Traveling is therapy.</p>
        <option value="">1.Jobs fill your pockets, adventures fill your soul.</option>
        <option value="">2.Remember that happiness is a way of travel, not a destination.</option>
        <option value="">3.The world is a book and those who do not travel read only one page.</option>
        <option value="">4.Travel is the only thing you buy that makes you richer.</option>
        <p>The benefits of travelling are many, but unfortunately, most of us can’t travel all the time. For the times when your wanderlust calls, nurture it with the wise words of fellow travellers and explorers.</p> 
    </section>

    <section id="destinations">
        <article class="destination1">
        <img src="./00010.jpg" alt="">
           <a href="https://en.wikipedia.org/wiki/Travel_with_Wife"><h3>Couple Travel</h3></a>
           <ul><a class="arrow1">study More</a></ul>
            <p>A meaningful quote can stay with you for a long time. It can be a reminder, an inspiration, a comfort, or a reality check. A quote can help you express something you struggle to put into words, or it can bring up a feeling or belief you didn’t even know you had. If you’re a traveler, you probably love travel quotes for these very reasons.</p> <br> <br>
        </article>

        <article class="destination2">
<img src="./0009.avif" alt="">
           <a href="https://en.wikipedia.org/wiki/voy:Solo"><h3>Solo Travel</h3></a>
           <ul><a class="arrow1">study More</a></ul>
            <p>Traveling alone is one of the most fulfilling and life-changing experiences you can have in life. Solo travel helps you not only explore and understand the world but also learn about yourself. That’s why I have decided to create a list of my favorite travel solo quotes to inspire more and more people to hit the road alone and let the journey lead them to big discoveries and adventures.  I personally love traveling alone, and do it quite often.  However, it takes courage and can be scary at times.  <br> <br>
        </article>

        <article class="destination3">
<img src="./0008.jpeg" alt="">
           <a href="https://en.wikipedia.org/wiki/Family_Travel_Forum"><h3>Family Travel</h3></a>
           <ul><a class="arrow1">study More</a></ul>
            <p>Whether you’re taking your kids on vacation, embarking on a trip with your parents or travelling with extended family, a trip in the company of family can be a uniquely fun and fulfilling experience.Some of my favourite travel memories are of trips taken as a child with my parents and younger sister. Even all these years later, it’s still difficult to put into words how much those holidays meant to me. <br> <br>

        </article>

        <article class="destination4">
<img src="./0007.jpg" alt="">
           <a href="https://en.wikipedia.org/wiki/The_Friends_Experience"><h3>Travel With Friends</h3></a>
           <ul><a class="arrow1">study More</a></ul>
            <p>What’s better than going on a trip? Going on a trip with a friend, of course. Friends make life better — so, it only makes sense that traveling with our best buds would enhance our journeys. It’s always good to get away and explore new environments or even revisit favorite destinations — and sharing those experiences with a friend makes them even more enjoyable. So, before you embark on your latest adventure with your bestie or group of pals, share some inspiring travel quotes for friends to get them excited for the trip.<br> <br>

        </article>
        <article class="destination5">
<img src="./123456789.avif" alt="">
           <a href="https://en.wikipedia.org/wiki/The_Friends_Experience"><h3>Adventure Travel</h3></a>
           <ul><a class="arrow1">view More</a></ul>
            <p>Life is an adventure. Live it.
Life is either a daring adventure or nothing at all.
The biggest adventure you can take is to live the life of your dreams.“We travel not to escape life, but for life not to escape us.
The purpose of life is to live it, to taste experience to the utmost, to reach out eagerly and without fear for newer and richer experience.
Adventure is worthwhile in itself.
Adventure is the bridge between dreams and reality. When we walk across that bridge, we can explore the unknown and uncover hidden wonders. With every step, we move closer to our ambitions, passions, and goals. Adventure gives us the courage to take risks and make bold decisions – decisions that help shape our destiny.
When we experience adventure, we find ourselves in the present moment and savor all the beauty that life has to offer.
 It’s about living each day to the fullest and trusting in ourselves, no matter what comes our way.
Adventure is the path that leads us closer to discovering our true purpose, unlocking our potential, and finding fulfillment in life.
Life is an adventure, so go out there and explore.
Make each day an adventure and take the time to enjoy the journey.
Life is an adventure, so take chances and make discoveries along the way.<br> <br>

 </article>



        <!-- Add more destination articles as needed -->
    </section>  
    </form>
    <form id="boxicon" action="">
    <a class="icon" href=""> <box-icon type='logo' name='twitter'></box-icon></a>
    <a class="icon"href=""><box-icon name='instagram' type='logo' ></box-icon></a>
    <a class="icon"href=""><box-icon name='facebook-square' type='logo' ></box-icon></a>
    <a class="icon"href=""><box-icon name='youtube' type='logo' ></box-icon></a>
    <a class="icon"href=""><box-icon name='quora' type='logo' ></box-icon></a>
     </form>
     <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>


<style>
    
   /* ......................................................................... */
    /* Basic styling for the dropdown */
    #boxicon{
    display: flex;
    margin-top: 20px;
    justify-content: center;
    color: white;
    margin-bottom: 30px;
}

@media screen and (max-width:800px){
    
}


.log{
 margin-left: 1000px;
    font-family: "Playfair Display", serif;
    letter-spacing: 2px;
}
.log{
    content: '→'; 
    position: absolute;
    padding-right: 20px;
}
.log{
    content: '→'; 
    position: absolute;
    
    font-family: "Playfair Display", serif;
}
.log::after{ 
content: '→'; 
font-size: 30px;
position: absolute;
top: 50%;
right: -0.5px;
transform: translateY(-50%);  
}

.log::after{ 
content: '→'; 
font-size: 30px;
position: absolute;
top: 40%;
right: -0.5px;
transform: translateY(-50%);  
}
.log:hover{
    
    background-color: gray;
}

.icon:hover{
    /* background-color:rgba(225,189,167,255); */
    background-color: red;
    transition: 15px;
    transform: scale(1.8);

}
    .dropdown {
      position: relative;
      display: inline-block;
      font-family: "Playfair Display", serif;
    }

    /* Style for the button that triggers the dropdown */
    .dropdown-btn {
      /* padding: 10px; */
      background-color: #444;
      color: #fff;
      border: none;
      cursor: pointer;
      font-style: normal;
      display: inline;
      text-decoration: none;
      letter-spacing: 2px;
    }

    /* Style for the dropdown content */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      letter-spacing: 0px;
    }

    /* Style for individual dropdown items */
    .dropdown-content a {
      padding: 12px 16px;
      display: block;
      color: #333;
      text-decoration: none;
    }

    /* Change color on hover for dropdown items */
    .dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown when hovering over the button or dropdown content */
    .dropdown:hover .dropdown-content {
      display: block;
    }

option{
    margin-left: -500px;
}





 
/* .......................................................................... */
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}


h2{
margin-left: 10px;
font-family: "Playfair Display", serif;

gap: 10px;
font-size:xx-large;

}

p{
    font-family: "Playfair Display", serif;
    margin-left: -500px;
    font-size:large;

}
/* p:hover{
 background-color: #C3CFE2;
} */

.secure{
    justify-content: center;
    align-items: center;
    position: relative;
    margin-left: 500px;
    letter-spacing: 2px;
}


h3{ 
    font-size:x-large;
    text-decoration: none;
    color: black;
    text-decoration: dotted;
    margin-top: -0.5px;
    font-family: "Playfair Display", serif;
    margin-left: -100px;
    
    
    
  
    

}

h3:hover{
    /* color: pink;
   
    width: fit-content; */
    text-decoration: none;
    color:rgba(136,87,56,255);
    padding-left: 20px;
    font-family: 'Arial', sans-serif;
    font-family: "Playfair Display", serif;
    
}


img{
justify-content: center;
align-items: center;
/* margin-bottom: 30px; */
    width:500px;
    height: 250px;
    border-radius: 10px;
    transition: transform 0.3s ease-in-out;
    border-radius: 30px;
 
}

img:hover{
    transition: 0.2px;
    transform: scale(1.2);
}







header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    /* margin-left: 20px; */
}

nav {
    background-color: #444;
    padding: 10px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav li {
    display: inline;
    margin-right: 10px;
}

nav a {
    text-decoration: none;
    color: #fff;
    padding-left: 20px;
    letter-spacing: 2px;
}

.arrow{
    content: '→'; 
    position: absolute;
    padding-right: 20px;
}

.arrow1{
    content: '→'; 
    position: absolute;
    padding-right: 20px;
    margin-left: -250px;
    margin-top: -45px;
    font-family: "Playfair Display", serif;
  

}

.arrow1::after{ 
content: '→'; 
font-size: 30px;
position: absolute;
top: 50%;
right: -0.5px;
transform: translateY(-50%);  
}



.arrow::after{ 
content: '→'; 
font-size: 30px;
position: absolute;
top: 40%;
right: -0.5px;
transform: translateY(-50%);  
}
.arrow:hover{
    
    background-color: gray;
}

section {
    padding: 20px;
}

.destination {
    margin-bottom: 20px;
}

form {
    display: grid;
    gap: 10px;
}


/* footer {
    background-color: #444;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
} */

</style>