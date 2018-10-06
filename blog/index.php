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
                    // POSTS = get_postc(year, month-id_name, category)
                    get_postc(2018, '10-02_its_here', 'website');
                    get_postc(2018, '10-01_major_steps', 'website');
                    get_postc(2018, '09-04_plans_thoughts', 'website');
                    get_postc(2018, '09-03_updates_frustrations', 'website');
                    get_postc(2018, '09-02_why', 'general');
                    get_postc(2018, '09-01_september_surprises', 'yellowstone');
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