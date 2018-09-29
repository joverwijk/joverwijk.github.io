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
    // vervang '<!-- FOLDER -->' door niets
    // vervang '<!-- FILEEXT -->' door php
    $xml_page_content = str_replace('<!-- FILEEXTXML -->', 'php', $page_content);
    $folder_location = str_replace('<!-- FOLDER -->', '', $xml_page_content);
    $php_ext = str_replace('<!-- FILEEXT -->', 'php', $folder_location);
    $processed_page_content = str_replace('<!-- HTMLEXT -->', '', $php_ext);
    
    // voeg hier meer te processeren spul toe.
    
    // toon pagina
    echo $processed_page_content;

    // vervang '<!-- FILEEXTXML -->' door xml
    // vervang '<!-- FOLDER -->' door /html
    // vervang '<!-- FILEEXT -->' door html
    $xml_github = str_replace('<!-- FILEEXTXML -->', 'xml', $page_content);
    $folder_location_github = str_replace('<!-- FOLDER -->', '/html', $xml_github);
    $github_page_content = str_replace('<!-- FILEEXT -->', 'html', $folder_location_github);
?>