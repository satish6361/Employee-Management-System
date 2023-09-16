<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Development</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="center">
        <h1>Employee Data Entry Automation Software</h1>
        <div class='form'>
            <input type="text" class='textfield' placeholder='Search ID'>
            <input type="text" class='textfield' placeholder='Employee Name'>
            <select class='textfield'>
                <option>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
            <input type="text" class='textfield' placeholder='Email Address'>
            <select class='textfield'>
                <option>Select Department</option>
                <option>IT</option>
                <option>Accounts</option>
                <option>Sales</option>
                <option>HR</option>
                <option>Business Development</option>
                <option>Marketing</option>
            </select>
            <textarea placeholder='Address'></textarea>

            <input type="submit" value="Search" name="" class="btn">
            <input type="submit" value="Save" name="" class="btn" style="background-color: green">
            <input type="submit" value="Modify" name="" class="btn" style="background-color: orange">
            <input type="submit" value="Delete" name="" class="btn" style="background-color: red">
            <input type="submit" value="Clear" name="" class="btn" style="background-color: blue">
        </div>
    </div>

    
</body>
</html>


<?php

include("connection.php");

?>