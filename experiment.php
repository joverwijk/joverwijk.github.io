<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Experimenten';
            include('needs/header.php');
        ?>
        <link rel="stylesheet" type="text/css" media="screen" href="/css/experiments.css" />
    </head>
    <body>
        <?php
            $nav_link_active = 'experiment';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>SLO1.3: CSS Fun</h1>
                <p>
                    Dit gedeelte dient als uitwerking voor SLO1.3.
                </p>
                <h5>Onderwerp 1: Box-model</h5>
                <div class="superbox">
                    <div class="box left_box_s1">
                        <p>Linkerbox</p>
                    </div>
                    <div class="box right_box_s1">
                        <p>Rechterbox</p>
                    </div>
                </div>
                <h5>Onderwerp 2: Lay-out</h5>
                <p>
                    Zie <a href="/html/experiment2.html">deze pagina</a>. Hier is ook
                    een zijbalk aan toegevoegd.
                </p>
                <h5>Onderwerp 3: CSS transformations</h5>
                <div class="superbox">
                    <div class="box left_box_s3">
                        <p>Linkerbox</p>
                    </div>
                    <div class="box right_box_s3">
                        <p>Rechterbox</p>
                    </div>
                </div>
                <h5>Onderwerp 4: CSS animations</h5>
                <div class="superbox">
                    <div class="box left_box_s4">
                        <p>Linkerbox</p>
                    </div>
                    <div class="box right_box_s4">
                        <p>Rechterbox</p>
                    </div>
                </div>
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
    file_put_contents('html/experiment.html', $github_page_content);
?>