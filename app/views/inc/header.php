<?php
/*add connecter
*/
?>

<!DOCTYPE html>

<html lang="en">
<title>UOC HelpDesk</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="public\css\style.css">
<!-- 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<link rel="shortcut icon" type="image/jpg" href="public\img\logo\favicon.png"/>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

<body>

<!-- Navbar -->
<div class="navbar" id="navbar">
  <a href="#home" class="nav-icon active" style="float:left"><img src="public\img\logo\landscape.png" width="100px"></a>
  
  <a href="#Search" class="search" onclick="doSearch()">Search</a>

  <a href="#About" class="nav-label">About</a>
  <a href="#Services" class="nav-label">Services</a>
  <a href="#Home" class="nav-label">Home</a>

  <div class="search-bar">
    <form action="/action_page.php">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i><img src="public\img\icons\search.svg"></i></button>
    </form>
  </div>

  <a href="javascript:void(0);" class="icon" onclick="mobileNav()">
    <img src="public\img\icons\hamburg.svg">
  </a>

</div>
