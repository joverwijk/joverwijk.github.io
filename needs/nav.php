<?php
    // standaardwaarde variabelen
    $active_home = '';
    $active_profile = '';
    $active_dashboard = '';
    $active_experiment = '';
    $active_motivation = '';

    // bepaal welke variabele actief moet zijn
    if ($nav_link_active == 'home') {
        $active_home = ' class="active"';
    } elseif ($nav_link_active == 'profile') {
        $active_profile = ' class="active"';
    } elseif ($nav_link_active == 'dashboard') {
        $active_dashboard = ' class="active"';
    } elseif ($nav_link_active == 'experiment') {
        $active_experiment = ' class="active"';
    } elseif ($nav_link_active == 'motivation') {
        $active_motivation = ' class="active"';
    }

    // links
    $nav_link_home = "<a" . $active_home . " href='index.<!-- FILEEXT -->'>Home</a>\n";
    $nav_link_profile = "<a" . $active_profile . " href='profile.<!-- FILEEXT -->'>Over mij</a>\n";
    $nav_link_dashboard = "<a" . $active_dashboard . " href='dashboard.<!-- FILEEXT -->'>Dashboard</a>\n";
    $nav_link_experiment = "<a" . $active_experiment . " href='experiment.<!-- FILEEXT -->'>Experimenten</a>\n";
    $nav_link_motivation = "<a" . $active_motivation . " href='motivation.<!-- FILEEXT -->'>Motivatie</a>\n";

    // responsief
    $nav_responsive = '<a href="javascript:void(0);" class="nav_icon" onclick="show_nav_dropdown()"><i class="fa fa-bars"></i></a>';
    
    // plaats nav (nav_js is nodig voor JavaScript)
    echo '<nav class="nav_js" id="responsive_nav">' . $nav_link_home . $nav_link_profile . $nav_link_dashboard . $nav_link_motivation . $nav_link_experiment . $nav_responsive . "</nav>\n";

    // TODO: zet om tot een functie i.p.v. allemaal handmatig te bepalen.
?>