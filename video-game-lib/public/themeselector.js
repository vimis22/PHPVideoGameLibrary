//The defined variables are defined as id of elements, so that they can be used later inside the addEventListeners.
const themeSelect = document.getElementById("themeSelect");
const backgroundpicker = document.getElementById("backgroundpicker");
const textpicker = document.getElementById("textpicker");
const colorized_button = document.getElementById("colorized_button");

//themeSelect.addEventListener will be used for the dropdown menu in the themebar.blade.php page where the dropdown will apply the regular defined themes.
themeSelect.addEventListener("change", () => {
    localStorage.setItem("theme", themeSelect.value);
    activateTheme(themeSelect.value);
});

//EXPERIMENTAL DEVELOPMENT OF COOKIES:
//themeSelect.value = currentTheme;

//colorzied_buttonNow will created an actionevent for the colorpicker submit button in the themebar page.
colorized_button.addEventListener("click", () => {
    const colorpicker = [backgroundpicker.value,textpicker.value];
    setTheme(colorpicker);
});

