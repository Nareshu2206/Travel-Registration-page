



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contect</title>
</head>
<body>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>

    <section id="contact">
        <h2>Contact Details :</h2>
        <p>Have questions or need assistance? Feel free to reach out to us.</p>
        <form method="post" action="connect.php">
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter Your Name" id="name" name="uname" required>

            <label for="email">Email:</label>
            <input type="email" placeholder="Enter Your Mail" id="email" name="email" required>

           <label for="phoneNumber">Phone Number:</label>
            <input type="tel" placeholder="Enter Your Phone Number" id="phoneNumber" name="number" required>


            <label for="address">Address:</label>
            <textarea id="address" placeholder="Address" name="address" rows="4" required></textarea>

            <label for="message">Message:</label>
            <textarea id="message" placeholder="Free To Text" name="message" rows="4" required></textarea>

            <button type="submit" name="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Travel Destinations.</p>
    </footer>

</body>
</html>


</body>
</html>

<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}
button{
    font-family: "Playfair Display", serif;
    letter-spacing: 2px;
    font-weight: 600;
}

#contact {
    padding: 20px;
}

form {
    display: grid;
    gap: 20px;
}

footer {
    background-color: #444;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}
h2{
    font-family: "Playfair Display", serif;
    
}
p{
    font-family: "Playfair Display", serif;
    letter-spacing: 2px;
    font-size: larger;
    font-weight: 300;
}

label{
    font-family: "Playfair Display", serif;
    font-weight: 900;
}
</style>