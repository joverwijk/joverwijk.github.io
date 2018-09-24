/* TYPES & VARIABLES */

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

/* CONDITIONALS */
// voldoende voor PB met if...else-structuur
function passed_pb_ifelse_statement() {
    let mark = document.getElementById("mark_ifelse").value;
    let mark_number = Number(mark);

    if (mark_number < 6) {
        alert("Onvoldoende voor Programming Basics");
    } else if (mark_number >= 6 && mark_number < 7) {
        alert("Voldoende voor Programming Basics");
    } else if (mark_number >= 7 && mark_number <= 9) {
        alert("Goed voor Programming Basics");
    } else if (mark_number > 9 && mark_number <= 10) {
        alert("Uitmuntend voor Programming Basics")
    } else {
        alert("Dit is geen getal");
    }
}

// voldoende voor PB met switch-structuur
function passed_pb_switch_statement() {
    let mark = document.getElementById("mark_switch").value;
    let mark_number = Number(mark);

    switch (true) {
        case (mark_number < 6):
            alert("Onvoldoende voor Programming Basics");
        break;
        case (mark_number >= 6 && mark_number < 7):
            alert("Voldoende voor Programming Basics");
        break;
        case (mark_number >= 7 && mark_number <= 9):
            alert("Goed voor Programming Basics");
        break;
        case (mark_number > 9 && mark_number <= 10):
            alert("Uitmuntend voor Programming Basics");
        break;
        default:
            alert("Dit is geen getal/Wat is dit voor resultaat?!");
    }
}

// het leerkrachtprobleem
function teacher_in_train() {
    let purchased_book = true;
    let job = 'teacher';
    let in_train = false;

    if (purchased_book == true && job == 'teacher' && in_train == true) {
        console.log("Finally I can enjoy my book!");
    } else if (purchased_book == false && job == 'teacher' && in_train == true) {
        console.log("I'm in the train, yet don't have anything to read. :(");
    } else if (purchased_book == true && job != 'teacher' && in_train == true) {
        console.log("Finally I can enjoy my book, even though I'm not a teacher!");
    } else if (purchased_book == true && job == 'teacher' && in_train == false) {
        console.log("It's too busy to read a book!");
    } else if (purchased_book == false && job == 'teacher' && in_train == false) {
        console.log("I don't have a book and am not in the train.");
    } else if (purchased_book == false && job != 'teacher' && in_train == false) {
        console.log("I don't have a book, nor am I a teacher nor am I in the train.");
    } else {
        console.log("What even is this sorcery?");
    }
}

/* LOOPS; TODO: in website verwerken */
// opdracht 1
console.log("Delen door 4");

let i = 0;

while (i <= 40) {
    if (i % 4 == 0) {
        console.log(`${i} is deelbaar door 4`);
    } else {
        console.log(`${i} is niet deelbaar door 4`);
    }
    i++;
}

// opdracht 2
console.log("Fiboniaccireeks");

let j = 1;
let k;
let iterations = 0;

while (iterations <= 10) {
    Number(j);
    Number(k);

    if (k == null) {
        console.log(j);
        console.log(j);
        k = j + j;
        console.log(k);
    } else {
        k = j + k;
        console.log(k);
        j = k - j;
    }
    iterations++;
}

// opdracht 3
console.log("Tel getallen in array op");

let array = [2, 4, 8, 9, 12, 13];
let sum;

for (i = 0; i <= array.length; i++) {
    sum += array[i];
}

console.log(sum);