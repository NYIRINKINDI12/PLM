<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coming Soon</title>
<style>
body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    height:100vh;
    display:flex;
}

.left{
    width:50%;
    background:#f5f5f5;
    display:flex;
    justify-content:center;
    align-items:center;
}

.content{
    width:70%;
}

h2{
    font-weight:normal;
}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:1px solid #ddd;
    border-radius:3px;
}

button{
    width:100%;
    padding:10px;
    background:#0A1F44;
    color:white;
    border:none;
    border-radius:3px;
    cursor:pointer;
}

button:hover{
    background:#081733;
}

.right{
    width:50%;
    background:url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee') no-repeat center center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
}

.countdown{
    display:grid;
    grid-template-columns:repeat(2,120px);
    gap:20px;
}

.box{
    border:2px solid white;
    border-radius:50%;
    width:120px;
    height:120px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

.box span{
    font-size:24px;
    font-weight:bold;
}
.back-btn{
    display:inline-block;
    margin-top:25px;
    padding:10px 20px;
    background:#4CAF50;
    color:white;
    text-decoration:none;
    border-radius:4px;
}

.back-btn:hover{
    background:#45a049;
}

:root{
    --main-color:#0A1F44;
    --main-hover:#081733;
}


</style>
</head>
<body>

<div class="left">
    <div class="content">

        <h1 style="font-size:40px; margin-bottom:10px;">COMING SOON</h1>

        <h3 style="letter-spacing:3px; color:#4CAF50;">
            UNDER CONSTRUCTION
        </h3>

        <p style="margin-top:20px; line-height:1.6; color:#555;">
            This page is under construction, but we are ready to go! 
            We are preparing something amazing and exciting for you. 
            Thank you for your patience.
        </p>

        <a href="index.php" class="back-btn">
            ← Back
        </a>

    </div>
</div>
<div class="right">
    <div class="countdown">
        <div class="box"><span id="days"></span><small>DAYS</small></div>
        <div class="box"><span id="hours"></span><small>HOURS</small></div>
        <div class="box"><span id="minutes"></span><small>MINUTES</small></div>
        <div class="box"><span id="seconds"></span><small>SECONDS</small></div>
    </div>
</div>

<script>
var countDownDate = new Date("April 30, 2026 00:00:00").getTime();

var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

  if (distance < 0) {
    clearInterval(x);
    document.querySelector(".countdown").innerHTML = "Website Launched!";
  }
}, 1000);
</script>

</body>
</html>