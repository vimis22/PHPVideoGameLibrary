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

