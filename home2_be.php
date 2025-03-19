<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $passport=$_POST["passnum"];
    $country=$_POST["dropdown"];
    if($email== "")
    {
        echo "Email is required";
    }
    else if($passport== ""||strlen($passport)<8)
    {
        echo "Password must be at least 8 characters";
    }
    else
    {
        echo "Email: ".$email;
        echo "<br>";
        echo "Passport: ".$passport;
        echo "<br>";
        if($country== "I")
        {
            $country="India";
        }
        if($country== "U")
        {
            $country="USA";
        }
         if($country== "C")
        {
            $country="Canada";
        }
         if($country== "AUS")
        {
            $country="Australia";
        }
       if($country=="UK")
       {
        $country= "United Kingdom";
       }
       echo "Country: ".$country;
       echo "<br>";
       echo "Form submitted successfully";
    }
}
?>