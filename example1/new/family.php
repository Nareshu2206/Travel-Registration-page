<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Travel</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="wrapper">
    
<div class="head">
        <p>Explore Amazing Destinations</p>
  </div>
    
    <nav>
        <ul>
            <!-- <li><a href="#home">Home</a></li> -->
            <!-- <li><a href="">Destinations</a></li> -->
            <div class="dropdown">
  <!-- The button that triggers the dropdown -->
  <button class="dropdown-btn">More Places<box-icon id="arrow" name='down-arrow-alt' ></box-icon> </button>

  
  <!-- The actual dropdown content -->
  <div class="dropdown-content">
    <a href="https://en.wikipedia.org/wiki/Mountaineering">Paris</a>
    <a href="https://en.wikipedia.org/wiki/Bali">Bali</a>
    <a href="https://en.wikipedia.org/wiki/Kyoto">Kyoto</a>
    <a href="https://en.wikipedia.org/wiki/Santorini">Santorini</a>
    <a href="https://en.wikipedia.org/wiki/Amalfi_Coast">Amalfi Coast</a>
    <a href="https://en.wikipedia.org/wiki/Marrakesh">Marrakesh</a>
    <a href="https://en.wikipedia.org/wiki/Bora_Bora">Bora Bora</a>
    <a href="https://en.wikipedia.org/wiki/Belgium">Belgium</a>
    <a href="https://en.wikipedia.org/wiki/New_York_City">New York</a>
    <a href="https://en.wikipedia.org/wiki/Buenos_Aires">Buenos Aires</a>
    <a href="https://en.wikipedia.org/wiki/Cinque_Terre">Cinque Terre </a>
    <a href="https://en.wikipedia.org/wiki/Iceland">Iceland</a>
    <a href="https://en.wikipedia.org/wiki/Prague">Prague</a>
    <a href="https://en.wikipedia.org/wiki/Rome">Rome</a>
    <a href="https://en.wikipedia.org/wiki/Seychelles">Seychelles</a>
    <a href="https://en.wikipedia.org/wiki/Switzerland">Switzerland</a>

  </div>
</div>
            <li><a href="#about us">About Us:</a></li>
            <li><a class="cell" href="#contact">Contact detailes:</a></li>
            <li><a class="arrow" href="./show.php">Home:</a></li>
        </ul>
    </nav>
<form class="all" action="">
    <section id="about us">
<h3>Travel With Family</h3>
<h4>
    <p>
    “Children have always travelled, and because they are young and bright and full of contradictions, they haven’t always restricted their travel to the possible. Children follow the foxes, and open the wardrobes, and peek beneath the bridge. Children climb the walls and fall down the wells and run the razor’s edge of possibility until sometimes, just sometimes, the possible surrenders and shows them the way to go home.”“I think that the best thing we can do for our children is to allow them to do things for themselves, allow them to be strong, allow them to experience life on their own terms, allow them to take the subway… let them be better people, let them believe more in themselves.”
    </p>
</h4> <br> <br>
<h5>
    <p>
    1. Solo travel helps you to know yourself more:    </p> <span>
    No matter how old you are, travel is an important educational experience. These quotes about life lessons and world schooling illustrate how beneficial family travel can be to shaping young minds in particular.</span>
</h5>
<h5>
    <p>
    2. Travelling solo is cost effective.</p> <span>
    “The best education you will ever get is traveling. Nothing teaches you more than exploring the world and accumulating experiences.Young kids might not realise it now, but the travel experiences you create for them are almost guaranteed to leave a lasting impression into adulthood.  </span>
</h5>

<h5>
    <p>
    3. You’re in charge of making decisions.</p><span>
When you travel in a pair or in a group, it’s natural that quite often people won’t want to do the same thing as you, or they want to do things at different times. However, when you are travelling solo it’s your decision what you want to do and no one else’s. Therefore, you’ll be forced to trust your gut, and do things based entirely on your own instinct. This certainly benefits you post-travelling as well, as your decision-making skills will be vastly improved.</span>
</h5>
<h5>
    <p>4. With solo travel, you can be as selfish as you want</p> <span>
A particular benefit of being in charge of making decisions while travelling is that you can do exactly what you feel like on any given day or time. When you’re travelling as part of a group or with a family, everyone’s needs and desires have to be taken into account, which can often lead to a lot of compromise. Travelling solo is your chance to be in charge, meaning that you can eat at the exact restaurant you want to, wake up as early or late as you like, or even decide to spend a day by the pool if you’re feeling tired.</span>
</h5>

<h5>
 <p>5. When travelling solo it’s easier to make friends</p> <span>
Undoubtedly one of the biggest benefits of travelling alone is that you’ll find yourself interacting with a lot more people than you would if you were with others, which can often lead to long term friendships. Even if the idea of striking up conversation with someone you don’t know sounds a little terrifying, within a few hours of travelling you’ll realise that it’s much easier than it sounds. Groups and other solo travellers alike are always keen to get chatting, and you might even find that you end up joining a group for parts of your travels if you really get along. There a huge number of stories of people who’ve met travelling and ended up being friends for life. You never know, this could happen to you.</span>
</h5>
</section>
</form>
</body>
</html>




<section id="contact">
        <h2>CONTACT DETAILES:</h2>
        <p>Have questions or need assistance? Feel free to reach out to us.</p>
        <form action="./famconnect.php" method="post">
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter Your Name"    id="name" name="name" required>
            
            <label for="name">Number of children:</label>
            <input type="number" placeholder="Number of children"   id="name" name="children" required>

            <label for="email">Email:</label>
            <input type="email" placeholder="Enter your Mail"  id="email" name="email" required>


              
            <label for="Phone Number">Phone Number:</label>
            <input type="Number"  placeholder="Enter Your Phone Number"    id="cell " name="Number" required>

            
            <label for="Date">Date of Travel:</label>
            <input type="date"  placeholder="Enter Travel Date"    id="date" name="date" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button id="submite" type="submit">Submit</button>
        </form>
        </section>
        <!-- <box-icon name="user"></box-icon> -->
<form id="boxicon" action="">
    <a class="icon" href=""> <box-icon type='logo' name='twitter'></box-icon></a>
    <a class="icon"href=""><box-icon name='instagram' type='logo' ></box-icon></a>
    <a class="icon"href=""><box-icon name='facebook-square' type='logo' ></box-icon></a>
    <a class="icon"href=""><box-icon name='youtube' type='logo' ></box-icon></a>
    <a class="icon"href=""><box-icon name='quora' type='logo' ></box-icon></a>
     </form>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
   
<!--     
    <footer>
        <p>&copy; 2024 Travel Destinations. All rights reserved.</p>
    </footer> -->
    </div>
</body>
</html>

<style>

.wrapper{
                /* display: flex;
                justify-content: center;
                align-items: center; */
                min-height: 100vh;
                background:rgba(39,39,39,0.4);
        }

h2{
    font-family: "Playfair Display", serif;
    font-size:x-large;
    font-weight: 900;
}



.head p{
justify-content: center;
align-items: center;
color: black    ;
font-family: "Playfair Display", serif;
font-weight: 800;
letter-spacing: 2px;
display: flex;
padding-top: 80px;
font-size: x-large;

}



#contact{
    width: 700px;
    margin-left: 400px;
    /* letter-spacing: 1px; */
    font-weight: 800;
    font-family: "Playfair Display", serif;
}

#contact p{
    color: black;
}


    ::placeholder{
        color: black;
    }
#boxicon{
    display: flex;
    margin-top: 20px;
    justify-content: center;
    color:black;
    
}

.icon:hover{
    background-color:green;
    transition: 15px;
    transform: scale(1.8);

}

#submite{
    width: 600px;
   color: black; 
   background: rgba(257, 257,257,0.50);
    border: none;
    font-family: "Playfair Display", serif;
    cursor: pointer;
    justify-content: center;
    align-items: center;
}

#arrow{
    margin-left:0.5px;
padding-top: 10px;
/* color:rgba(136,87,56,255); */
   
}



input{
    width: 600px;
   color: white; 
   background: rgba(257, 257,257,0.50);
}
#message{
    width: 600px;
   color: black; 
   background: rgba(255, 255,255,0.2);
   border: 0;
   font-family: "Playfair Display", serif;
   font-weight: 800;
   letter-spacing: 2px;
}
#message:hover{
    background: rgba(257, 257,257,0.50);
}
    h2{
 /* color:rgba(136,87,56,255); */
 color: black;
    }
h3{
    justify-content: center;
    align-items: center;
    display: flex;
    color:black ;
    /* color:blue; */
    /* color:rgb(188, 12, 241), rgb(212, 4, 4) ; */
   
    font-size: x-large;
    font-family: "Playfair Display", serif;
    
}

h4 p{
       background: -webkit-linear-gradient(191,89,25);
       /* background: rgb(191,89,25); */
background: linear-gradient(97deg, rgba(191,89,25,0.9697128851540616) 0%, rgba(7,221,238,0.9921218487394958) 31%, rgba(156,26,0,0.9977240896358543) 100%);
       background-clip: text;
  -webkit-text-fill-color: transparent;
    width: 800px;
margin-left: 350px;
font-size: x-large;
letter-spacing: 2px;
/* font-style: italic; */
font-family: "Playfair Display", serif;


}
h4 p:hover{
   
  background: black;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

h5 p{
   margin-left: 20px;
   /* background: rgba(136,87,56,255); */
   background-color: black;
  background-clip: text;
  -webkit-text-fill-color: transparent;
    width: 800px;
    letter-spacing: 2px;
font-size: x-large;
font-family: "Playfair Display", serif;

}

h5 p:hover{
    background: -webkit-linear-gradient(rgb(188, 12, 241), rgb(212, 4, 4));
    background-clip: text;
  -webkit-text-fill-color: transparent;
}
h5 span{
    color:white;
    font-size:large;
    margin-left: 20px;
}


h5 span:hover{
    /* background: rgba(136,87,56,255); */
    background: -webkit-linear-gradient(rgb(188, 12, 241), rgb(212, 4, 4));
  background-clip: text;
  -webkit-text-fill-color: transparent;
}









input::placeholder{
    padding-left:0.5px;
}
       



    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

#contact {
    padding: 20px;
  
   
}

form {
    display: grid;
    gap: 10px;
    
}
input{
    border-radius: 0.5px;
    border: none;
    background: rgba(255, 255,255,0.2);
    font-family: "Playfair Display", serif;
    font-weight: 800;
    letter-spacing: 2px;
}
input:hover{
    background: rgba(257, 257,257,0.50);
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







<!-- .................................................... -->
<style>






body{
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: url(./baby.avif);
    position: relative;
        /* overflow: hidden; */
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
}

h1{
    color: white;
   
}

    
    

header {
    /* background-color: #333; */
    color:solid black;
    text-align: center;
    font-family: 'Arial', sans-serif;
    padding: 20px;
    /* margin-left: 20px; */
}

nav {
    /* background-color: #444; */
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
    /* color:rgba(136,87,56,255); */
    color: white;
    padding-left: 20px;
    font-family: 'Arial', sans-serif;
    color: black;
  
}
a{
    /* font-family: 'Arial', sans-serif; */
    font-weight: 800
    
}

button{
    font-family: 'Arial', sans-serif;
    font-weight: 800
    
}

li a{
    font-family: "Playfair Display", serif;
    font-size: larger;
    font-weight: 800;
}


/* ........................................ */
 /* Basic styling for the dropdown */
 .dropdown {
      position: relative;
      display: inline-block;
    }

    /* Style for the button that triggers the dropdown */
    .dropdown-btn {
      /* padding: 10px; */
      background-color:#a2a1a0;
      /* background-color: rgba(245,241,240,255); */

     color: black;
      border: none;
      cursor: pointer;
      font-style: normal;
      display: inline;
      text-decoration: none;
      font-size:medium;
      font-family: 'Arial', sans-serif;
    }

    /* Style for the dropdown content */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow:#d8b16e;
      z-index: 1;
      /* border-radius: 10px; */
    }

    /* Style for individual dropdown items */
    .dropdown-content a {
      padding: 12px 16px;
      display: block;
      color: #333;
      /* background-color:rgba(97,202,230,255); */
      text-decoration: none;
      font-size:small;
      font-family: 'Arial', sans-serif;
      /* border-radius: 10px; */
      font-family: "Playfair Display", serif;
    }

    /* Change color on hover for dropdown items */
    .dropdown-content a:hover {
    
        /* background-color:#d8b16e; */
        background-color: green;
    }
    

    /* Show the dropdown when hovering over the button or dropdown content */
    .dropdown:hover .dropdown-content {
      display: block;
    }
/* 
option{
    margin-left: -500px;
} */


</style>