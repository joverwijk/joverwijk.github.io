function setup() {
    let current_action = document.getElementById("operation_dropdown").value;

    if (current_action === 'calculating') {
        return document.getElementById("str", "bool").style.display = 'none',
            document.getElementById("calc").style.display = 'block';
    } else if (current_action === 'strings') {
        return document.getElementById("calc", "bool").style.display = 'none',
            document.getElementById("str").style.display = 'block';
    } else if (current_action === 'boolean') {
        return document.getElementById("calc", "str").style.display = 'none',
            document.getElementById("bool").style.display = 'block';
    } else {
        alert('Geen geldige actie!');
    }
}

function calculate() {
    let action = document.getElementById("operator").value;
    let value1 = document.getElementById("calc_1").value;
    let value2 = document.getElementById("calc_2").value;

    value1 = Number(value1);
    value2 = Number(value2);

    if (action == 'add') {
        alert(value1 + value2);
    } else if (action == 'sub') {
        alert(value1 - value2);
    } else if (action == 'times') {
        alert(value1 * value2);
    } else if (action == 'split') {
        alert(value1 / value2);
    } else {
        alert("Geen geldige operator geselecteerd");
    }
}

function strings() {
    let action = document.getElementById("str_operator").value;
    let value1 = document.getElementById("string").value;
}