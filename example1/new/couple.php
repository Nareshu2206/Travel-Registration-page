<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couple Travel</title>
  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
<header>
        <h1>Explore Amazing Destinations</h1>
    </header>
    
    <nav>
        <ul>
            <!-- <li><a href="#home">Home</a></li> -->
            <!-- <li><a href="">Destinations</a></li> -->
            <div class="dropdown">
  <!-- The button that triggers the dropdown -->
  <button class="dropdown-btn">More Places <box-icon id="arrow" name='down-arrow-alt' ></box-icon></button>
  
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
            <li><a href="./about couple.php">About Us</a></li>
            <li><a class="arrow" href="./show.php">Home</a></li>
        </ul>
    </nav>

</body>
</html>




<section id="contact">
        <h2>CONTACT DETAILES:</h2>
        <p>Have questions or need assistance? Feel free to reach out to us.</p>
        <form action="./coupleconnect.php" method="post">
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter Your Name"    id="name" name="name" required>
            
            <label for="name">Couple Name:</label>
            <input type="text" placeholder="Enter Couple Name"   id="name" name="couplename" required>

            <label for="email">Email:</label>
            <input type="email" placeholder="Enter your Mail"  id="email" name="email" required>


              
            <label for="Phone Number">Phone Number:</label>
            <input type="Phone Number"  placeholder="Enter Your Phone Number"    id="Phone Number" name="Number" required>

            
            <label for="Date">Date of Travel:</label>
            <input type="date"  placeholder="Enter Travel Date"    id="date" name="date" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
            
        </form>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
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
<!--     
    <footer>
        <p>&copy; 2024 Travel Destinations. All rights reserved.</p>
    </footer> -->

</body>
</html>

<style>



h2{
    font-family: "Playfair Display", serif;
}

    
    #message{
        background: rgba(255, 255,255,0.2);
        border: 0;
    }

    #message:hover{
        background: rgba(257, 257,257,0.50);
    }
#boxicon{
display: flex;
margin-top: 450px;
justify-content: center;
color: white;
margin-bottom: 30px;
}

.icon:hover{
    /* background-color:rgba(225,189,167,255); */
    background-color: white;
    transition: 15px;
    transform: scale(1.8);
    

}



#arrow{
    /* margin-left:0.5px; */
padding-top: 10px;
/* color:rgba(136,87,56,255); */
margin-left: -10px;

   
}




input::placeholder{
    padding-left:0.5px;
}
input{
    color: white;
}
       



    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

#contact {
    padding: 20px;
    width: 500px;
    height: 50px;
    font-family: "Playfair Display", serif;
   
}

form {
    display: grid;
    gap: 10px;
    
}
input{
    color: black;
    font-weight: 800;
    font-family: "Playfair Display", serif;
    border-radius: 0.5px;
    border: none;
    background: rgba(255, 255,255,0.2);
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
    /* font-family: 'Arial', sans-serif; */
    margin: 0;
    padding: 0;
    background: url(./couple\ 16.png);
    position: relative;
        /* overflow: hidden; */
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
}

h1{
    font-family: "Playfair Display", serif;
    letter-spacing: 2px;
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
    color: black;
    padding-left: 20px;
    font-family: 'Arial', sans-serif;
}
a{
    font-family: 'Arial', sans-serif;
    font-weight: 800
}

button{
    font-family: "Playfair Display", serif;
    font-weight: 800
}
li a{
    font-family: "Playfair Display", serif;
    font-weight: 800;
    font-size: larger;
}



/* ........................................ */
 /* Basic styling for the dropdown */
 .dropdown {
      position: relative;
      display: inline-block;
      font-family: "Playfair Display", serif;
    }

    /* Style for the button that triggers the dropdown */
    .dropdown-btn {
      /* padding: 10px; */
      background-color:rgba(97,202,230,255);
      color:black;
      border: none;
      cursor: pointer;
      font-style: normal;
      display: inline;
      text-decoration: none;
      font-size:medium;
      font-family: 'Arial', sans-serif;
      font-family: "Playfair Display", serif;
    }

    /* Style for the dropdown content */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      /* border-radius: 10px; */
      font-family: "Playfair Display", serif;
    }

    /* Style for individual dropdown items */
    .dropdown-content a {
      padding: 12px 16px;
      display: block;
      color: #333;
      /* background-color:rgba(97,202,230,255); */
      text-decoration: none;
      font-size:small;
      font-family: "Playfair Display", serif;
      /* border-radius: 10px; */
    }

    /* Change color on hover for dropdown items */
    .dropdown-content a:hover {
      /* background-color: #ddd; */
      background-color:rgba(97,202,230,255);
    }

    /* Show the dropdown when hovering over the button or dropdown content */
    .dropdown:hover .dropdown-content {
      display: block;
    }

option{
    margin-left: -500px;
}


</style>