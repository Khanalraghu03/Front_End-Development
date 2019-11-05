<?php
    if($_POST["password"] != $_POST["repassword"])
    {
        echo "You retyped your password wrong<br>";
        exit();
    }
    echo "<h1>Thank you for registering</h1>";
    echo "<h2>Your personal information:</h2>";
    echo "Your student ID: " .$_POST["sid"]."<br>";
    echo "Your first name: " .$_POST["first"]."<br>";
    echo "Your last name: " .$_POST["last"]."<br>";
    echo "Your phone number: " .$_POST["phone"]."<br>";
    echo "Your email: " .$_POST["email"]."<br>";
    echo "Your street: " .$_POST["street"]."<br>";
    echo "Your city: " .$_POST["city"]."<br>";
    echo "Your state: " .$_POST["state"]."<br>";
    echo "Your zip: " .$_POST["zip"]."<br>";
    echo "Your level: " .$_POST["level"]."<br>";

    echo "<h2>Your IT preferences:</h2>";
    if(isset($_POST["ownPC"]) && $_POST["ownPC"] == "yes")
        echo "You own a computer.<br>";
    echo "You use a computer ".$_POST["time"] ." a day<br>";
    echo "Your favorite computer brand: ".$_POST["brand"]."<br>";
    echo "Your favorite web browser(s):<br>";
    if(isset($_POST["ie"]) && $_POST["ie"] == "yes")
        echo "Internet Explorer<br>";
    if(isset($_POST["safari"]) && $_POST["safari"] == "yes")
        echo "Safari<br>";
    if(isset($_POST["chrome"]) && $_POST["chrome"] == "yes")
        echo "Chrome<br>";
    if(isset($_POST["firefox"]) && $_POST["firefox"] == "yes")
        echo "Firefox<br>";
    echo "Your major: ".$_POST['major']."<br>";

    echo "<br> Click <a href = '../Activities/10-17.html'>here</a> to sign in";
?>