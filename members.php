<!DOCTYPE html>

<!-- PHP variables -->
<?php $thisPage="members"; ?>
<!-- Array for holding member names; add new members as they join -->
<?php $members = [
      	'Joseph Salzano', 'Saurav Bhuju', 'Mark Smith', 'Uwe Keist', 'Adam Trout', 'Steve Sutton', 'Walker Brown', 'Kyle de Araujo', 'Benjamin Scott',
	'Parker Sullivan', 'Miles Wood', 'David Im', 'Talis Ozols', 'Chris Leydens', 'Elliot Roberts', 'Josh Keahey', 'Colton Larson', 'Filip Lewulis',
	'Griffin Gilbert', 'Trent Bitterman', 'Jeremy Runyan', 'Heejun Byeon', 'Matthew Paczosa', 'Nathan Kozakis', 'Jonathan Griego', 'Alex Schwebke',
	'Athith Amarnath', 'Sarah Hultin', 'Kevin Bruhwiler', 'Paul Bivrell', 'Kegan Strawn', 'Muhammad Rayan Ahmad', 'Ryann Yount', 'Sean Thunquest',
	'Casey Gessaman', 'Tyeler Fields', 'Griffin Gilbert', 'Gabriel Vigil', 'David Hallstrom', 'Badr-ud-Din A Hashmi', 'Kai Yearling', 'Yaobing Ni',
	'Joshua Burris', 'Evan Steiner', 'Dylan Plomondon', 'Evan Luebbert', 'Kevin Alamo-Perez', 'Jason Stock', 'Alex Undy', 'Nicolas Pagan',
	'Michael Chaney', 'Rylie Denehan', 'Leif Skunberg', 'Kelsey Skunberg', 'Maxwell You'
    ];
?>

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
