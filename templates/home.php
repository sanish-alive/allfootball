<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: signin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="icon" type="image/png" href="../images/football.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>index</title>
</head>

<body>
    <header>
        <p><a href="home.php">All Football</a></p>
        <nav>
            <ul>
                <li><a href="onmatch.php">Matches</a></li>
                <li><a href="#">Teams</a></li>
                <li><a href="#">Competitions</a></li>
                <li><a href="#">Extra</a></li>
            </ul>
            <div class="reg">
                <ul>
                    <li><a href="#"><i class="fa fa-fw fa-search"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>

   
    <div class="TopNew-container">
        <h1>Top News</h1>
        <div class="TopN1">
            <a href="">
                <div class="image1">
                    <img src="../images/messinter.png" />
                </div>
                <div class="righttopN1">
                    <p>Inter Miami chief soccer officer and sporting director Chris Henderson said that “terms are agreed”
                        between the club and Argentinian forward Lionel Messi. Earlier this month, in an interview posted
                        by Spanish outlets SPORT and Mundo Deportivo, Messi announced his decision to leave Paris Saint-Germain
                        (PSG) for Major League Soccer (MLS). At the time, the 36-year-old said that the deal wasn’t completed
                        “one hundred percent,” and on Thursday Henderson provided an update on the transfer.</p>
                </div>
            </a>
        </div>
    </div>

    <div class="news2-container">
        <div class="first">
            <div class="image">
                <a href="">
                    <img src="../images/joaoo.jpg">
                    <p>Transfer Gossip: PSG wants Joao Felix but there's trouble at Madrid</p>
                </a>
            </div>

            <div class="image">
                <a href="">
                    <img src="../images/second.jpg">
                    <p>Transfer Gossip: PSG wants Joao Felix but there's trouble at Madrid</p>
                </a>
            </div>

            <div class="image">
                <a href="">
                    <img src="../images/third.jpg">
                    <p>Transfer Gossip: PSG wants Joao Felix but there's trouble at Madrid</p>
                </a>
            </div>

            <div class="image">
                <a href="">
                    <img src="../images/fourth.jpg">
                    <p>Transfer Gossip: PSG wants Joao Felix but there's trouble at Madrid</p>
                </a>
            </div>
        </div>
    </div>

    <div class="news3-container">
        <div class="second">
            <div class="image2">
                <a href="">
                    <img src="../images/3rd-img1.jpg" alt="Image 1">
                    <p>David de Gea could be reunited with former Manchester United teammate Cristiano Ronaldo at Al Nassr.</p>
                </a>
            </div>

            <div class="image2">
                <a href="">
                    <img src="../images/3rd-img2.jpg" alt="Image 2">
                    <p>David de Gea could be reunited with former Manchester United teammate Cristiano Ronaldo at Al Nassr.</p>
                </a>
            </div>
        </div>
    </div>

    <div class="TopTransfer-container">
        <h1>Transfer Talk</h1>
        <div class="news4-container">
            <a href="">
                <div class="image3">
                    <img src="../images/transfer1.jpg" />
                </div>
                <div class="rightnews4">
                    <p>Inter Miami chief soccer officer and sporting director Chris Henderson said that “terms are agreed”
                        between the club and Argentinian forward Lionel Messi. Earlier this month, in an interview posted
                        by Spanish outlets SPORT and Mundo Deportivo, Messi announced his decision to leave Paris Saint-Germain
                        (PSG) for Major League Soccer (MLS). At the time, the 36-year-old said that the deal wasn’t completed
                        “one hundred percent,” and on Thursday Henderson provided an update on the transfer.</p>
                </div>
            </a>
        </div>

        <div class="news2-container">
            <div class="first">
                <div class="image">
                    <a href="">
                        <img src="../images/t1.jpg">
                        <p>Barcelona President Joan Laporta lowers expectations for Sergio Busquets replacement</p>
                    </a>
                </div>

                <div class="image">
                    <a href="">
                        <img src="../images/t2.jpg">
                        <p>Inter set for meeting with Chelsea for Romelu Lukaku</p>
                    </a>
                </div>

                <div class="image">
                    <a href="">
                        <img src="../images/t3.jpg">
                        <p>Chelsea exodus: Ten more players in line for summer exit</p>
                    </a>
                </div>

                <div class="image">
                    <a href="">
                        <img src="../images/t4.jpg">
                        <p>Rasmus Hojlund: Manchester United prepare new bid for Atalanta striker</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
