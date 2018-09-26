<?php
    $root = $_SERVER["DOCUMENT_ROOT"];

    require($root . "/blog/sources/parsedown/Parsedown.php");
    require($root . "/blog/sources/parsedown-extra/ParsedownExtra.php");

    function get_post($year, $title) {
        global $root;

        // check whether $year and $title are given
        if ($year == null) {
            return 'No year specified';
        }

        if ($title == null) {
            return 'No title specified';
        }

        // convert $root, $year and $title to file path
        $file = $root . "\/blog\/" . $year . '/' . $title . '.md';

        // check if file exists, else return warning
        if (!file_exists($file)) {
            return 'File "/blog/' . $year . '/' . $title . '.md" does not exist!';
        }

        // get content of markdown file
        $content = file_get_contents($file);

        // convert markdown to html
        $parsedown = new ParsedownExtra();
        $post = $parsedown->text($content);

        echo('<article class="blog_post">' . $post . '</article>');
    }
?>