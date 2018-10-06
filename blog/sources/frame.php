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
        $file = $root . "/blog/posts/" . $year . '/' . $title . '.md';

        // check if file exists, if not return warning else get content
        if (!file_exists($file)) {
            return 'File "/blog/posts/' . $year . '/' . $title . '.md" does not exist!';
        } else {
            $content = file_get_contents($file);
        }

        // convert markdown to html
        $parsedown = new ParsedownExtra();
        $post = $parsedown->text($content);

        // replace certain 'keywords' with their intended content
        $post = str_replace('<!-- PERMALINKTITLE -->', 'Copy link from URL bar in browser', $post);
        $post = str_replace('<!-- PERMALINK -->', '/blog/posts/individual.php?year=' . $year . '&post=' . $title, $post);

        echo('<article class="blog_post">' . $post . '</article>');
    }

    // This function is needed to add an entry to the database, for categories
    function get_postc($year, $title, $category) {
        global $root;

        // check whether $year and $title are given
        if ($year == null) {
            return 'No year specified';
        }

        if ($title == null) {
            return 'No title specified';
        }

        if ($category == null) {
            return 'No category specified';
        }

        // convert $root, $year and $title to file path
        $file = $root . "/blog/posts/" . $year . '/' . $title . '.md';

        // check if file exists. If not return warning, else get content
        if (!file_exists($file)) {
            return 'File "/blog/posts/' . $year . '/' . $title . '.md" does not exist!';
        } else {
            $content = file_get_contents($file);
        }

        // convert markdown to html
        $parsedown = new ParsedownExtra();
        $post = $parsedown->text($content);

        // replace certain 'keywords' with their intended content
        $post = str_replace('<!-- PERMALINKTITLE -->', 'Copy link from URL bar in browser', $post);
        $post = str_replace('<!-- PERMALINK -->', '/blog/posts/individual.php?year=' . $year . '&post=' . $title, $post);

        echo('<article class="blog_post">' . $post . '</article>');

        /* DATABASE STUFF */
        include($root . '/blog/sources/db_conn.php');

        // construct primary key
        $pk = $year . "/" . $title;

        // escape characters in pk
        $pk = $connect->real_escape_string($pk);

        $query_result = mysqli_query("SELECT * FROM posts WHERE id=$pk");
        $query_result_rows = mysqli_num_rows($query_result);

        if ($query_result_rows > 0) {
            // do nothing
        } else {
            // add entry
            $query_add = "INSERT INTO posts (id, category) VALUES ('$pk', '$category')";

            if ($connect->query($query_add) === TRUE) {
                // do nothing
            } else {
                //echo 'Error: ' . $query_add . '</br>' . $connect->error;
            }
        }
    }
?>