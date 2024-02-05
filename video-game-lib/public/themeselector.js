const themeSelect = document.getElementById("themeSelect");

function implement_ThemeSelector() {
    const themeStylesheetLink = document.getElementById("themeStylesheetLink");
}

themeSelect.addEventListener("change", () => {
    localStorage.setItem("theme", themeSelect.value);
    activateTheme(themeSelect.value);
});

themeSelect.value = currentTheme;

implement_ThemeSelector();
