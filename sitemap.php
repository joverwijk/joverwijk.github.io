<?php
    ob_start(); // start buffer

    // specificeer hoe dit bestand behandeld moet worden
    header('Content-type: application/xml');

    // functie om XML te genereren
    function generate_entry($page_name) {
        $last_modified = date('c', filemtime($page_name . '.php'));
        $url = 'http://foobar.dev/';

        return "<url>\n<loc>" . $url . $page_name . ".php</loc>\n<lastmod>" . $last_modified . "</lastmod>\n</url>\n";
    }

    echo '<?xml version="1.0" encoding="utf-8" ?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    echo generate_entry('index');
    echo generate_entry('profile');
    echo generate_entry('dashboard');
    echo generate_entry('experiment');
    echo '</urlset>';

    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    echo $page_content;

    // voor GitHub
    $github_url = str_replace('http://foobar.dev/', 'https://joverwijk.github.io/', $page_content);
    $github_page_content = str_replace('.php', '.html', $github_url);
    // sla inhoud vervolgens op in een XML
    file_put_contents('sitemap.xml', $github_page_content);
?>