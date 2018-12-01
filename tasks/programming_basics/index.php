<?php
    ob_start(); // start buffer 
    $root = $_SERVER["DOCUMENT_ROOT"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Programming Basics';
            include($root . '/needs/header.php');
        ?>
        <link rel="stylesheet" href="/tasks/programming_basics/css/main.css" type="text/css">
        <script src="/tasks/programming_basics/js/main.js"></script>
        <!-- <script src="/tasks/programming_basics/js/functions.js"></script>
        <script src="/tasks/programming_basics/js/arrays.js"></script> -->
        <script src="/tasks/programming_basics/js/dom.js"></script>
        <script src="/tasks/programming_basics/js/games/clicker.js"></script>
    </head>
    <body>
        <?php
            $nav_link_active = 'programming_basics';
            include($root . '/needs/nav.php');
        ?>
        <main>
            <section>
                <div id="section">
                    <h1>Programming Basics</h1>
                    <p>
                        Deze pagina bevat uitwerkingen van verschillende opdrachten gemaakt
                        voor het vak <i>Programming Basics</i>.
                    </p>
                    <h2>DOM Scripting</h2>
                    <h3>Les 1</h3>
                    <b>Boodschappenlijstje</b>
                    <ul id="errand_list">
                        <li>tandenborstel</li>
                        <li>deodorant</li>
                        <li>bakmeel</li>
                        <li>wortels</li>
                    </ul>
                    <p>
                        Proberen zelf de boodschappentabel te maken? Vereisten: 1) maximaal 1 keer <code>createElement</code>,
                        2) maximaal 1 keer <code>appendChild</code> en 3) 19 of minder coderegels voor de functie, exclusief witregels.</br>
                        <small>EN NIET SPIEKEN!</small>
                    </p>
                    <button id="submit">I'm a button!</button>
                </div>

                <h4>Huiswerk</h4>
                <p>
                    Opdracht 1
                </p>
                <table id="course_table">
                    <tr id="course1">
                        <td>Computer Science Basics</td>
                        <td>7</td>
                    </tr>
                    <tr id="course2">
                        <td>Programming Basics</td>
                        <td>8.6</td>
                    </tr>
                    <tr id="course3">
                        <td>Studieloopbaanoriëntatie</td>
                        <td>5</td>
                    </tr>
                    <tr id="course4">
                        <td>Gamedevelopment with TypeScript</td>
                        <td>6.7</td>
                    </tr>
                </table>
                <button onclick="calc_average()">Gemiddelde berekenen</button>

                <p>
                    Opdracht 2
                </p>
                <ul class="course">
                    <li class="course1">Computerscience basics</li>
                    <li class="course2">Programming basics</li>
                    <li class="course3">Studieloopbaan orientatie</li>
                    <li class="course4">Gamedevelopment with TypeScript</li>
                    <li class="course5">Professional Skills 1</li>
                    <li class="course6">HZ personality 2a</li>
                    <li class="course7">Framework development 1</li>
                </ul>
                <button onclick="highlight_even_courses()">Highlight even courses</button>

                <p>
                    Opdracht 3
                </p>
                <p>
                    Al eens een afbeeldingengenerator gebruikt? Nee? Probeer deze! Alle afbeeldingen
                    zijn afkomstig van <a href="https://picsum.photos" title="Picsum">Picsum</a>.
                </p>
                <div id="image_to_be_generated"></div>
                <button onclick="create_image_element()">Genereer afbeelding</button>

                <h3>Les 2</h3>
                <form>
                    <input type="text" id="text_input" placeholder="Typ iets...">
                    <input type="submit" id="submit_button" value="Opslaan...">
                </form>

                <div class="flex flex_prog_icons" id="img_group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" height="50px">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/CSS.3.svg" height="50px">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Badge_js-strict.svg" height="50px">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" height="50px">
                </div>

                <h4>Huiswerk</h4>
                <p>
                    Opdracht 1
                </p>

                <p>
                    Clicker v5&nbsp;000&nbsp;000 - hét spel waarmee je je muis naar de schroot helpt!
                </p>

                <div id="click_game">
                    <button class="click_game_start" id="click_game_start">Start</button>
                </div>

                <p>
                    Opdracht 2
                </p>

                <p>
                    Handig, zo'n boodschappenlijstjesmaker, maar dan moet-ie wel werken...
                </p>
                <form id="errand_list_creator" action="">
                    <input type="text" placeholder="Boodschap" id="errand_item">
                    <input type="number" placeholder="Prijs" id="errand_price">
                    <input type="submit" value="Toevoegen" id="errand_add">
                </form>
                <div id="errand_list">
                    <p>
                        <b>TOTAAL:</b> <label id="errand_total_price">0.00</label>
                    </p>
                    <table id="errand_table">
                        <tr id="errand_row_undeletable">
                            <th>Boodschap</th>
                            <th>Prijs</th>
                            <th></th>
                        </tr>
                    </table>
                </div>

                <?php include($root . '/needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    echo $page_content;
?>