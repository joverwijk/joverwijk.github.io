<?php
    $root = $_SERVER["DOCUMENT_ROOT"];

    require($root . "/blog/sources/parsedown/Parsedown.php");
    require($root . "/blog/sources/parsedown-extra/ParsedownExtra.php");

    function get_post($year, $title) {
        global $root;

        $post_year_title = $year . "/" . $title;

        // check whether $year and $title are given
        if ($year == null) {
            return 'No year specified';
        }

        if ($title == null) {
            return 'No title specified';
        }

        // convert $root, $year and $title to file path
        $file = $root . "/blog/posts/years/" . $year . '/' . $title . '.md';

        // check if file exists, if not return warning else get content
        if (!file_exists($file)) {
            return 'File "/blog/posts/years/' . $year . '/' . $title . '.md" does not exist!';
        } else {
            $content = file_get_contents($file);
        }

        // convert markdown to html
        $parsedown = new ParsedownExtra();
        $post = $parsedown->text($content);

        // find categories
        preg_match('/<!-- CATEGORYTITLE -->\">(?P<category>[a-zA-Z\- ]+)/', $post, $category);

        $cat = preg_replace("/ +/", "_", $category["category"]);

        // replace certain 'keywords' with their intended content
        $post = str_replace('<!-- PERMALINKTITLE -->', 'Copy link from URL bar in browser', $post);
        $post = str_replace('<!-- PERMALINK -->', '/blog/posts/' . $year . '/' . $title . '/', $post);
        
        $post = str_replace('<!-- CATEGORYLINK -->', '/blog/posts/category/' . strtolower($cat) . '/', $post);
        $post = str_replace('<!-- CATEGORYTITLE -->', 'Category: ' . $cat, $post);

        echo('<article class="blog_post">' . $post . '</article>');
    }
?>