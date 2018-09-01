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
    /* 
        Voor iedere wijziging moet er een nieuwe variabele toegevoegd worden in
        het gedeelte voor te processeren spul. Hoewel dit een beetje onhandig
        werkt, weet ik op dit moment geen betere oplossing voor dit.

        Aangeraden wordt om in ieder geval $proc_page_content te houden als laatste
        variabele, zodat er geen problemen ontstaan bij het opslaan van de HTML-
        pagina. Behoud voor GitHub de variable $github_page_content aan als laatste
        variabele.
    */
    
    // sla inhoud op in $page_content' en wis buffer
    $page_content = ob_get_clean();

    // vervang '<!-- FILEEXT -->' door php
    $proc_page_content = str_replace('<!-- FILEEXT -->', 'php', $page_content);
    
    // voeg hier meer te processeren spul toe.
    
    // toon pagina
    echo $proc_page_content;

    // extra spul voor GitHub
    $github_page_content = str_replace('<!-- FILEEXT -->', 'html', $page_content);
    // sla inhoud op als HTML voor GitHub
    file_put_contents('index.html', $github_page_content);
?>