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
                Learn Git!
            </div>
            <div class="info">
                <p>
                    Connor Shea, a developer at GitLab, will present a lesson on how to use version control to save your life!
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>09/06/2017</span>
                </span>
                <span class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>6:00 pm</span>
                </span>
                <span class="location">
                    <i class="fa fa-map-marker"></i>
                    <span>CSB 130</span>
                </span>
            </div>
        </div>

        <div class="event past">
            <div class="title">
                Success in CS!
            </div>
            <div class="info">
                <p>
                    Learn tips, tricks, and get advice from current officers + free pizza!
                </p>
                <p>
                    Also, an introduction to our side project initiative and what we are doing this semester.
                </p>
                <p>
                    <a href="https://docs.google.com/presentation/d/1TvjkWVUtnd8MnmRlurN72M8CPgMVR6g_lyMI9KGjcKw/edit?usp=sharing">
                        Link to presentation
                    </a>
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>08/30/2017</span>
                </span>
                <span class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>6:00 pm</span>
                </span>
                <span class="location">
                    <i class="fa fa-map-marker"></i>
                    <span>CSB 130</span>
                </span>
            </div>
        </div>

        <div class="event past">
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
                    <span>5:00 - 8:00 pm</span>
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
