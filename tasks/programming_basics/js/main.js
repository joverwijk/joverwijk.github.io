// geef 'even' of 'oneven' op basis van laatste karakter
function evaluate_number() {
    let value_to_check = document.getElementById("number_to_check").value;

    if (value_to_check.match(/[0-9]/) && value_to_check % 2 == 0) {
        alert("Dit getal is even");
    } else if (value_to_check.match(/[0-9]/) && Math.abs(value_to_check % 2) == 1) {
        alert("Dit getal is oneven");
    } else {
        alert("Dit is geen getal");
    }
}

// Haal het negatieve weg.
function is_cool() {
    let statement = document.getElementById("very_cool");

    let new_statement = statement.innerText = "Programming is so cool!";

    return new_statement;
}

/* 
    Vergelijk 1400 met 'Ik woon in Naboo'

    Dit gaat niet werken, omdat beide waarden niet van hetzelfde type zijn.
*/
function compare_incompatibles() {
    const value = 1400;
    const string = 'Ik woon in Naboo';

    const random_alert = [
        "Ik zei toch dat het niet ging werken?", "*zucht*", "Waarom klik je dan alsnog?",
        "Hoe vaak moet ik nog zeggen dat het niet werkt?", "Soms vraag ik me af of... Nee... 't Is toch al een verloren zaak...",
        ":rolling_eyes:", "Whatever. It was a lost cause anyway.", "*ANGRYNESS INTENSIFIES*",
        "Tja... Als die knop er toch staat...", "Mr./Mrs. Tryhard :slow_clap:", "Error: Did not work.",
        "403: Forbidden", "...", "warn.nearestPerson.using('flashingScreen');", "Ceci n'est pas une same type",
        "Als vliegen achter vliegen vliegen, vliegen vliegen vliegensvlug.", "Nope", "Zeg nou zelf: appels met peren vergelijken is toch ook onzin?",
        "Getting fact checkers...", "0100111001101111011100000110010100100001", "0x4E6F706521",
        "No. Just no.", "!Hetzelfde"
    ]

    let choose_random_alert = random_alert[Math.floor(Math.random() * random_alert.length)];

    if (value == string) {
        alert("Ondanks de verschillende typen werkt dit blijkbaar wel...");
    } else {
        alert("Kan niet vergelijken!\n" + choose_random_alert);
    }
}