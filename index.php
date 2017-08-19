<!DOCTYPE html>

<!-- PHP variables -->
<?php $thisPage="home"; ?>

<html>

<head>
    <?php include("phpincludes/head.php"); ?>
</head>

<body>
    <!-- Navigation -->
    <?php include("phpincludes/nav.php"); ?>

    <div class="pageContent">
        <div class="event">
            <div class="title">
                ACM Welcome with ACM-W
            </div>
            <div class="info">
                <p>
					Learn about ACM, what ACM has planned, and grab some pizza and play some card/board games.
					<br>
					(This is a Thursday, ACM-W meeting)
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>8/24/2017</span>
                </span>
                <span class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>5:00 - 8:00 PM</span>
                </span>
                <span class="location">
                    <i class="fa fa-map-marker"></i>
                    <span>Pinon Hall 131</span>
                </span>
            </div>
        </div>
    </div>

</body>

</html>
