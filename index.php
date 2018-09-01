<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Home';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $active_home = ' class="active" ';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Soon^tm</h1>
                <p>Binnenkort... \o/. Ja echt, heeeeel binnenkort. Hopefully...</p>
                <!-- TODO: Links & meer -->
                <?php include('needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    $page_name = 'index';
    include('needs/postprocessing.php');
?>