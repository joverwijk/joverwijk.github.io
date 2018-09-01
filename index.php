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
                <p>Binnenkort... \o/. Ja echt, heeeeel binnenkort. Hopefully... Testing...</p>
                <!-- TODO: Links & meer -->
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
    file_put_contents('index.html', $github_page_content);
?>