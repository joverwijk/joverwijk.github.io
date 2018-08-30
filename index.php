<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            include('needs/header.php');
            $page_title = 'Home';
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
    $active_procd = str_replace($active_dashboard, ' class="active" ', $pagetitle_procd);
    $proc_page_content = str_replace('<!-- FILEEXT -->', 'php', $pagetitle_procd);
    
    // voeg hier meer te processeren spul toe.
    
    // toon pagina
    echo $proc_page_content;

    // extra spul voor GitHub
    $github_page_content = str_replace('<!-- FILEEXT -->', 'html', $active_procd);
    // sla inhoud op als HTML voor GitHub
    file_put_contents('index.html', $github_page_content);
?>