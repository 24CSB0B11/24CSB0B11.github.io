<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $country=$_POST['dropdown2'];
    if($country=="U")
    {
        echo "Visa required for most applicants.";
    }
    if($country=="C")
    {
        echo "Visa required unless you have an eTA.";
    }
    if($country=="I")
    {
        echo "Visa required before travel.";
    }
    if($country=="UK")
    {
        echo "Visa depends on the duration of stay.";
    }
    if($country=="AUS")
    {
        echo "eVisa available for eligible travelers.";
    }
}
?>