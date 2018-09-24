// intro
console.log("Loop time!");

/* WHILE LOOPS */
// print 1-10 in de console
let i = 1;

while (i <= 10) {
    console.log(i);
    i++;
}

// random
console.log("Done!");
console.log();
console.log("I hate Mondays... Yet here I am saying it's Monday... with an exclamation point of all things!");

// print elke letter apart
const monday = 'Het is maandag!';
let j = 0;

while (j <= monday.length - 1) {
    console.log(monday.charAt(j));
    j++;
}

// random
console.log("Monday rant done.");
console.log();
console.log("Geweldig... maar nu omgekeerd!");

// print een woord omgekeerd in de console
const amazing = 'Geweldig';
let reversed = '';
let k = amazing.length;

while (k > 0) {
    reversed += amazing.substring(k - 1, k);
    k--;
}

console.log(reversed);

// random
console.log("En weer in de juiste richting.");
console.log();

/* FOR LOOPS */
// random
console.log("Tijd om weer te tellen!");

// tellen tot tien, alweer
for (let l = 0; l <= 10; l++) {
    console.log(l);
}

// random
console.log("Done!");
console.log();
console.log("'t Is weer maandag... *zucht* :(");

// die maandagen ook altijd...
const monday_again = "'t Is weer maandag...";

for (let m = 0; m <= monday_again.length - 1; m++) {
    console.log(monday_again.charAt(m));
}

// random
console.log("Wanneer is het nu weer 'ns weekend?");
console.log();
console.log("Rekentijd!");

// delen door 3
for (let n = 0; n <= 25; n++) {
    if (n % 3 == 0) {
        console.log(n + ' is deelbaar door drie.');
    } else {
        console.log(n + ' is niet deelbaar door drie, tenzij je van kommagetallen houdt.');
    }
}

// random
console.log("Hersentraining voor vandaag voltooid.");
console.log();
console.log("KTHXBYE");