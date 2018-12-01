/* ALGEMEEN */

function random_int(min, max) {
    min = Math.ceil(min);
    max = Math.ceil(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

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

/* LOOPS */
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
console.log("Fibonaccireeks");

let fib_a = 1;
let fib_b;
let j = 0;

while (j <= 10) {
    Number(fib_a);
    Number(fib_b);

    if (fib_b == null) {
        console.log(fib_a);
        console.log(fib_a);
        fib_b = fib_a + fib_a;
        console.log(fib_b);
    } else {
        fib_b = fib_a + fib_b;
        console.log(fib_b);
        fib_a = fib_b - fib_a;
    }
    j++;
}

// opdracht 3
console.log("Tel getallen in array op");

const array = [2, 4, 8, 9, 12, 13];
let sum = 0;

for (let k = 0; k < array.length; k++) {
    sum += array[k];
}
console.log(sum);

/* FUNCTIES */
// opdracht 1
function fibonacci(num) {
    let fibonacci_1 = 1;
    let fibonacci_2;

    for (i = 0; i < num; i++) {
        Number(fibonacci_1);
        Number(fibonacci_2);

        if (fibonacci_2 == null) {
            fibonacci_2 = 0;
        }

        fibonacci_2 = fibonacci_1 + fibonacci_2;
        fibonacci_1 = fibonacci_2 - fibonacci_1;
        console.log(fibonacci_2);
    }
}

// opdracht 2
function countdown(year) {
    let i = 10;
    let timer = setInterval(function(){
        console.log(i);
        i = i - 1;
        if (i <= -1) {
            clearInterval(timer);
            console.log(`Happy ${year}!`);
        }
    }, 1000);
}

// opdracht 3
/*
    Bij het 'hoisten' worden variabelen als eerste gedeclareerd door de compiler,
    daarna de functie zelf en daarna pas eventuele functieaanroepen. Dit is een
    declaratie.

    Als een functie als variabele wordt gedeclareerd (aka expressie), wordt eerst
    de variabele gehoist, daarna de functieaanroep en dáárna pas de functie. Hierdoor
    onstaat een Reference-/TypeError, omdat de variabele niet gedefinieerd is.
*/

// Declaratie
declaration = 'Ik word, als declaratie, gehoist!';

hoisted_declaration();

function hoisted_declaration() {
    console.log(declaration);
}

// Expressie (tijdelijk niet-werkend)
/* hoisted_expression();

const hoisted_expression = function hoisted_fuction() {
    console.log('Ik word, als expressie, gehoist!');
} */

/* ARRAYS */

// opdracht 1
function random_lap_time() {
    const lap_rounds = [
        2.99, 3.00, 3.01, 4.01, 2.79, 2.88, 3.10, 4.12
    ];

    let r = Math.floor(Math.random() * lap_rounds.length); // r = random_round

    console.log(lap_rounds[r].toFixed(2));
}

// opdracht 2
function show_records_list() {
    const records = [
        [
            "The Who - Pinball Wizard", "Rolling Stones - Exile on main street",
            "Police - Message in a bottle"
        ],
        [
            "De Dijk - Alle 40 Goed", "Het Goede Doel - Belgie", "Doe Maar - skunk"
        ]
    ];
    for (let i = 0; i < records[0].length; i++) {
        console.log(records[0][i]);
    }
    for (let i = 0; i < records[1].length; i++) {
        console.log(records[1][i]);
    }
}

// opdracht 3
/**
 * .filter() werkt beter, omdat je veel minder hoeft te typen om te bereiken wat
 * je ook kan met een for-loop.
 */
function filterable(value) {
    return value <4;
}

function show_lap_rounds_less_than_four() {
    const lap_rounds = [
        2.99, 3.00, 3.01, 4.01, 2.79, 2.88, 3.10, 4.12
    ];

    let filtered = lap_rounds.filter(filterable);

    console.log(filtered);
}

/* INTRO IN OBJECTEN */

console.log();
console.log("OBJECTEN!");

// opdracht 1
// Naamgeving is vrij simpel: lap_x, waar x een nummer is
const lap_times = {
    lap_1: 55.99,
    lap_2: 63.00,
    lap_3: 63.01,
    lap_4: 54.01,
    lap_5: 62.79,
    lap_6: 52.88,
    lap_7: 53.10,
    lap_8: 54.12
}

console.log(lap_times);

// opdracht 2 & 3
// hours_per_week is uitgaande van 9-5
const teachers = [
    {
        teacher: "Loek",
        profession: "teacher",
        brand: "Linux",
        hours_per_week: 32,
        salary: 14
    },
    {
        teacher: "Daan",
        profession: "teacher",
        brand: "Arduino",
        hours_per_week: 32,
        salary: 16
    },
    {
        teacher: "Rimmert",
        profession: "teacher",
        brand: "Apple",
        hours_per_week: 24,
        salary: 15
    }
];

for (let i = 0; i < teachers.length; i++) {
    console.log(`I have a ${teachers[i].profession} named ${teachers[i].teacher} and he likes to work on a(n) ${teachers[i].brand}.`);
    console.log(`${teachers[i].teacher} earns €${teachers[i].salary} per hour. He works ${teachers[i].hours_per_week} hours a week.`);
}

/* DOM SCRIPTING I: Algemeen */
// opdracht 1
function calc_average() {
    let total = 0;
    for (let i = 0; i < 4; i++) {
        // selecteer laatste element van tabelrij
        let course = document.getElementById("course" + (Number(i) + 1)).lastElementChild.innerHTML;
        total = Number(total) + Number(course);
    }
    let average = Number(total) / 4;
    course_table = document.getElementById("course_table");
    let average_row = course_table.insertRow();
    let average_cell = average_row.insertCell(0);
    average_cell.innerHTML = "<b>GEMIDDELDE</b>: " + Math.round(average * 10) / 10;
}

// opdracht 2
function highlight_even_courses() {
    // selecteer de klassen met regex
    let courses = document.querySelectorAll('[class^="course"]');
    for (let i = 0; i < courses.length; i++) {
        let j = Number(i) + 1;
        if (j % 2 == 0 && j <= 7) {
            courses[j].style.backgroundColor = "#DDD";
        }
    }
}

// opdracht 3
function create_image_element() {
    let previous_image = document.getElementById("dom_image");
    // kies willekeurig getal door middel van random_int()
    let rnum_image = random_int(0, 992);
    const image_url = "https://picsum.photos/400/?image=" + rnum_image;

    const append_element = document.getElementById("image_to_be_generated");

    if (previous_image == null) {
        let new_element = document.createElement("img");
        new_element.id = "dom_image";
        new_element.src = image_url;
        append_element.appendChild(new_element);
    } else {
        previous_image.src = image_url;
    }
}

/* DOM SCRIPTING II: Event Handling */
// Opdracht 1

// ZIE /tasks/programming_basics/js/games/clicker.js


// Opdracht 2
// set-up
// Check if page has loaded. If not, wait
window.addEventListener('load', errands);

let errand_list = [];
let errand_object = {};

function errands() {
    let errand_add = document.getElementById("errand_add");

    errand_add.addEventListener('click', function(event) {
        // voorkom POST-gedrag
        event.preventDefault();

        // maak object om vervolgens uit te lezen
        let errand_item = document.getElementById("errand_item").value;
        let errand_price = document.getElementById("errand_price").value;

        errand_object["errand_item"] = errand_item;
        errand_object["errand_price"] = errand_price;

        errand_list.push(errand_object);

        console.log(errand_list);

        // krijg de tabel
        let table = document.getElementById("errand_table");

        // voeg rij toe
        let row = table.insertRow();
        
        // voeg cellen toe
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);

        // verwijderknop
        let errand_delete = document.createElement("button");
        errand_delete.innerHTML = "verwijderen"
        errand_delete.onclick = delete_row(event);

        // totale prijs
        let errand_total_price = document.getElementById("errand_total_price");
        let total_price = 0

        // for-loop voor voorwerpen
        for (let i = 0; i < errand_list.length; i++) {
            cell1.innerHTML = errand_list[i].errand_item;
            cell2.innerHTML = errand_list[i].errand_price;
            cell3.innerHTML = errand_delete;

            total_price = Number(total_price) + Number(errand_list[i].errand_price);
            total_price = Math.round(total_price * 100) / 100;
            errand_total_price.innerHTML = total_price;
        }
    });

    // functie om de verwijderknop te laten werken
    function delete_row(event) {
        let errand_row = event.target.parentNode.parentNode;
        let table = document.getElementById("errand_table");

        if (errand_row == !null) {
            table.removeChild(errand_row);
        }
    }
}