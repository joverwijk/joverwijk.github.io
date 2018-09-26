<?php
    // standaardwaarde variabelen
    $active_home = '';
    $active_profile = '';
    $active_dashboard = '';
    $active_experiment = '';
    $active_motivation = '';
    $active_job_image = '';
    $active_tasks = ' class="dropdown"';
    $active_blog = '';

    // standaardwaarde variabelen dropdown
    $active_programming_basics = '';
    $active_computer_science_basics = '';

    // standaardklasse
    $class_active = ' class="active"';

    // bepaal welke variabele actief moet zijn
    if ($nav_link_active == 'home') {
        $active_home = $class_active;
    } elseif ($nav_link_active == 'profile') {
        $active_profile = $class_active;
    } elseif ($nav_link_active == 'dashboard') {
        $active_dashboard = $class_active;
    } elseif ($nav_link_active == 'experiment') {
        $active_experiment = $class_active;
    } elseif ($nav_link_active == 'motivation') {
        $active_motivation = $class_active;
    } elseif ($nav_link_active == 'job_image') {
        $active_job_image = $class_active;
    } elseif ($nav_link_active == 'tasks') {
        $active_tasks = $class_active;
    } elseif ($nav_link_active == 'blog') {
        $active_blog = $class_active;
    }

    // bepaal, van de dropdownlinks, welke er actief moet zijn
    if ($nav_link_active == 'programming_basics') {
        $active_programming_basics = $class_active;
    } elseif ($nav_link_active == 'computer_science_basics') {
        $active_computer_science_basics = $class_active;
    }

    // dropdownlinks
    $tasks_programming_basics = '<a ' . $active_programming_basics . " href='<!-- FOLDER -->/tasks/programming_basics/index.<!-- FILEEXT -->'>Programming Basics</a>\n";
    $tasks_computer_science_basics = '<a ' . $active_computer_science_basics . " href='<!-- FOLDER -->/tasks/computer_science_basics/index.<!-- FILEEXT -->'>Computer Science Basics</a>\n";

    // dropdown
    $tasks_dropdown = "<div class='dropdown_content'>" . $tasks_programming_basics . $tasks_computer_science_basics . "</div>\n";

    // links
    $nav_link_home = "<a" . $active_home . " href='<!-- FOLDER -->/index.<!-- FILEEXT -->'>Home</a>\n";
    $nav_link_profile = "<a" . $active_profile . " href='<!-- FOLDER -->/profile.<!-- FILEEXT -->'>Over mij</a>\n";
    $nav_link_dashboard = "<a" . $active_dashboard . " href='<!-- FOLDER -->/dashboard.<!-- FILEEXT -->'>Dashboard</a>\n";
    $nav_link_experiment = "<a" . $active_experiment . " href='<!-- FOLDER -->/experiment.<!-- FILEEXT -->'>Experimenten</a>\n";
    $nav_link_motivation = "<a" . $active_motivation . " href='<!-- FOLDER -->/motivation.<!-- FILEEXT -->'>Motivatie</a>\n";
    $nav_link_job_image = "<a" . $active_job_image . " href='<!-- FOLDER -->/job_image.<!-- FILEEXT -->'>Beroepsbeeld</a>\n";
    $nav_link_tasks = "<div class='dropdown'>\n<a" . $active_tasks . " href='<!-- FOLDER -->/tasks/index.<!-- FILEEXT -->'>Opdrachten&nbsp;<i class='fa fa-caret-down'></i></a>\n" . $tasks_dropdown . "\n</div>\n";
    $nav_link_blog = "<a" . $active_blog . " href='<!-- FOLDER -->/blog/index.<!-- FILEEXT -->'>Blog</a>\n";

    // responsief
    $nav_responsive = '<a href="javascript:void(0);" class="nav_icon" onclick="show_nav_dropdown()"><i class="fa fa-bars"></i></a>';
    
    // plaats nav (nav_js is nodig voor JavaScript)
    echo '<nav class="nav_js" id="responsive_nav">' . $nav_link_home . $nav_link_profile . $nav_link_dashboard . $nav_link_motivation .
        $nav_link_job_image . $nav_link_tasks . $nav_link_blog . $nav_link_experiment . $nav_responsive . "</nav>\n";
?>