<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            include('needs/header.php');
            $page_title = 'Dashboard';
        ?>
    </head>
    <body>
        <?php
            $active_dashboard = ' class="active" ';
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
                    TODO. Soon^tm!
                </p>
                <h2>Studiewijzer</h2>
                <p>
                    Snel naar een belangrijke pagina? Gebruik de links hieronder!
                    <ul>
                        <li><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" title="Onderwijs- en examenregelingen">Onderwijs- en examenregelingen</a></li>
                        <li><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" title="Studentenstatuut">Studentenstatuut</a></li>
                        <li><a href="https://learn.hz.nl" title="Digitale leeromgeving">Digitale leeromgeving</a></li>
                        <li><a href="https://hz-hbo-ict.slack.com/" title="Opleidingsslack">Opleidingsslack</a></li>
                        <li><a href="https://learn.hz.nl/my/?myoverviewtab=timeline" title="Voortgang op MyHZ">Voortgang op MyHZ</a></li>
                        <li><a href="https://github.com/hz-hbo-ict" title="Opleiding op GitHub">Opleiding op GitHub</a></li>
                    </ul>
                </p>
            </section>
        </main>
    </body>
</html>
<?php
    /* 
        Voor iedere wijziging moet er een nieuwe variabele toegevoegd worden in
        het gedeelte voor te processeren spul. Hoewel dit een beetje onhandig
        werkt, weet ik op dit moment geen betere oplossing voor dit probleem.

        Aangeraden wordt om in ieder geval $proc_page_content te houden als laatste
        variabele, zodat er geen problemen ontstaan bij het opslaan van de HTML-
        pagina. Behoud voor GitHub de variable $github_page_content aan als laatste
        variabele.
    */
    
    // sla inhoud op in $page_content' en wis buffer
    $page_content = ob_get_clean();

    // vervang '<!-- PAGETITLE -->' door $page_title
    // vervang $active_dashboard door 'class="active"'
    // vervang '<!-- FILEEXT -->' door php
    $pagetitle_procd = str_replace('<!-- PAGETITLE -->', $page_title, $page_content);
    $proc_page_content = str_replace('<!-- FILEEXT -->', 'php', $pagetitle_procd);
    
    // voeg hier meer te processeren spul toe.
    
    // toon pagina
    echo $proc_page_content;

    // extra spul voor GitHub
    $github_page_content = str_replace('<!-- FILEEXT -->', 'html', $pagetitle_procd);
    // sla inhoud op als HTML voor GitHub
    file_put_contents('dashboard.html', $github_page_content);
?>