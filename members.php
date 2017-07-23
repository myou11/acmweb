<!DOCTYPE html>

<!-- PHP variables -->
<?php $thisPage="members"; ?>
<?php $members = [
        'Alexander Arbuckle', 'Saurav Bhuju', 'Paul Bivrell', 'Walker Brown', 'Kyle De Araujo', 'Jenn Dorcey', 'Rudy Figueroa',
        'Sarah Hultin', 'David Im', 'Josh Keahey', 'Uwe Keist', 'Colton Larson', 'Chris Leydens', 'Mike McCaffrey',
        'Habeeb Mohammed', 'Talis Ozols', 'Elliot Roberts', 'Joseph Salzano', 'Chris Schaffer', 'Benjamin Scott', 'Kelsey Skunberg',
        'Leif Skunberg', 'Mark Smith', 'Asa Staven', 'Kegan Strawn', 'Maxwell You', 'Parker Sullivan', 'Steve Suton', 'Adam Trout', 'Miles Wood'
    ]; ?> <!-- Array for holding member names; add new members as they join -->

<html>

<head>
    <?php include("phpincludes/head.php"); ?>
</head>

<body>
    <?php include("phpincludes/nav.php"); ?>

    <div class="pageContent">
        <section>
            <h1>2016 - 2017</h1>
            <p class="members">
                <?php
                    foreach ($members as $member) {
                        echo "$member<br>";
                    }
                ?>
            </p>
        </section>
    </div>
</body>

</html>
