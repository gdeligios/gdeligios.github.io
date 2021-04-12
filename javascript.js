function openMenu() {
    document.getElementById("menu_icon_line_2").classList.toggle("invisible");
    document.getElementById("menu_icon_line_1").classList.toggle("rotate_clockwise");
    document.getElementById("menu_icon_line_3").classList.toggle("rotate_anticlockwise");
    document.getElementById("menu_button").classList.toggle("press");
    document.getElementById("sidenav_menu").classList.toggle("open");
    document.getElementById("padding_block").classList.toggle("padding_open");
    document.body.classList.toggle("no_scroll");
    document.getElementById("body_dimmer").classList.toggle("dim");
}
