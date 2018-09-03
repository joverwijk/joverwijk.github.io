<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Experimenten';
            include('needs/header.php');
        ?>
        <link rel="stylesheet" type="text/css" media="screen" href="css/experiments.css" />
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
                    <div class="left_box_s1">
                        Linkerbox
                    </div>
                    <div class="right_box_s1">
                        Rechterbox
                    </div>
                </div>
                <h5>Onderwerp 2: Lay-out</h5>
                <div class="superbox">
                    <div class="top_box_s2">
                        Dit is mijn hoofd
                    </div>
                    <div class="bottom_box_s2">
                        Content
                    </div>
                </div>
                <h5>Onderwerp 3: CSS transformations</h5>
                <div class="superbox">
                    <div class="left_box_s3">
                        Linkerbox
                    </div>
                    <div class="right_box_s3">
                        Rechterbox
                    </div>
                </div>
                <h5>Onderwerp 4: CSS animations</h5>
                <div class="superbox">
                    <div class="left_box_s4">
                        Linkerbox
                    </div>
                    <div class="right_box_s4">
                        Rechterbox
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
    file_put_contents('experiment.html', $github_page_content);
?>