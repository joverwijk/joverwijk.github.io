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
            $nav_link_active = 'home';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Welkom!</h1>
                <p>
                    Ah. Je hebt deze pagina kunnen vinden tussen alle URL's en/of
                    zoekresultaten die het internet rijk is. <i>Good</i>.
                </p>
                <p>
                    Voordat je verder gaat lezen, ik ben Jarno Overwijk. Lees wat
                    meer over mij op <a href="profile.<!-- FILEEXT -->" title="Profiel">deze
                    pagina</a>. Dit zou, als het goed is, de onderstaande tekst
                    beter te begrijpen maken.
                </p>
                <div class="left_half">
                    <h5>Waarom de opleiding bij mij past</h5>
                    <p>
                        Al sinds ongeveer de tweede (of was het de eerste?) klas
                        wist ik al dat ik iets met computers wilde doen. Volgens
                        mij is dit ook het moment waarop ik steeds meer interesse
                        begon te tonen in de <i>behind the scenes</i> van een
                        website. Sindsdien is dat uitgegroeid tot het willen worden
                        van een ICT'er (of iets dergelijks). Aangezien je, om een
                        ICT'er te worden, eerst een opleiding nodig hebt, kom je
                        haast logischerwijs uit bij deze opleiding.
                    </p>
                    <p>
                        Of ik ook aan andere opleidingen heb gedacht? Dat zou best
                        kunnen, maar voor dat zou ik echt heel ver moeten graven.
                    </p>
                </div>
                <div class="right_half">
                    <h5>Waarom het beroep 'ICT' bij mij past</h5>
                    <p>
                        Zoals gezegd, wilde ik in de tweede klas wat 'doen' met
                        computers. Toch heb ik er toen niet al te veel aandacht
                        aan besteed, totdat we een vakkenpakket moesten kiezen,
                        waarbij je je mocht oriënteren op twee van de 'keuzevakken'.
                    </p>
                    <p>
                        Daar zat 'natuurlijk' informatica bij. Hoewel de introductie
                        daarop best, tja, hoe zou je het kunnen zeggen, saai was
                        (vooral, naar mijn mening, te veel gepraat over dit en dat),
                        is het toch blijven hangen en was de keus eigenlijk redelijk
                        snel gemaakt. Sindsdien heb ik me er, als het ware, op
                        vastgebeten, hoewel het soms redelijk lastig was om door
                        te blijven gaan na verschillende tegenslagen.
                    </p>
                </div>
                <h2 class="clear">Over deze website</h2>
                <p>
                    Deze website dient als een soort portfolio van mijn opleiding
                    en wordt, als het goed is, 'regelmatig' bijgewerkt. Verder is
                    deze website geschreven in PHP, met stijl gedefinieerd in CSS,
                    wat JavaScript erbij en wordt de pagina omgezet naar HTML om
                    te tonen in GitHub Pages, omdat die applicatie PHP niet
                    ondersteunt.
                </p>
                <div class="center_image_wrapper">
                    <img class="float_center_image" src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" height="50px" title="PHP-logo" alt="PHP-logo">
                    <img class="float_center_image" src="https://upload.wikimedia.org/wikipedia/commons/3/3d/CSS.3.svg" height="50px" title="CSS3-logo" alt="CSS3-logo">
                    <img class="float_center_image" src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Badge_js-strict.svg" height="50px" title="JavaScript-logo" alt="JavaScript-logo">
                    <img class="float_center_image" src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" height="50px" title="HTML5-logo" alt="HTML5-logo">
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
    file_put_contents('index.html', $github_page_content);
?>