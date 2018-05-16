<?php
    $allPage = file_get_contents("https://www.expedia.com/Flights-Search?trip=oneway&leg1=from:New%20York,%20NY%20(NYC-All%20Airports),to:Miami,%20Florida,departure:06/01/2018TANYT&passengers=children:0,adults:1,seniors:0,infantinlap:Y&mode=search");
    echo($allPage);
?>