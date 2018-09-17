// geef 'even' of 'oneven' op basis van laatste karakter
function evaluate_number() {
    let value_to_check = document.getElementById("number_to_check").value;

    value_to_check = Number(value_to_check);

    if (isNaN(value_to_check)) {
        alert("Dit is geen getal");
    } else if (value_to_check % 2 == 0) {
        alert("Dit getal is even");
    } else {
        alert("Dit getal is oneven");
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

    if (value == string) {
        alert("Ondanks de verschillende typen werkt dit blijkbaar wel...");
    } else {
        alert("Ik zei toch dat het niet ging werken?");
    }
}