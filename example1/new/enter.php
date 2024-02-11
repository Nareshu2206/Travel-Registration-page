<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="">
    <div class="hello">
    <p>
        HELLO.
</p>
    </div>
    <h2 id="head">
        WELCOME TO THE WORLD TOUR :)
    </h2>
    <!-- <div class="content">
    <p class="about">
    Between vacations, many daydream about what adventures the next trip holds. You can spend your days switching back and forth from looking at your favorite travel photos to trying to go about your day to day life. But a few friendly reminders that the next adventure is closer than you think can help you put your wanderlust to rest. And one of the best distractions comes with this list of travel quotes. Pick your favorite from the collection below and use it to inspire your next trip!
    </p>
    </div> -->
    <!-- <div class="button">
    <box-icon class="icon" name='right-arrow-alt'></box-icon>
    <box-icon class="arrow" name='right-arrow-alt'></box-icon>
        <button><a href="./index.php">click to vesite</a></button>
    </div> -->
    
    
    
<!-- <img src="https://st.depositphotos.com/1500858/4082/i/450/depositphotos_40827443-stock-photo-travel-the-world-concept.jpg" alt="">    -->
<!-- <img src="https://img.freepik.com/premium-vector/travel-time-vector-banner-design-time-travel-explore-world-text-world-map-background_572293-799.jpg?w=360" alt=""> -->
<!-- <img src=".//ready-summer-vacation-travel-background-d-rendering-114574299.webp" alt=""> -->
    <div class="container">
    <div class="img">
<img src="./00012.jpg" alt="">
<div class="lorem">
<h3>OUR WORLD TOUR</h3>
<p>Travel is the activity of going from one place to another place.When a person makes the same trip every day to work or school, this type of traveling is usually called "commuting." Some people travel to other cities as part of their job. This is called "business travel." When many people travel to a distant place to stay, it is called "human migration.</p>
</div>
</div>
</div>
<a href="./signup.php" class="arrow-button">visite  page</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
      


      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
form{
    min-height: 110vh;
   

background:rgba(39,39,39,0.4);
}
 
.container{
    margin-top: 30px;
    margin-left: -700px;

    /* width: 100%;
    height: 100vh; */
    display: flex;
    justify-content: center;
    align-items: center;

}
.img{
    width: 600px;
position: relative;
margin-left: 800px;
    /* min-height: 110vh;
background:rgba(39,39,39,0.4); */

}
img{
    width: 600px;
/* width:100%; */
display: block;
margin: auto;
border-radius: 30px;
background:rgba(39,39,39,0.4);
}
.lorem{
    width: 100%;
    height: 100%;
    border-radius: 30px;
    top: 0;
    left: 0;
    position: absolute;
    background:rgba(0,0,0,0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    opacity:0;
    transition: 0.6s;
    font-size:xx-small;
    
}
.lorem:hover{
    opacity: 1;
}
.lorem h3{
    font-size:50px;
    color: yellow;
    margin-bottom:15px ;
    text-align: center;
    transform: matrix(400);
  font-family: "Lora", serif;
  font-optical-sizing: auto;
  font-weight: weight;
  font-style: normal;
}

.lorem p{
    width: 500px;
    font-size:20px;
    color: white;
    transform: translatez(25px);
  font-family: "Noto Serif JP", serif;
  font-weight: 400;
  font-style: normal;


}



/* .content > *{
    transform: translatex(25px);
    transition: transform 0.6s;
}
.content :hover > *{
    transform: translatex(0px);
} */





.hello p{
    color: black;
    font-size: x-large;
    font-weight: 800;
    font-family: "Noto Serif JP", serif;
    /* font-family: fantasy; */
    margin-left: 300px;
    /* margin-top: 100px; */
    padding-top: 100px;
    /* min-height: 110vh;
background:rgba(39,39,39,0.4); */
}
/* .hello{
    min-height: 110vh;
background:rgba(39,39,39,0.4);
} */

    
    /* .about{
        width: 500px;
        color: black;
        margin-left: 30px;
        margin-top: -80px;
        font-style: italic;
     
        text-align: center;
     
    } */
    .content{
 color: red;
padding-top: 100px;
width: 600px;
height: 250px;
 margin-left: 40px;
 background: rgb(191,89,25);
background: linear-gradient(97deg, rgba(191,89,25,0.9697128851540616) 0%, rgba(238,189,7,0.9921218487394958) 31%, rgba(156,26,0,0.9977240896358543) 100%);
border-radius: 30px;

    }
    body{
        background: url(./00012.jpg);
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
            /* min-height: 110vh;
background:rgba(39,39,39,0.4); */

 
        
    }
    /* body{
        font-family: 'poppins',sans-serif;
        background-color: #FFDEE9;
background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
background-color: #74EBD5;
background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
 } */
 #head{
margin-left: 80px;
margin-top: 80px;
margin-top: -10px;
 font-family: "Playfair Display", serif;
 font-optical-sizing: auto;
 font-weight: 585;
 font-style: normal;
 color: black;
}
button{
width: 500px;
height: 50px;
color: #74EBD5;
margin-left: 50px;
margin-top: -100px;
border-radius: 20px;
background-color: purple;
position: relative;

}  
a{
    color: white;
    text-decoration: none;

}
.arrow{
    color: white;
    background-color: white;
    display: flex;
    position: relative;
    margin-top: 100px;
    margin-left: 500px;
}

.arrow-button {
display: inline-block;
padding: 10px 20px;
background: url(./00012.jpg);
/* color: #fff; */
text-align: center;
text-decoration: none;
font-size: 20px;
border-radius: 5px;
position: relative;
overflow: hidden;
margin-left: 260px;
margin-top: 50px;
border-color: black;
border-width: 10px; 
color: black;
}
.arrow-button:hover{
    color:red;
}
        

       
        .arrow-button::after {
            content: '→'; 
            font-size: 30px;
            position: absolute;
            top: 50%;
            right: -0.5px;
            transform: translateY(-50%);
          
      
        }  
</style>
</body>
</html>