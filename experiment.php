<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'MOAR EXPERIMENTS';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $active_exper = ' class="active" ';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <p>Hallo wereld!</p>
                <?php include('needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    $page_name = 'experiment';
    include('needs/postprocessing.php');
?>