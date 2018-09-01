<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Profiel';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $active_profile = ' class="active" ';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Over mij</h1>
                <p>
                    Ik ben Jarno Overwijk,
                    <?php
                        $dob = date_create('2000-12-01');
                        $cur_date = date_create('now');
                        $interval = date_diff($dob, $cur_date);
                        echo $interval->format('%y jaar');
                    ?>
                    oud en volg de opleiding HBO-ICT aan de <a href="https://hz.nl">HZ</a> locatie Middelburg.
                </p>
                <h2>Kenmerken</h2>
                <ol>
                    <li>Algemeen</li>
                    <ul>
                        <li>Houd er totaal niet van om in de <i>spotlights</i> te staan.</li>
                        <li>Presenteert daarom dus ook liever niet...</li>
                        <li>Stelt met regelmaat privacy boven 'je mag alles weten'.</li>
                    </ul>
                </ol> <!-- TODO: uitbreiden met meer kenmerken en een afbeelding -->
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
    file_put_contents('profile.html', $github_page_content);
?>