<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Dashboard';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $nav_link_active = 'dashboard';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Dashboard</h1>
                <p>
                    Deze pagina bevat mijn persoonlijke dashboard. Het bevat onder
                    andere een studiemonitor en handige links.
                </p>
                <h2>Studiemonitor</h2>
                <?php include('needs/graph.php'); ?>
                <h3>Toetsen</h3>
                <p>
                    Bron: <a href="https://apps.hz.nl/angular/studievoortgang/studievoortgang" title="Studievoortgang">Studievoortgang</a>
                </p>
                <?php include('needs/test_table.php'); ?>
                <h2>Studiewijzer</h2>
                <p>
                    Snel naar een belangrijke pagina? Gebruik de links hieronder!
                    <ul>
                        <li><a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2018-2019docv2018-06-26DEFCvB-V-01.pdf" title="Onderwijs- en examenregelingen">Onderwijs- en examenregelingen</a></li>
                        <li><a href="https://slack-files.com/files-pri-safe/TCB9V8PE0-FCM9GNFJ6/uitvoeringsregeling_2018___2019_hbo-ict_voltijd_v2.0.pdf?c=1536241896-c95a6dccbbf60ce7d73ba37c97250f37ec0b2d92" title="Uitvoeringsregeling HBO-ICT">Uitvoeringsregeling HBO-ICT</a></li>
                        <li><a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/Studentenstatuut/Studentenstatuut-HZ-University-of-Applied-Sciences.pdf" title="Studentenstatuut">Studentenstatuut</a></li>
                        <li><a href="https://learn.hz.nl/course/view.php?id=1024#section-0" title="Digitale leeromgeving blok 1">Digitale leeromgeving blok 1</a></li>
                        <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" title="Studiestatus">Studiestatus</a></li>
                        <li><a href="https://hz-hbo-ict.slack.com/" title="Opleidingsslack">Opleidingsslack</a></li>
                        <li><a href="https://learn.hz.nl/my/?myoverviewtab=timeline" title="Voortgang op MyHZ">Voortgang op MyHZ</a></li>
                        <li>GitHub</li>
                        <ul>
                            <li><a href="https://github.com/hz-hbo-ict" title="Opleiding op GitHub">Opleiding op GitHub</a></li>
                            <li><a href="https://github.com/joverwijk" title="Persoonlijke GitHub">Persoonlijke GitHub</a></li>
                        </ul>
                    </ul>
                </p>
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
    file_put_contents('html/dashboard.html', $github_page_content);
?>