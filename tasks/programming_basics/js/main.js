// Even voorstellen...
const first_name = 'Jarno',
    last_name = 'Overwijk';
let age = 17;

console.log(`Mijn naam is ${first_name} ${last_name} en ik ben ${age} jaar oud.`);
console.log();

// Bereken prijs van 200 appels á €0,59
const apple_price = 0.59,
    amount = 200,
    sum = apple_price * amount;

console.log(`De prijs van 200 appels á €0,59 is €${sum}.`);
console.log();

// >:)
const please_visit = 'Please visit the HZ University of Applied Sciences.';

// Regex
const mad_science = please_visit.replace(/applied sciences/i, 'Mad Scientists');

console.log(mad_science);