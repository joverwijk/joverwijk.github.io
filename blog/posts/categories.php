<?php
    // prevent error reporting on this page
    error_reporting(0);

    ob_start(); // start buffer
    
    // get root and parameters from URL
    $root = $_SERVER["DOCUMENT_ROOT"];

    $category = $_GET["category"];

    include($root . '/blog/sources/frame.php');
    include($root . '/blog/sources/db_conn.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Category: ' . ucfirst($category);
            include($root . '/needs/header.php');
        ?>
    </head>
    <body>
        <!-- Manual nav will do for now -->
        <nav class="nav_js" id="responsive_nav">
            <a href="/blog/"><i class="fa fa-caret-left"></i>&nbsp;Blog</a>
        </nav>
        <main>
            <section>
                <?php
                    echo '<h1> Category: ' . ucfirst($category) . '</h1>';
                    include($root . '/blog/sources/post_nav.php');

                    $query = "SELECT * FROM posts WHERE category='$category' ORDER BY id DESC";
                    $query_result = $connect->query($query);

                    if ($query_result->num_rows > 0) {
                        // show all posts beloning to that category
                        while ($post = $query_result->fetch_assoc()) {
                            
                            // split id up in year and title
                            list($post_year, $post_title) = explode("/", $post["id"]);
                            get_post($post_year, $post_title);
                        }
                    }
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