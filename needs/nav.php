<?php
    // vul variabelen aan met ''
    if (empty($active_home)) $active_home = '';
    if (empty($active_profile)) $active_profile = '';
    if (empty($active_dashboard)) $active_dashboard = '';

    // links
    $nav_link_home = "<a" . $active_home . " href='index.<!-- FILEEXT -->'>Home</a>";
    $nav_link_profile = "<a" . $active_profile . " href='profile.<!-- FILEEXT -->'>Profile</a>";
    $nav_link_dashboard = "<a" . $active_dashboard . " href='dashboard.<!-- FILEEXT -->'>Dashboard</a>";
    
    // plaats nav
    echo '<nav>' . $nav_link_home . $nav_link_profile . $nav_link_dashboard . '</nav>';
?>