<?php
    function add_test($test_name, $result, $ec_value, $ec_virtual, $ec_determined, $passed) {
        // standaardwaarde voor resultaat
        if ($result == null) {
            $result = '---';
        }
        
        // standaardwaarde voor bepaalde EC
        if ($ec_determined == null) {
            $ec_determined = '---';
        }

        // bepaal, a.d.h.v. waarde $passed, de achtergrondkleur van deze tabelrij
        if ($passed == 'no') {
            $bg = ' class="failed"';
        } elseif ($passed == 'yes') {
            $bg = ' class="passed"';
        } else {
            $bg = '';
        }

        // geef als antwoord een volledige tabelrij
        return '<tr' . $bg . '><td>' . $test_name . '</td><td>' . $result . '</td><td>' . $ec_value . '</td><td>' . $ec_virtual . '</td><td>' . $ec_determined . '</td></tr>';

    }

    $table_start = '<table class="ec_table"><thead><tr><th class="equal_width_fcol">Toets</th><th>Resultaat</th><th>EC-waarde</th><th>EC virtueel</th><th>EC vastgesteld</th></tr></thead><tbody>';
    $table_end = '</tbody></table>';
    
    // echo add_test('naam', 'resultaat', 'EC-waarde', 'EC virtueel', 'EC bepaald', 'behaald');
    echo '<h4>2018-2019 (60,00 EC)</h4><h5>Blok 1 (15,00 EC)</h5>';
    echo $table_start;
    echo add_test('Opleidings- en beroepsoriëntatie', null, '2,50', '0', null, null);
    echo add_test('Computer science basics', null, '7,50', '0', null, null);
    echo add_test('Programming basics', null, '5,00', '0', null, null);
    echo $table_end;

    echo '<h5>Blok 2 (12,50 EC)</h5>';
    echo $table_start;
    echo add_test('Object-oriented programming', null, '10,00', '0', null, null);
    echo add_test('Professional skills 1', null, '2,50', '0', null, null);
    echo $table_end;

    echo '<h5>Blok 3 (15,00 EC)</h5>';
    echo $table_start;
    echo add_test('Professional skills 2', null, '2,50', '0', null, null);
    echo add_test('Professionele werkplek 1', null, '2,50', '0', null, null);
    echo add_test('Framework development 1', null, '5,00', '0', null, null);
    echo add_test('Framework project 1', null, '5,00', '0', null, null);
    echo $table_end;

    echo '<h5>Blok 4 (12,50 EC)</h5>';
    echo $table_start;
    echo add_test('Professional skills 3', null, '2,50', '0', null, null);
    echo add_test('Framework project 2', null, '5,00', '0', null, null);
    echo add_test('Framework development 2', null, '5,00', '0', null, null);
    echo $table_end;

    echo '<h5>Overige (5,00 EC)</h5>';
    echo $table_start;
    echo add_test('HZ-Personality 2a', null, '2,50', '0', null, null);
    echo add_test('IT Personality 2a', null, '2,50', '0', null, null);
    echo $table_end;

    // TODO: Stijl
?>