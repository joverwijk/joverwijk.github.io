// Vergelijk waarden met elkaar
const integer = 5;
const float = 5.0;

if (integer == float) {
    console.log("5 is hetzelfde als 5.0");
} else {
    console.log("5 is NIET hetzelfde als 5.0");
}

const integer2 = 10;
const string = "10";

if (integer2 == string) {
    console.log("10 is hetzelfde als \"10\"");
} else {
    console.log("10 is NIET hetzelfde als \"10\"");
}

if (integer2 === string) {
    console.log("10 is ook hetzelfde als \"10\" als er driemaal = wordt gebruikt");
} else {
    console.log("maar 10 is NIET hetzelfde als \"10\" als er driemaal = wordt gebruikt");
}

const integer3 = 20;
const string2 = "Hoe werkt dit?";

if (integer3 == string2) {
    console.log("20 is hetzelfde als \"Hoe werkt dit?\"");
} else {
    console.log("20 is NIET hetzelfde als \"Hoe werkt dit?\"");
}