<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/onmatch.css">
    <link rel="icon" type="image/png" href="../images/football.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ongoing</title>
</head>
<body>

<header class="header">
    <p><a href="home.php">All Football</a></p>
    <nav>
        <ul>
            <li><a href="#">Matches</a></li>
            <li><a href="#">Teams</a></li>
            <li><a href="#">Competitions</a></li>
            <li><a href="#">Extra</a></li>
        </ul>
        <div class="reg">
            <ul>
                <li><a href="#"><i class="fa fa-fw fa-search"></i></a></li>
                <li><a href="#"><i class="fa fa-user"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
<p>Ongoing Matches</p>
<div class="uplink"><a href="upmatch.php">Upcoming Matches</a></div>
<div class="content">

    <div class="match-box">
        <div class="team">
            <img src="../images/Barca.png" alt="">
            <span>Barcelona</span>
        </div>
        <div class="vs">2</div>
        <div class="vs">1</div>
        <div class="team">
            <img src="../images/madrid.png" alt="">
            <span>Real Madrid</span>
        </div>
        <div class="live-time">30:00</div>
    </div>

    <div class="match-box">
        <div class="team">
            <img src="../images/Barca.png" alt="">
            <span>Barcelona</span>
        </div>
        <div class="vs">2</div>
        <div class="vs">1</div>
        <div class="team">
            <img src="../images/madrid.png" alt="">
            <span>Real Madrid</span>
        </div>
        <div class="live-time">30:00</div>
    </div>

    <div class="match-box">
        <div class="team">
            <img src="../images/Barca.png" alt="">
            <span>Barcelona</span>
        </div>
        <div class="vs">2</div>
        <div class="vs">1</div>
        <div class="team">
            <img src="../images/madrid.png" alt="">
            <span>Real Madrid</span>
        </div>
        <div class="live-time">30:00</div>
    </div>

    <div class="match-box">
        <div class="team">
            <img src="../images/Barca.png" alt="">
            <span>Barcelona</span>
        </div>
        <div class="vs">2</div>
        <div class="vs">1</div>
        <div class="team">
            <img src="../images/madrid.png" alt="">
            <span>Real Madrid</span>
        </div>
        <div class="live-time">30:00</div>
    </div>

    <div class="match-box">
        <div class="team">
            <img src="../images/Barca.png" alt="">
            <span>Barcelona</span>
        </div>
        <div class="vs">2</div>
        <div class="vs">1</div>
        <div class="team">
            <img src="../images/madrid.png" alt="">
            <span>Real Madrid</span>
        </div>
        <div class="live-time">30:00</div>
    </div>

    <div class="match-box">
        <div class="team">
            <img src="../images/Barca.png" alt="">
            <span>Barcelona</span>
        </div>
        <div class="vs">2</div>
        <div class="vs">1</div>
        <div class="team">
            <img src="../images/madrid.png" alt="">
            <span>Real Madrid</span>
        </div>
        <div class="live-time">30:00</div>
    </div>

    

</div>

<script>
    
    function updateLiveTime() {
        const matchBoxes = document.querySelectorAll(".match-box");

        matchBoxes.forEach((matchBox) => {
            const liveTimeElement = matchBox.querySelector(".live-time");
            const currentTime = new Date(); // Get the current time
            const hours = currentTime.getHours().toString().padStart(2, "0");
            const minutes = currentTime.getMinutes().toString().padStart(2, "0");
            const liveTime = `${hours}:${minutes}`;
            liveTimeElement.textContent = `Live Time: ${liveTime}`;
        });
    }

    // Update the live time every minute
    setInterval(updateLiveTime, 60000); // 60000 milliseconds = 1 minute
</script>

</body>
</html>
