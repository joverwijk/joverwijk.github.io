<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Beroepsbeeld';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $nav_link_active = 'job_image';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Beroepsbeeld</h1>
                <p>
                    Op 05 oktober 2018 heb ik het HBO-I Job Event bezocht en een bedrijvensafari
                    gedaan op 11 oktober van datzelfde jaar. Hieronder volgt een soort van
                    verslag van deze <i>evenementen</i>.
                </p>
                <h2>HBO-I Job Event</h2>
                <figure class="float_right">
                    <img src="/img/hbo-i_stands.jpg" alt="Verschillende stands op het HBO-I Job Event" style="transform: rotate(180deg)">
                    <figcaption>Verschillende stands op het HBO-I Job Event</figcaption>
                </figure>
                <p>
                    Op het HBO-I Job Event waren verschillende bedrijven/instanties aanwezig
                    die (onder andere) aan ICT doen. Hieronder vielen onder meer het Ministerie
                    van Defensie, Secura&nbsp;B.V., Sligro, Accenture, Quintor en DongIT.
                </p>
                <p>
                    Bij het Ministerie van Defensie mag je in burger werken en hebben ze
                    onder andere functies als <i>system engineer</i> en <i>cybersecurity</i>.
                    Bij Secura draait het vooral om het testen van de beveiliging van andere
                    bedrijven/instanties. Dit wordt onder andere gedaan door middel van
                    ethisch hacken - oftewel hacken met als doel beveiligingslekken te
                    vinden.
                </p>
                <p>
                    Sligro outsourcet hun ICT-gebeuren, maar is wel op zoek naar juniorfuncties
                    in de toekomst om later ICT zelf te doen. Verder hebben zij traineeships.
                </p>
                <p>
                    DongIT maakt vooral systemen als webshops en doet ook aan beveiliging -
                    eigenlijk een ICT en beveiligingsbedrijf in één. Zij werken met Python,
                    PHP en andere talen. Quintor helpt organisaties met hun ICT-gebeuren
                    en is vooral technisch georiënteerd. Verder werken zij met de ontwikkelmethode
                    SCRUM.
                </p>
                <p>
                    Accenture identificeert zich als een consultancy. Ze geven advies en
                    bieden hulp aan. Ze hebben geen vaste plaats waar hun werknemers werken,
                    omdat deze werknemers 'op locatie' hun werk doen - in principe dus overal
                    en ergens. Verder werkt men bij het bedrijf in een los teamverband.
                    Bovenop wat ze doen, werken zij van strategie (lees tekentafel) tot
                    het product volledig klaar is.
                </p>
                <p>
                    Er werd niet veel gezegd over ontwikkelmethoden. Aangenomen kan worden
                    dat de bedrijven/instanties hoofdzakelijk werken via SCRUM en Agile.
                    Verder zou het mij niet verbazen dat soms nog PRINCE2, <i>top-down
                    approach</i> of watervalmethode worden gebruikt.
                </p>
                <h2>Bedrijvensafari</h2>
                <p>
                    De bedrijvensafari werd gehouden op 11 oktober. Ik heb toen vijf bedrijven
                    bezocht: Omoda, YourSurprise en Syntess in Zierikzee en Colijn&nbsp;IT
                    en CarCollect in Goes.
                </p>
                <h3>
                    Omoda
                </h3>
                <figure class="float_right">
                    <img src="/img/omoda_distribution_center.jpg" alt="Het distributiecentrum van Omoda" style="transform: rotate(180deg)">
                    <figcaption>Het distributiecentrum van Omoda</figcaption>
                </figure>
                <p>
                    De 'safari' bij Omoda was eigenlijk meer een minder goed georganiseerde
                    rondleiding in het bedrijf, waarbij de opslag en het distributiecentrum
                    werden getoond voor hun schoenen. Er werd, naar mijn idee, niet diep
                    ingegaan op de functie van de ICT binnen het bedrijf.
                </p>
                <h3>
                    YourSuprise
                </h3>
                <p>
                    Dit bedrijf is behoorlijk informeel - iets wat niet echt past bij mij,
                    aangezien ik het informele bij dit bedrijf een beetje té vind naar mijn
                    mening.
                </p>
                <h3>
                    Syntess
                </h3>
                <p>
                    De introductie was nogal saai, maar langzaam maar zeker begon het toch
                    wat leuker te worden, zeker toen we ballonnen moesten namaken die
                    precies leken op een gegeven voorbeeld. Laten we maar zeggen dat een
                    hele hoop ballonnen hun lucht lieten ontsnappen door toedoen van een
                    stuk gereedschap normaliter gebruikt voor het al dan niet schots en
                    scheef 'snijden' van papier.
                </p>
                <h3>
                    Colijn&nbsp;IT
                </h3>
                <figure class="float_right">
                    <img src="/img/colijn_it.jpg" alt="Gebouw van Colijn IT" style="transform: rotate(180deg)">
                    <figcaption>Het gebouw van Colijn&nbsp;IT</figcaption>
                </figure>
                <p>
                    Dit bedrijf specialiseert zich in het maken van software voor meubelzaken,
                    iets waar ze, naar eigen zeggen, de grootste mee zijn geworden in de
                    Benelux. Bij dit bedrijf heb ik over het algemeen positieve gevoelens,
                    iets wat waarschijnlijk aangestuwd is omdat er een bekende van mij daar
                    werkt.
                </p>
                <h3>
                    CarCollect
                </h3>
                <p>
                    Dit bedrijf is een soort van Marktplaats voor auto's, waar dealers
                    onderling auto's kunnen verhandelen tijdens een gesloten veiling. Het
                    bedrijf is nog redelijk jong - zes jaar om precies te zijn. Ik heb bij
                    dit bedrijf niet echt iets specifieks gehoord wat mij aantrekt.
                </p>
                <h2>
                    Mijn voorkeur
                </h2>
                <p>
                    Mijn voorkeur ligt niet specifiek bij een van de vijf bedrijven waar ik
                    11 oktober naar toe ben gegaan. Wel vind ik wat Colijn&nbsp;IT doet wel
                    bij mij passen - niet al te formeel en ook weer niet al te informeel.
                </p>
                <?php include('needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    echo $page_content;
?>