<?php
    // prevent error reporting on this page
    error_reporting(0);

    ob_start(); // start buffer
    
    // get root and parameters from URL
    $root = $_SERVER["DOCUMENT_ROOT"];

    if ($_GET["year"] == !null) {
        $post_year = $_GET["year"];
    } else {
        $post_year = 0;
    }

    if ($_GET["post"] == !null) {
        $post_name = $_GET["post"];
    } else {
        $post_name = 'index';
    }

    include($root . '/blog/sources/frame.php');
    include($root . '/blog/posts/post_list.php'); // returns 'post_name_formatted'
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Post: ' . $post_name_formatted;
            include($root . '/needs/header.php');
        ?>
    </head>
    <body>
        <!-- Manual nav will do for now -->
        <nav class="nav_js" id="responsive_nav">
            <a href="<!-- FOLDER -->/blog/index.<!-- FILEEXT -->"><i class="fa fa-caret-left"></i>&nbsp;Blog</a>
        </nav>
        <main>
            <section>
                <?php
                    get_post($post_year, $post_name);
                ?>
                <p class="small_right">
                    Blog created using <a href="http://parsedown.org/" title="Parsedown">Parsedown</a>.
                </p>
                <?php include($root . '/needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // save content as $page_content and empty buffer
    $page_content = ob_get_clean();

    // replace keywords with their actual content

    // postprocessing
    include($root . '/needs/postprocessing.php');

    // extra postprocessing for GitHub
    $github_page_content = str_replace('/blog/posts/individual.php?year=', '/html/blog/posts/', $github_page_content);
    $github_page_content = str_replace('&amp;post=', '_', $github_page_content);
    $github_page_content = str_replace('&post=', '_', $github_page_content);
    $github_page_content = str_replace('<!-- HTMLEXT -->', '.html', $github_page_content);

    // save content as HTML for GitHub
    file_put_contents($root . '/html/blog/posts/' . $post_year . '_' . $post_name . '.html', $github_page_content);
?>