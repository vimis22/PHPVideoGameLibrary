const themeSelect = document.getElementById("themeSelect");
const backgroundpicker = document.getElementById("backgroundpicker");
const textpicker = document.getElementById("textpicker");
const colorized_button = document.getElementById("colorized_button");

themeSelect.addEventListener("change", () => {
    localStorage.setItem("theme", themeSelect.value);
    activateTheme(themeSelect.value);
});
//themeSelect.value = currentTheme;

//Now we are going to write the actionevent for colorpicker submit button.
colorized_button.addEventListener("click", () => {
    const colorpicker = [backgroundpicker.value,textpicker.value];
    setTheme(colorpicker);
});

function cookies_read(){
let color = document.cookie;
const colorsplit = color.split(";");
const split_background = colorsplit[0].split("=");
const split_text = colorsplit[1].split("=");
const split_colorpicker = [split_background[1],split_text[1]];
setTheme(split_colorpicker);
}

function cookies_write(themeName){
    const background_string = "background="+themeName[0]+";";
    const text_string = "text="+themeName[1];
    const colorpicker_string = background_string+text_string;
    document.cookie = colorpicker_string;
}








colorizer = "#000000";

var background_value = "#FFFFFF";
var text_value = "#000000";

var background_change = "#FFFFFF";
var text_changed = "#000000";

var colorizer = [background_value,text_value];
