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
    //           X   Y
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

function drawSquare() {
    def_val('reset');
    console.log("Canvas gereset");
    def_val('draw').beginPath();
    //            X   Y
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