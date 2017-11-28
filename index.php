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
        <!-- uncomment below if a meeting is cancelled -->
        <!--<div>
            <h2 style="color:#e23434;text-align:center;">NO ACM MEETING TONIGHT (CANCELLED XX/XX)</h2>
        </div>-->
        <div class="event">
            <div class="title">
                Consider a Graduate Degree in Computer Science at Colorado State University
            </div>
            <div class="info">
                <p>
                    Are you an undergraduate CS major within two years of graduating and wonder what graduate school has to offer? Please attend to have your questions answered.
                </p>
                <p>
                    <span class="underline">Why graduate school?</span>
                    <br>
                    Dr. Sanjay Rajopadhye
                </p>
                <p>
                    <span class="underline">Sample of current research</span>
                    <br>
                    Dr. Laura Moreno
                    <br>
                    Dr. Lorenzo De Carli
                    <br>
                    Dr. Hamid Chitsaz
                    <br>
                    Dr. Sangmi Pallickara
                </p>
                <p>
                    <span class="underline">Experiences of current graduate students</span>
                    <br>
                    Elliot Forney
                    <br>
                    David White
                    <br>
                    Steve Kommrusch
                    <br>
                    Tomojit Ghosh
                </p>
                <p>
                    <span class="underline">Questions and Answers</span>
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>11/29/2017</span>
                </span>
                <span class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>6:00 - 8:00 pm</span>
                </span>
                <span class="location">
                    <i class="fa fa-map-marker"></i>
                    <span>CSB 130</span>
                </span>
            </div>
        </div>

        <div class="event past">
            <div class="title">
                No meeting
            </div>
            <div class="info">
                <p>
                    Fall break.
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>11/22/2017</span>
                </span>
            </div>
        </div>

        <div class="event past">
            <div class="title">
                Representation Development for Faster Deep Reinforcement Learning <span class="host">(Prof. Chuck Anderson)</span>
            </div>
            <div class="info">
                <p>
                    Presenting on his work in reinforcement learning, which (for an example) is the machine learning approach used in the recent AlphaGo result where a computer learned to play Go.
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>11/15/2017</span>
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

        <div class="event icpc past">
            <div class="title">
                Good Luck to our ICPC teams!
            </div>
            <div class="info">
                <p>
                    Our ICPC teams are competing other teams in the <a href="http://org.coloradomesa.edu/~wmacevoy/rmrc/2017/">Rocky Mountain Regional Contest</a>!
                    Winners will advance to the ACM-ICPC World Finals!
                </p>
                <img src="acmImages/icpc_team1.jpg">
                <img src="acmImages/icpc_team2.jpg">
                <img src="acmImages/icpc_team3.jpg">
                <img src="acmImages/icpc_team4.jpg">
            </div>
        </div>

        <div class="event past">
            <div class="title">
                "ACM Meeting"
            </div>
            <div class="info">
                <p>
                    Join us to talk about your side-project, an idea for a project you would like to work on, research you are doing, or an idea for a project you would like to work on.
                </p>
                <p>
                    Join us to get on a team to work on a side-project or create your own.
                </p>
                <p>
                    Join us to ask ACM officers any questions you may have or give any suggestions you might have for us.
                </p>
                <p>
                    Join us to hear our plan for the rest of the semester as well as be involved in our scheduling for next semester.
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>11/08/2017</span>
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
                Mock Interviews <span class="host">(Seagate)</span>
            </div>
            <div class="info">
                <p>
                    Find out what technical interviews are like! Three developers from Seagate will be here to help you refine your interviewing skills.
                    <br>
                    An email will be sent out for people to register for interviews.
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>11/01/2017</span>
                </span>
                <span class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>5:00 - 8:00 pm</span>
                </span>
                <span class="location">
                    <i class="fa fa-map-marker"></i>
                    <span>Reserved library rooms</span>
                </span>
            </div>
        </div>

        <div class="event past">
            <div class="title">
                ACM Hangout
            </div>
            <div class="info">
                <p>
                    No official event this week. Come eat pizza, do homework, or chill with us.
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>10/25/2017</span>
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
                ACM Chapter Coding Competition
            </div>
            <div class="info">
                <p>
                    Come win a Raspberry Pi!
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>10/18/2017</span>
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
                No meeting / ICPC Team Creation Event
            </div>
            <div class="info">
                <p>
                    Mid-semester ACM break.
                </p>
                <p>
                    Although there is no official meeting, we will be having a small ICPC team creation event for those interested in participating.
                    Come create or join a team and potentially practice some problems! This will happen at the usual time and place.
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>10/11/2017</span>
                </span>
            </div>
        </div>

        <div class="event past">
            <div class="title">
                Hacking all the things <span class="host">(Talis Ozols)</span>
            </div>
            <div class="info">
                <p>
                    How to break in to intentionally vulerable virtual machines.
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>10/04/2017</span>
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
                ACM-ICPC
            </div>
            <div class="info">
                <p>
                    Learn what ACM-ICPC is about, join a team, and get ready to head to ICPC with ACM this October!
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>09/27/2017</span>
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
                Amazon
            </div>
            <div class="info">
                <p>
                    Hosting engineers from Amazon with ACM-W.
                </p>
                <p>
                    Amazon 'open house'
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>09/19/2017</span>
                </span>
                <span class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>2:00 - 4:00 pm</span>
                </span>
                <span class="location">
                    <i class="fa fa-map-marker"></i>
                    <span>CSB Lobby</span>
                </span>
            </div>
            <div class="info">
                <p>
                    Presentation / tech talk to students
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>09/19/2017</span>
                </span>
                <span class="time">
                    <i class="fa fa-clock-o"></i>
                    <span>5:00 - 7:00 pm</span>
                </span>
                <span class="location">
                    <i class="fa fa-map-marker"></i>
                    <span>CSB 130</span>
                </span>
            </div>
        </div>

        <div class="event past">
            <div class="title">
                Is your AI Assistant Paying you Proper Attention? <span class="host">(Profs. Ross Beveridge & Bruce Draper)</span>
            </div>
            <div class="info">
                <p>
                    This talk will review recent accomplishments from joint work being carried out by CSU, The University of Florida and Brandeis University.  The work highlights the importance of agents, i..e artificially intelligent assistants, using all available senses to share a common view of our surroundings and shared tasks. This most particularly means paying  attention not just what  we are saying, but how we are saying it as expressed through tone and facial expressions, what we are looking at and finally how we may be using our bodies to communicate.  Recent findings in both human studies and machine-human interaction experiments will show that when solving physical problems in the world gestures play a critical role.  Specifically, the time required by people to jointly build a structure out of blocks under the following conditions is roughly the same.  Condition 1 has each person able to see the other but they cannon speak.  Condition 2 has each person able to hear the other but they cannot use gestures. These findings underscore the importance of agents doing more than just listening and speaking.
                </p>
            </div>
            <div class="details">
                <span class="date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <span>09/13/2017</span>
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
