<?php
    // prevent error reporting on this page
    error_reporting(0);

    ob_start(); // start buffer
    
    // get root and parameters from URL
    $root = $_SERVER["DOCUMENT_ROOT"];

    if ($_GET["year"] == !null) {
        $post_year = $_GET["year"];
    } else {
        $post_year = 2018;
    }

    if ($_GET["post"] == !null) {
        $post_name = $_GET["post"];
    } else {
        $post_name = '09-01_september_surprises';
    }

    include($root . '/blog/sources/frame.php');
    include($root . '/blog/sources/db_conn.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $post_id = $post_year . "/" . $post_name;

            $query = "SELECT id,title FROM posts WHERE id='$post_id'";

            $query_result = $connect->query($query);

            $query_result = $query_result->fetch_assoc();

            $page_title = 'Post: ' . $query_result["title"];
            include($root . '/needs/header.php');
        ?>
    </head>
    <body>
        <!-- Manual nav will do for now -->
        <nav class="nav_js" id="responsive_nav">
            <a href="/blog/index.php"><i class="fa fa-caret-left"></i>&nbsp;Blog</a>
        </nav>
        <main>
            <section>
                <?php
                    include($root . '/blog/sources/post_nav.php');

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

    echo $page_content;
?>