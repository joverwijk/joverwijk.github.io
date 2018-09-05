/* Maak navigatiebalk responsief */
function show_nav_dropdown() {
    var dropdown_button = document.getElementById("responsive_nav");
    if (dropdown_button.className === "nav_js") {
        dropdown_button.className += " nav_responsive";
    } else {
        dropdown_button.className = "nav_js";
    }
}