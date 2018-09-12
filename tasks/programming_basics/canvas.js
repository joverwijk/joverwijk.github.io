/* Standaardwaarden */
function def_val(input) {
    const canvas = document.getElementById("drawable_canvas"); // vind element
    const draw = canvas.getContext("2d");
    const reset = draw.clearRect(0, 0, canvas.width, canvas.height);

    if (input === 'canvas') {
        return canvas;
    } else if (input === 'draw') {
        return draw;
    } else if (input === 'reset') {
        return reset;
    } else {
        console.error("Geen waarde voor 'input' in functie 'def_val'");
        console.log("");
    }
}

/* Willekeurige waarde tussen 0 en 500 (credits: MDN) */
function randomInt(min, max) {
    var min = 0;
    var max = 500;

    min = Math.ceil(min);
    max = Math.ceil(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

/* Willekeurige kleur (credits: https://stackoverflow.com/questions/1484506/random-color-generator) */
function randomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';

    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

/* Reset canvas */
function reset() {
    def_val('reset');
    console.log("Canvas gereset");
    console.log("");
}

/* Onderstaande code maakt een diamant */
function drawDiamond() {
    def_val('reset');
    console.log("Canvas gereset");
    def_val('draw').beginPath();
    //                      X   Y
    def_val('draw').moveTo(250,500);
    console.log("Cursor verplaatst naar (250,500)");
    def_val('draw').strokeStyle="#00FF00";
    def_val('draw').lineTo(500,250);
    def_val('draw').lineTo(250,0);
    def_val('draw').lineTo(0,250);
    def_val('draw').lineTo(250,500);
    console.log("Te tekenen lijnen en te gebruiken kleur geconfigureerd");
    def_val('draw').stroke();
    console.log("Diamant getekend!");
    console.log("");
}

/* Maak een vierkant */
function drawSquare() {
    def_val('reset');
    console.log("Canvas gereset");
    def_val('draw').beginPath();
    //                      X   Y
    def_val('draw').moveTo(400,400);
    console.log("Cursor verplaatst naar (400,400)");
    def_val('draw').strokeStyle="#FF0000";
    def_val('draw').lineTo(400,100);
    def_val('draw').lineTo(100,100);
    def_val('draw').lineTo(100,400);
    def_val('draw').lineTo(400,400);
    console.log("Te tekenen lijnen en te gebruiken kleur geconfigureerd");
    def_val('draw').stroke();
    console.log("Vierkant getekend!");
    console.log("");
}

function drawWhatever() {
    def_val('reset');
    console.log("Canvas gereset");
    def_val('draw').beginPath();
    //                      X   Y
    def_val('draw').moveTo(250,250);
    console.log("Cursor verplaatst naar (250,250)");
    def_val('draw').strokeStyle = randomColor();

    for (let i = 0; i < 50; i++) {
        def_val('draw').lineTo(randomInt(), randomInt());
    }

    def_val('draw').lineTo(250,250);
    console.log("Te tekenen lijnen en te gebruiken kleur geconfigureerd");
    def_val('draw').stroke();
    console.log("Willekeurige 'vorm' getekend!");
    console.log("");
}