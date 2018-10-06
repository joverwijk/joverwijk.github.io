<?php
    ob_start(); // start buffer

    // specificeer hoe dit bestand behandeld moet worden
    header('Content-type: application/xml');

    // functie om XML te genereren
    function generate_entry($page_name) {
        $last_modified = date('c', filemtime($page_name . '.php'));
        $full_url = 'https://www.jarnooverwijk.nl/' . $page_name;

        return "<url>\n<loc>" . $full_url . ".php</loc>\n<lastmod>" . $last_modified . "</lastmod>\n</url>\n";
    }

    echo '<?xml version="1.0" encoding="utf-8" ?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    echo generate_entry('index');
    echo generate_entry('profile');
    echo generate_entry('dashboard');
    echo generate_entry('experiment');
    echo generate_entry('motivation');
    echo generate_entry('job_image');
    echo generate_entry('tasks/index');
    echo generate_entry('tasks/programming_basics/index');
    echo generate_entry('tasks/computer_science_basics/index');
    echo generate_entry('blog/index');
    echo '</urlset>';

    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    echo $page_content;
?>