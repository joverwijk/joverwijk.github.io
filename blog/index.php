<?php
    ob_start(); // start buffer

    $root = $_SERVER["DOCUMENT_ROOT"];

    include($root . '/blog/sources/frame.php');
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
                    // POSTS (naming: <month-id>_<name>)
                    get_post(2018, '09-02_why');
                    get_post(2018, '09-01_september_surprises');
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

    // postprocessing
    include($root . '/needs/postprocessing.php');

    // replace all PHP URLs
    $github_page_content = str_replace('/blog/posts/individual.php?year=', '/html/blog/posts/', $github_page_content);
    $github_page_content = str_replace('&amp;post=', '_', $github_page_content);
    $github_page_content = str_replace('&post=', '_', $github_page_content);
    $github_page_content = str_replace('<!-- HTMLEXT -->', '.html', $github_page_content);

    // save content as HTML for GitHub
    file_put_contents($root . '/html/blog/index.html', $github_page_content);
?>