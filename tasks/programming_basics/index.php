<?php
    ob_start(); // start buffer 
    $root = $_SERVER["DOCUMENT_ROOT"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Programming Basics';
            include($root . '/needs/header.php');
        ?>
        <script src="/tasks/programming_basics/js/main.js"></script>
        <!-- <script src="/tasks/programming_basics/js/functions.js"></script>
        <script src="/tasks/programming_basics/js/arrays.js"></script>
        <script src="/tasks/programming_basics/js/objects.js"></script> -->
    </head>
    <body>
        <?php
            // $nav_link_active = 'programming_basics';
            // include($root . '/needs/nav.php');
        ?>
        <nav class="nav_js" id="responsive_nav">
            <a href='/html/index.html'>Home</a>
            <a href='/html/profile.html'>Over mij</a>
            <a href='/html/dashboard.html'>Dashboard</a>
            <a href='/html/motivation.html'>Motivatie</a>
            <a href='/html/job_image.html'>Beroepsbeeld</a>
            <div class='dropdown'>
                <a class="dropdown" href='/html/tasks/index.html'>Opdrachten&nbsp;<i class='fa fa-caret-down'></i></a>
                <div class='dropdown_content'><a  class="active" href='/html/tasks/programming_basics/index.html'>Programming Basics</a>
                    <a  href='/html/tasks/computer_science_basics/index.html'>Computer Science Basics</a>
                    <a href='/html/experiment.html'>Experimenten</a>
                </div>
            </div>
            <a href="javascript:void(0);" class="nav_icon" onclick="show_nav_dropdown()"><i class="fa fa-bars"></i></a>
        </nav>
        <main>
            <section>
                <h1>Programming Basics</h1>
                <p>
                    SOON...^tm
                </p>
                <?php include($root . '/needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    echo $page_content;
?>