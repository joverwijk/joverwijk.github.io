<?php
    ob_start(); // start buffer

    $root = $_SERVER["DOCUMENT_ROOT"];

    include($root . '/blog/sources/frame.php');
    include($root . '/blog/sources/db_conn.php');
?>
<!DOCTYPE html>
    <html>
    <head>
        <?php
            $page_title = 'Blog';
            include($root . '/needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $nav_link_active = 'blog';
            include($root . '/needs/nav.php');
        ?>
        <main>
            <section>
                <h1>
                    Blog
                </h1>
                <p>
                    So... Apparantly I  made a blog. Fun stuff, right? Anyway, I'll let
                    you alone now. Have fun reading!
                </p>
                <p>
                    Note: Be aware of some wild speculation when reading. This is simply me thinking
                    out loud, don't put any value to that. Unless you're one of <i>those</i>
                    persons.
                </p>
                <?php
                    include($root . '/blog/sources/db_conn.php');
                    include($root . '/blog/sources/post_nav.php');

                    // "Post feed"
                    // query: selects column id from posts table, orders descending and limits result to 10
                    $query = "SELECT id FROM posts ORDER BY id DESC LIMIT 10";
                    $query_result = $connect->query($query);

                    if ($query_result->num_rows > 0) {
                        // show posts gotten
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