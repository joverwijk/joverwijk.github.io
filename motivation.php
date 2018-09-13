<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Motivatie';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $nav_link_active = 'motivation';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Motivatie</h1>
                <p>
                    Deze pagina bevat de uitwerking van de opdracht
                    <a href="https://learn.hz.nl/course/view.php?id=1024#section-7" title="SLO2 - Motivatie">SLO2 - Motivatie</a>.
                </p>
                <h2>Theorie</h2>
                <p>
                    Als eerste volgt de theorie. Hierin wordt onder andere de definitie gegeven van
                    het fenomeen <i>motivatie</i>.
                </p>
                <h3>Definitie</h3>
                <p>
                    Volgens <i>Wiktionary</i> (zeg maar de woordenboekversie van <i>Wikipedia</i>)
                    kan motivatie worden gedefinieerd als "enthousiasme voor een taak" of als
                    "drijfveer". Vrij vertalen van die definities geeft 'zin hebben om iets te doen'.
                </p>
                <p>
                    Er zijn verschillende vormen van motivatie, net als de hoeveelheid motivatie iemand
                    heeft voor een taak. Volgens Ryan en Deci (2000) zijn deze verschillende vormen
                    onder andere, maar niet gelimiteerd tot, nieuwsgierigheid, interesse, het behalen
                    van een goede 'score' bij een persoon, inzien dat de kennis later van pas kan komen
                    of een grote waarde heeft. Ook kan het zijn dat het (goed) voltooien van de taak
                    (of het leren van een bepaalde vaardigheid) privileges geeft. Zo zijn er nog wel
                    meer van zulke drijfveren. Echter, in deze voorbeelden speelt de hoeveelheid motivatie
                    niet echt mee.
                </p>
                <p>
                    Om het nog iets ingewikkelder te maken, bestaat er ook intrinsieke en extrinsieke
                    motivatie. Volgens Wikipedia hebben personen die intrinsiek gemotiveerd zijn een
                    hoger concentratieniveau, meer creativiteit (wellicht door het hogere concentratieniveau),
                    een hoger gevoel van zelfcompetentie en trots en hebben zij meer plezier bij het
                    uitvoeren van een taak. Een extrinsiek gemotiveerd persoon is juist het tegenovergestelde
                    daarvan.
                </p>
                <p>
                    Hieruit kan dus geconcludeerd worden dat intrinsieke motivatie eigenlijk uit de
                    persoon, dus intern, komt terwijl extrinsieke motivatie komt van buitenaf, oftewel
                    extern (bijvoorbeeld door een (zware) consequentie).
                </p>
                <p>
                    Eigenlijk is er geen duidelijke definitie te bedenken van het woord 'motivatie',
                    maar het komt eigenlijk wel op het volgende neer: de hoeveelheid motivatie voor
                    een taak wordt door een heleboel factoren bepaald, bijvoorbeeld door enthousiasme
                    ervoor of de consequentie die volgt op het niet voltooien van een taak.
                </p>
                <h3>Motivatie volgens Dan Pink</h3>
                <h2>Bronnen</h2>
                <ul>
                    <li>
                        Overwijk, J., Van de Gruiter, S., Beckers, M. & Van Ostayen, J. (13 september 2018). Geraadpleegd op 13 september 2018, van <a href="/sources/slo1_review.pdf">Beoordeling SLO1</a>.
                    </li>
                    <li>
                        Nederlandstalige Wiktionary (30 april 2017). Geraadpleegd op 13 september 2018, van <a href="https://nl.wiktionary.org/w/index.php?title=motivatie&amp;oldid=3350573">https://nl.wiktionary.org/w/index.php?title=motivatie&amp;oldid=3350573</a>.
                    </li>
                    <li>
                        Ryan, R.M. &amp; Deci, E.L. (2000) Intrinsic and Extrinsic Motivations: Classic Definitions and New Directions. <i>Contemporary Educational Psychology</i>. 25(1). <a href="https://doi.org/10.1006/ceps.1999.1020">https://doi.org/10.1006/ceps.1999.1020</a>.
                    </li>
                    <li>
                        Nederlandstalige Wikipedia (3 juli 2018). Geraadpleegd op 13 september 2018, van <a href="https://nl.wikipedia.org/w/index.php?title=Intrinsieke_en_extrinsieke_motivatie&amp;oldid=51895556">https://nl.wikipedia.org/w/index.php?title=Intrinsieke_en_extrinsieke_motivatie&amp;oldid=51895556</a>.
                    </li>
                    <li>
                        Pink, D. (2009). The puzzle of motivation. Gepresenteerd op de TEDGlobal 2009, Oxford, Groot-Brittannië. Geraadpleegd van <a href="https://www.ted.com/talks/dan_pink_on_motivation?language=en">https://www.ted.com/talks/dan_pink_on_motivation?language=en</a>.
                    </li>
                </ul>
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
    file_put_contents('html/motivation.html', $github_page_content);
?>