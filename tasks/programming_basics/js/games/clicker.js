/**
 * Dit script is bedoeld voor een klikspelletje. Het zet het spel op in een element
 * met als ID 'click_game'.
 */

// Wacht tot pagina geladen is
window.addEventListener('load', init);

function init() { // START INIT

    const main_div = document.getElementById("click_game");

    function setup() {
        // verwijder startknop
        const start_button = document.getElementById("click_game_start");
        start_button.remove();

        // vergoot de div
        main_div.style.height = "500px";

        // voeg score toe
        let click_game_score = document.createElement("p");
        click_game_score.innerHTML = "<b>PUNTEN:</b></br>";
        click_game_score.id = "click_game_score";
        click_game_score.style.textAlign = "center";

        let click_game_points = document.createElement("label");
        click_game_points.innerHTML = 0;
        click_game_points.id = "click_game_points";
        click_game_points.style.fontSize = "2em";

        click_game_score.appendChild(click_game_points);

        main_div.appendChild(click_game_score);

        // voeg knop toe met breedte van #click_game
        const click_game_button_width = main_div.offsetWidth - 64;
        const click_game_button_height = main_div.offsetHeight - 100;

        let click_game_button = document.createElement("button");
        click_game_button.style.width = click_game_button_width + "px";
        click_game_button.style.height = click_game_button_height + "px";
        click_game_button.id = "add_score";
        click_game_button.classList = "click_game_button";
        click_game_button.innerHTML = "KLIK HIER!";
        click_game_button.addEventListener('click', point_changer);
        click_game_button.addEventListener('click', button_size_changer);

        main_div.appendChild(click_game_button);
    }

    // setup
    let start_button = document.getElementById("click_game_start");
    start_button.addEventListener('click', setup);

} // EINDE INIT

// verhoog puntenaantal (als het goed is, is dit cheat-proof)
function point_changer() {
    let score = document.getElementById("click_game_points");
    let actual_score = document.getElementById("click_game_points");
    let calls;
    if (calls == 0) {
        actual_score.innerHTML = Number(score.innerHTML) + 1;
        calls = 1;
    } else {
        actual_score.innerHTML = Number(actual_score.innerHTML) + 1;
    }
}

function button_size_changer() {
    // verzamel waarden
    let click_button = document.getElementById("add_score");
    let click_button_width = Number(click_button.offsetWidth);
    let click_button_height = Number(click_button.offsetHeight);

    let score = document.getElementById("click_game_points").innerHTML;

    // bereken nieuwe waarden
    let new_width = click_button_width - 10;
    let new_height = click_button_height - 10;

    if (Number(score) % 10 == 0 && Number(score) > 0 && (click_button_width > 20 || click_button_height > 10)) {
        click_button.style.width = new_width + "px";
        click_button.style.height = new_height + "px";
    }
}