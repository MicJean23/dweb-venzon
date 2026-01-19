<?php
date_default_timezone_set("Asia/Manila");
$currentDateTime = date("F d, Y | h:i:s A");

$manila = new DateTime("now", new DateTimeZone("Asia/Manila"));
$newyork = new DateTime("now", new DateTimeZone("America/New_York"));
$london = new DateTime("now", new DateTimeZone("Europe/London"));


$nationalHolidays = [
["name" => "Bonifacio Day", "date" => "Novermber 30, 2026", "image" => "img/boni.jpg"],
["name" => "Labor Day", "date" => "September 07, 2026", "image" => "img/labor.jpg"],
["name" => "Independence Day", "date" => "June 12, 2026", "image" => "img/inde.jpg"],
["name" => "New Year's Day", "date" => "January 1, 2026", "image" => "img/newyear.jpg"],
["name" => "Kagitingan Day", "date" => "April 09, 2026", "image" => "img/kagi.jpg"]
];

$localHolidays = [
["name" => "Pampanga Day", "date" => "January 22, 2026", "image" => "img/pampanga.jpg"],
["name" => "Fiestang Kuliat", "date" => "October 13, 2026", "image" => "img/kuli.jpg"],
["name" => "Mt. Pinatubo Day", "date" => "April 2, 2026", "image" => "img/pinatubo.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Philippine Holidays 2026</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* { box-sizing: border-box; margin:0; padding:0; }

body {
font-family: 'Poppins', sans-serif;
background: #fdf6f0;
color: #333;
}


header {
background: #ffd6e0;
padding: 22px 28px;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
align-items: center;
}

header h1 {
font-size: 2rem;
font-weight: 700;
letter-spacing: 1px;
}

.datetime {
font-size: 0.9rem;
opacity: 0.85;
}


.section-title {
text-align: center;
margin: 40px 0 15px;
font-size: 1.8rem;
font-weight: 600;
background: linear-gradient(90deg, #a8edea, #fcd5ce, #fef9c3);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}


.grid {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
gap: 20px;
padding: 20px 24px;
max-width: 1200px;
margin: auto;
}


.card {
position: relative;
background: #fff5f8;
border-radius: 16px;
overflow: hidden;
box-shadow: 0 8px 22px rgba(0,0,0,0.08);
text-align: center;
transition: all 0.3s ease;
}

.card:hover {
transform: translateY(-10px);
box-shadow: 0 18px 35px rgba(0,0,0,0.18);
}

.card img {
width: 100%;
height: 180px;
object-fit: cover;
}

.card h3 {
margin: 16px 0 8px;
font-size: 1.2rem;
font-weight: 600;
}

.card p {
margin-bottom: 20px;
font-size: 0.95rem;
color: #555;
}


.card::before {
content:"";
position: absolute;
top:0; left:0;
width:100%; height:6px;
background: #ffd6e0; /* pastel accent default */
}

/* DIFFERENT COLORS FOR HOLIDAY TYPES */
.national .card::before { background:#a8edea; } /* pastel blue */
.national .card h3 { color:#a8edea; }

.local .card::before { background:#fcd5ce; } /* pastel pink */
.local .card h3 { color:#fcd5ce; }

/* FOOTER */
footer {
background: #ffe7a1; /* pastel yellow */
color: #333;
padding: 28px 20px;
text-align: center;
}

footer .zones {
margin-top: 14px;
font-size: 0.9rem;
line-height: 1.7;
opacity: 0.9;
}

/* RESPONSIVE */
@media(max-width:480px){
header h1 { font-size:1.5rem; }
.section-title { font-size:1.5rem; }
.card img { height:150px; }
}
</style>
</head>

<body>

<header>
<h1>Philippine Holidays 2026</h1>
<div class="datetime">Updated: <?= $currentDateTime ?></div>
</header>

<h2 class="section-title">National Holidays</h2>
<section class="grid national">
<?php foreach ($nationalHolidays as $holiday): ?>
<div class="card">
<img src="<?= $holiday['image'] ?>" alt="<?= $holiday['name'] ?>">
<h3><?= $holiday['name'] ?></h3>
<p><?= $holiday['date'] ?></p>
</div>
<?php endforeach; ?>
</section>

<h2 class="section-title">Local Holidays</h2>
<section class="grid local">
<?php foreach ($localHolidays as $holiday): ?>
<div class="card">
<img src="<?= $holiday['image'] ?>" alt="<?= $holiday['name'] ?>">
<h3><?= $holiday['name'] ?></h3>
<p><?= $holiday['date'] ?></p>
</div>
<?php endforeach; ?>
</section>

<footer>
<p>Current Time Zones</p>
<div class="zones">
Manila: <?= $manila->format("h:i:s A") ?><br>
New York: <?= $newyork->format("h:i:s A") ?><br>
London: <?= $london->format("h:i:s A") ?>
</div>
<p style="margin-top:12px;">Created by: <strong>Venzon, Michaela Jean M.</strong></p>
</footer>

</body>
</html>
