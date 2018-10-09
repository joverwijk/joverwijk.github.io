// Check if page has loaded. If not, wait
window.addEventListener('load', init);

function init() { // START INIT

    // JS DOM
    let errands = document.getElementById("errand_list");

    // Opdracht 1
    let first_errand = errands.firstElementChild;

    first_errand.style.backgroundColor = "#297B45";
    first_errand.style.color = "white";

    // Opdracht 2 & 3
    let prices = [
        {
            "name": "tandenborstel",
            "price": 1.99
        },
        {
            "name": "deodorant",
            "price": 2.49
        },
        {
            "name": "bakmeel",
            "price": 0.99
        },
        {
            "name": "wortels",
            "price": "0.79"
        }
    ];

    function create_errand_table() {
        let table = document.createElement("table");
        for (let i = 0; i < prices.length; i++) {
            let row = table.insertRow(i);
            let cell1 = row.insertCell(0);
            let cell2 = row.insertCell(1);
            cell1.innerHTML = prices[i].name;
            cell2.innerHTML = prices[i].price;
        }
        let total_price = 0;
        for (let j = 0; j < prices.length; j++) {
            total_price = Number(total_price) + Number(prices[j].price);
        }
        let price_row = table.insertRow();
        let price_cell = price_row.insertCell(0);
        price_cell.innerHTML = "<b>TOTAAL</b>: " + Math.round(total_price * 100) / 100;
        const section = document.getElementById("section");
        section.appendChild(table);
    }

    // JS EVENTS
    // Opdracht 1-ish
    const button = document.getElementById("submit");
    button.addEventListener('click', create_errand_table);

    // Opdracht 2 & 3
    const submit_button = document.getElementById("submit_button");
    submit_button.addEventListener('click', dom_writer);

    function dom_writer(event) {
        event.preventDefault();
        let text = document.getElementById("text_input").value;
        if (text == '') {
            // do nothing
        } else {
            let paragraph = document.createElement("p");
            paragraph.innerHTML = text; 
            const section = document.getElementById("section");
            section.appendChild(paragraph);
        }
    }

} // END INIT