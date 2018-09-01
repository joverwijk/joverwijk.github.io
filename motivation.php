<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Motivatie';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $nav_link_active = 'motivation';
            include('needs/nav.php');
        ?>
        <main>
            <section>
            
                <?php include('needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    // postprocessing
    include('needs/postprocessing.php');

    // sla inhoud na postprocessing op in HTML
    file_put_contents('motivation.html', $github_page_content);
?>