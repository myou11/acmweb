<div id="nav">
    <ul>
        <li <?php if ($thisPage=="home")
        echo "id=\"currentPage\""; ?>>
            <a href="index.php">
                Home
            </a>
        </li>
        <li <?php if ($thisPage=="future")
        echo "id=\"currentPage\""; ?>>
            <a href="future.php">
                Future
            </a>
        </li>
        <li <?php if ($thisPage=="about")
        echo "id=\"currentPage\""; ?>>
            <a href="about.php">
                About
            </a>
        </li>
        <li <?php if ($thisPage=="contact")
        echo "id=\"currentPage\""; ?>>
            <a href="contact.php">
                Contact
            </a>
        </li>
        <li <?php if($thisPage=="officers")
        echo "id=\"currentPage\""; ?>>
            <a href="officers.php">
                Officers
            </a>
        </li>
        <li <?php if($thisPage=="members")
        echo "id=\"currentPage\""; ?>>
            <a href="members.php">
                Members
            </a>
        </li>
        <li <?php if($thisPage=="projects")
        echo "id=\"currentPage\""; ?>>
            <a href="projects.php">
                Projects
            </a>
        </li>
        <li <?php if($thisPage=="history")
        echo "id=\"currentPage\""; ?>>
            <a href="history.php">
                History
            </a>
        </li>
        <li <?php if($thisPage=="pollsForms")
        echo "id=\"currentPage\""; ?>>
            <a href="pollsForms.php">
                Polls/Forms
            </a>
        </li>
        <li>
            <a href="http://www.cs.colostate.edu/~acm-w/">ACM-W</a>
        </li>
    </ul>
</div>
