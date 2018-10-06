<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Beroepsbeeld';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $nav_link_active = 'job_image';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Beroepsbeeld</h1>
                <p>
                    SOON...^tm
                </p>
                <?php include('needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    echo $page_content;
?>