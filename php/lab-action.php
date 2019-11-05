<?php
    echo "<h1>Thank you! Your survey has been submitted.</h1>";
    echo "<h2>Your selections are as followed:</h2>";

    echo "<h3>Demographic Information</h3>";

    echo "Your gender is: " .$_POST['gender'] ."<br>";
    echo "Your age is: " .$_POST['age']."<br>";
    echo "Your level is: " .$_POST['level']."<br>";
    echo "Your school is: " .$_POST['school']."<br>";

    echo "Your evaluated security knowledge: " .$_POST['value']."<br>";
    echo "Your computer infected before: " .$_POST['yes-no']."<br>";

    echo "Anti-virus software(s) you usually use: ";
    if(isset($_POST['submit'])) {
        if(!empty($_POST['anti_virus'])) {
            foreach ($_POST['anti_virus'] as $selected) {
                 echo $selected ." ";
            }
        }
    }

    echo "<br>";

    echo "<h3>Your opinion</h3>";
    echo "You know how to create strong password: " .$_POST['s-pass']."<br>";
    echo "You know how to remove viruses: " .$_POST['r-virus']."<br>";
    echo "You know how to remove spyware: " .$_POST['spyware']."<br>";
    echo "You know how to secure wireless: " .$_POST['s-wifi']."<br>";
    echo "You know how to protect your personal info while surfing the web: " .$_POST['p-info']."<br>";


?>
