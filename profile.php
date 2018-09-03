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
            $nav_link_active = 'profile';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Over mij</h1>
                <p class="float_right small_right inline">
                    <img src="img/me.jpg" width="125px" alt="Een afbeelding van mij"></br>
                    Een afbeelding van mij.
                </p>
                <p>
                    Ik ben Jarno Overwijk,
                    <?php
                        $dob = date_create('2000-12-01');
                        $cur_date = date_create('now');
                        $interval = date_diff($dob, $cur_date);
                        echo $interval->format('%y jaar');
                    ?>
                    oud en volg de opleiding HBO-ICT aan de <a href="https://hz.nl" title="HZ">HZ locatie Middelburg</a>.
                </p>
                <h2>Kenmerken</h2>
                <ol class="list_bold">
                    <li>Algemeen</li>
                    <ul>
                        <li>Houd er totaal niet van om in de <i>spotlights</i> te staan.</li>
                        <li>Presenteert daarom dus ook liever niet...</li>
                        <li>Stelt met regelmaat privacy boven 'je mag alles weten'.</li>
                    </ul>
                    <li>Interesses</li>
                    <ul>
                        <li>
                            Is een zogeheten <i>geyser gazer</i>, oftewel een persoon die
                            langdurig naar geisers (en andere geothermische fenomenen) kan
                            kijken en er het liefst ook zo vaak mogelijk in de buurt ervan
                            wilt zijn. Helaas is dit nog niet gelukt...
                        </li>
                        <li>
                            Is geïnteresseerd in geschiedenis, met name de Eerste en Tweede
                            Wereldoorlog.
                        </li>
                        <li>Verder lijkt het mij logisch dat ik in ICT geïnteresseerd ben.</li>
                    </ul>
                    <li>Overige</li>
                    <ul>
                        <li>Kan soms een <i>grammar nazi</i> zijn.</li>
                    </ul>
                </ol> <!-- TODO: uitbreiden met meer 'kenmerken' en een afbeelding -->
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
    file_put_contents('profile.html', $github_page_content);
?>