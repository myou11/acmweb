<nav>
    <div class="logo">
        <a href="https://www.cs.colostate.edu/cstop/">
            <img src="acmImages/ramLogo.png">
        </a>
    </div>
    <div class="title">
        <h1>CSU ACM</h1>
        <h4>Association for Computing Machinery</h4>
    </div>
    <div class="links">
        <a href="index.php" <?php if ($thisPage=="home")
        echo "id=\"currentPage\""; ?>>
            home
        </a>
        <a href="future.php" <?php if ($thisPage=="future")
        echo "id=\"currentPage\""; ?>>
            future
        </a>
        <a href="about.php" <?php if ($thisPage=="about")
        echo "id=\"currentPage\""; ?>>
            about
        </a>
        <a href="contact.php" <?php if ($thisPage=="contact")
        echo "id=\"currentPage\""; ?>>
            contact
        </a>
        <a href="officers.php" <?php if($thisPage=="officers")
        echo "id=\"currentPage\""; ?>>
            officers
        </a>
        <a href="members.php" <?php if($thisPage=="members")
        echo "id=\"currentPage\""; ?>>
            members
        </a>
        <a href="projects.php" <?php if($thisPage=="projects")
        echo "id=\"currentPage\""; ?>>
            projects
        </a>
        <a href="history.php" <?php if($thisPage=="history")
        echo "id=\"currentPage\""; ?>>
            history
        </a>
        <a href="pollsForms.php" <?php if($thisPage=="pollsForms")
        echo "id=\"currentPage\""; ?>>
            polls/forms
        </a>
        <a href="http://www.cs.colostate.edu/~acm-w/">ACM-W</a>
    </div>
    <div class="social">
        <!-- Need to have the 'https://www.' in the link so it knows you it is a URL and not a file on the computer -->
        <a href="https://www.facebook.com/groups/ColoStateACM" target="_blank" class="fa fa-facebook"></a>
        <a href="https://www.twitter.com/ColoStateACM" class="fa fa-twitter"></a>
        <a href="https://www.linkedin.com/groups/12052753" class="fa fa-linkedin"></a>
    </div>
</nav>
