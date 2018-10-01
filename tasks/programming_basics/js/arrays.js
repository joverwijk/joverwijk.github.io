// maak boodschappenlijst als array
const product_list = [
    'tandenborstel', 'deodorant', 'bakmeel', 'wortels', 'tandpasta', 'krop sla',
    'maggi', 'crokychips', 'wc-papier', 'shampoo'
];

// toon product_list in console
console.table(product_list);

// toon chips
console.log(product_list[7]);

// voeg nieuwe toe aan product_list
let new_product;

function push_to_product_list(new_product) {
    product_list.push(new_product);

    console.table(product_list);
    console.log(`${new_product} toegevoegd.`)
}

// verwijder uit product_list
let remove_product;

function pop_from_product_list(remove_product) {
    product_list.pop(remove_product);

    console.table(product_list);
    console.log(`${remove_product} verwijderd.`)
}

console.log('Eerst een foreach-loop...');
// foreach-loop print alle elementen van product_list in de console
product_list.forEach(function(element) {
    console.log(element);
})

console.log();
console.log('...en nu een for-loop');
// en nu een for-loop
for (let i = 0; i < product_list.length; i++) {
    console.log(product_list[i]);
}

console.log();
console.log('Mapfuncties');

const upper = function(p) {
    return p.toUpperCase();
}

let new_product_list = product_list.map(upper);

console.table(new_product_list);

console.log();
console.log('Index vooraf toevoegen');

let indexed_product_list = [];
let product_string;
for (let i = 0; i < product_list.length; i++) {
    product_string = 'Product ' + (i + 1) + ': ' + product_list[i];

    indexed_product_list.push(product_string);
}

console.table(indexed_product_list);

console.log();
console.log('Door middel van .map()');

let mapped_product_list = product_list.map(function(elem, i) {
    const mapped_product_string = `Product ${i + 1}: ${elem}`;
    return mapped_product_string;
});

console.table(mapped_product_list);

console.log();

const product_prices = [
    2.10, 4.99, 5.60, 0.40, 5.44, 7.33, 2.33
];

let total_price = 0;

function calc_total_price() {
    for (let i = 0; i < product_prices.length; i++) {
        total_price = total_price + product_prices[i];
    }

    console.log(total_price.toFixed(2)); // stupid floating point weirdness

    total_price = 0;
}

function calc_average_price() {
    let average_price = 0;

    for (let i = 0; i < product_prices.length; i++) {
        total_price = total_price + product_prices[i];
    }

    average_price = total_price / product_prices.length;
    console.log(average_price.toFixed(2));

    average_price = 0;
    total_price = 0;
}

function calc_highest_price() {
    let max_price = Math.max.apply(Math, product_prices);

    console.log(max_price);
}