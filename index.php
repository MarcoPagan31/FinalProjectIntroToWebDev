<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset = "UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1"> 
    <title>Marco Pagan Portfolio</title>
    <link rel="stylesheet" href="style.css">?v=<?php echo time(); ?>
    <link rel="stylesheet" href="intro.css">?v=<?php echo time(); ?>
    <link rel="stylesheet" href="aboutme.css">?v=<?php echo time(); ?>
    <link rel="stylesheet" href="experience.css">?v=<?php echo time(); ?>
    <link rel="stylesheet" href="portfolio.css">?v=<?php echo time(); ?>
    <link rel="stylesheet" href="skills.css">?v=<?php echo time(); ?>
    <link rel="stylesheet" href="verticaltab.css">?v=<?php echo time(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="socialmedia.css">?v=<?php echo time(); ?>
    <link rel="stylesheet" href="contact.css">?v=<?php echo time(); ?>
    <meta charset="utf-8">
    <script src='jquery-3.2.1.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
<body>
    <b>
    <div id="navlist"> 
      <a href="index.php">Home</a> &nbsp; 
      <a href="#aboutmeheader">About</a> &nbsp; 
      <a href="#skillsheader">Skills</a> &nbsp;
      <a href="#expheader">Experience</a> &nbsp; 
      <div class="navlist-right">
      <a href="#portfolioheader">Portfolio</a> &nbsp; 
      <a href="#contactheader">Contact</a> &nbsp; 
      </div>
    </b>
    </div>

    <?php include "socialmedia.php" ?>

    <?php include "intro.php" ?>

    <br>
    </br>
    <br>
    </br>
    <br>
    </br>
    <br>
    </br>
    
    <?php include 'aboutme.php';?>

    <?php include 'skills.php';?>
    
    <?php include 'experience.php';?>

    <?php include 'work.php';?>

    <?php include 'contact.php';?>

</body>

</html>
