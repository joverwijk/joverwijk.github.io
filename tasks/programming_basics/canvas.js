/* Onderstaande code maakt een diamant */
function drawDiamond() {
    var canvas = document.getElementById("drawable_canvas"); // vind element
    var draw = canvas.getContext("2d");
    // reset canvas, voor het geval dat
    draw.clearRect(0, 0, canvas.width, canvas.height);
    console.log("Canvas gereset");
    draw.beginPath();
    //           X   Y
    draw.moveTo(250,500);
    console.log("Cursor verplaatst naar (250,500)");
    draw.strokeStyle="#00FF00";
    draw.lineTo(500,250);
    draw.lineTo(250,0);
    draw.lineTo(0,250);
    draw.lineTo(250,500);
    console.log("Te tekenen lijnen en te gebruiken kleur geconfigureerd");
    draw.stroke();
    console.log("Diamant getekend!");
}