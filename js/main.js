/**
 * Openers (for blog)
 */
function category_opener() {
    let cat_list = document.getElementById("category_list");
    let cat_arrow = document.getElementById("category_arrow");

    if (cat_list.style.display === "none") {
        cat_list.style.display = "block";
        cat_arrow.classList = "fa fa-caret-down";
    } else {
        cat_list.style.display = "none";
        cat_arrow.classList = "fa fa-caret-right";
    }
}

function date_opener() {
    let date_list = document.getElementById("date_list");
    let date_arrow = document.getElementById("date_arrow");

    if (date_list.style.display === "none") {
        date_list.style.display = "block";
        date_arrow.classList = "fa fa-caret-down";
    } else {
        date_list.style.display = "none";
        date_arrow.classList = "fa fa-caret-right";
    }
}

// For months
function month_opener(year_l, year_a) {
    let year_list = document.getElementById(year_l);
    let year_arrow = document.getElementById(year_a);

    if (year_list.style.display === "none") {
        year_list.style.display = "block";
        year_arrow.classList = "fa fa-caret-down";
    } else {
        year_list.style.display = "none";
        year_arrow.classList = "fa fa-caret-right";
    }
}

// https://imgs.xkcd.com/comics/the_history_of_unicode_2x.png