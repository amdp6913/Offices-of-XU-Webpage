<?php
session_start();
?>

<style>
html {
  height: 100%;
  width: 100%;
  background-color: #283971;
}

body {
  font-family: Georgia, serif;
}

h1 {
  text-align: center;
  color: white;
}

.button {
    background-color: #8D7F4D;
    color: white;
    padding: 25px 50px;
    margin: 50px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.button1 {
  background-color: #8D7F4D;
  color: white;
}

.button1:hover {
  background-color: #6d633c;
  color: white
}

div.office {
  position: fixed;
  margin: auto;
  width: 99%;
  height: 70%;
  color: white;
  background-color: #1b264b;
}

div.footer {
  position: fixed;
  bottom: 0;
  left: 5px;
  width: 500px;
  color: white;
}

div.about {
  position: fixed;
  bottom: -42px;
  left: 1230px;
  width: 500px;
  color: white;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Offices of Xavier University - Ateneo de Cagayan (Dummy)</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/x-icon" href="G:\xampp\htdocs\Offices-of-XU-Webpage\assets\images\xu-icon.ico">
</head>

<body>
  <img src="G:\xampp\htdocs\Offices-of-XU-Webpage\assets\images\XU-Logo.png" alt="Logo of XU" height="60">
  <h1>Offices of Xavier University - Ateneo de Cagayan</h1>

  <div class="office">
    <button class="button button1">Health Services Office</button>
    <button class="button button1">Central Purchasing Office</button>
    <button class="button button1">Safety and Security Office</button>
    <button class="button button1">Computing and Information Services Office</button>
    <button class="button button1">Physical Plant Office</button>
    <button class="button button1">Office of the Vice President</button>
    <button class="button button1">Fleet Management Office</button>
  </div>
  
  <div class="footer">
    <p>&copy; 2024 Xavier University - Ateneo De Cagayan</p>
    <p>Corrales Avenue, Cagayan de Oro City, Philippines</p>
  </div>

  <div class="about">
      <button class="button button1">About us</button>
  </div>
</body>

</html>