<?php
    /* 
        Voor iedere wijziging moet er een nieuwe variabele toegevoegd worden in
        het gedeelte voor te processeren spul. Hoewel dit een beetje onhandig
        werkt, weet ik op dit moment geen betere oplossing voor dit.

        Aangeraden wordt om in ieder geval $proc_page_content te houden als laatste
        variabele, zodat er geen problemen ontstaan bij het opslaan van de HTML-
        pagina. Houd voor GitHub de variable $github_page_content aan als laatste
        variabele.
    */

    // vervang '<!-- FILEEXTXML -->' door php
    // vervang '<!-- FILEEXT -->' door php
    $xml_page_content = str_replace('<!-- FILEEXTXML -->', 'php', $page_content);
    $proc_page_content = str_replace('<!-- FILEEXT -->', 'php', $xml_page_content);
    
    // voeg hier meer te processeren spul toe.
    
    // toon pagina
    echo $proc_page_content;

    // extra spul voor GitHub
    $xml_github = str_replace('<!-- FILEEXTXML -->', 'xml', $page_content);
    $github_page_content = str_replace('<!-- FILEEXT -->', 'html', $xml_github);
?>