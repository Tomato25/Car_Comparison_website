<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
    include "C:\shares\student\web\ITEC30151\N0826071\Connection.php"; 

?>
    <link rel="stylesheet" href="reportstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <nav>
        <div class="logo">
            <h3>Car compare</h3>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard1.php">Dashboard</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="report.php">Report</a></li>
        </ul>
        <div class="burger-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

    </nav>

    <div class="wrapper">
       <div class="reportwrap">
            <h1>Report</h1>
            <p><br><br>This dashboard is created in order to present the user with the data which will help it choose best car option based on certain criteria. In order to get a broad picture of the car market, charts will show sale numbers in recent years from several different manufacturers as well as user rating of that manufacturers. Other charts will show metrics and data about selected car models for more in depth analysis. The charts will compare fuel usage data and average prices of used and new cars.<br><br> </p>
            <h2>User journey<br><br></h2>
            <div class="tutorialimg1"></div>
            <p><br><br>By using CarCompare website user wants to get enough information about car market to be able to choose the car with the best ratio of quality and price. CarCompare website offers information about cars in tabular as well as graphical form. While data in tabular form is accessible to anyone, in order to access dashboard user needs to be logged in. In this user journey, after navigating through home page and log in screen user clicks on dashboard link places in the global navigation bar. Considering the fact that user didn’t make selection of the cars prior to going to a dashboard, it is presented with the more general data about car market. First chart shows number of cars sold in past years for the most popular manufacturers. Data from that chart help the user to get insight about current and past trends on the car market. Second charts show average user rating for same manufacturers as in in the first chart. By examining data in that chart user can see which manufacturers have most satisfied customers which can be very insightful metric when deciding on buying a new car. After getting information on manufacturers user is presented with the charts about fuel usage. User can select desired manufacturer from dropdown menu and will be presented with that manufacturer’s car models.  Chart shows Mpg data for both petrol and diesel models. By comparing several models and both petrol and diesel options on the same chart user can easily determine which option best suits its needs. Last charts compare average prices for new and used car models.</p>
            <p><br><br>After analysing the dashboard, user now has information about most popular manufacturers and their ratings from existing customers/users. Both user rating and sales record can be a good sign of quality and useful information when buying any product. Fuel consumption metrics show user long term economic consequences of the purchase while average price helps user to decide if new or used car is better option.</p>
            <h2><br><br>Future work</h2>
            <p><br><br>Future work would be based mostly on adding more functionality to the charts through user input. For example, in the fuel consumption chart another dropdown menu could be added so that user can dynamically add more car models to compare. Another feature that could be useful is overview of selected cars with car images and information which is not suitable for graphical representation. </p>
 </div>
    




        <div class="footer"></div>
    </div>
</body>  
</html>