//I had some thought about using localstorage instead of cookies, but I used localstorage since they could be implemented in any browser.
const currentThemeBack = localStorage.getItem("themeBack") || "default";
const currentThemeText = localStorage.getItem("themeText") || "default";
const test = document.getElementById("test");

//The activateTheme is used for providing regular theme through dropdown button.
//An array is used for defining the background-values in the 0th index and text color in the first index.
function activateTheme(themeName){
    const light = ["white","black"];
    const dark = ["black","white"];

    //The switch case is used for selecting between the themes in the dropdown menu.
    switch(themeName){
        case "light":
            setTheme(light);
            break;
        case "dark":
            setTheme(dark);
            break;
    }
}

//The setTheme consists of two variable class names. The first for the text and the second for the background.
//Each class name are iterated through a for-loop, so that each word and element implements the defined theme.
function setTheme(themeName){
    cookies_write(themeName);
    //The variable class names will be assigned through class-elements in the blade.php.files in the layout page.
    //Example: <h1 class="themeText">
    //Example: <div class="themeBack">
    const text = document.getElementsByClassName("themeText");
    const background = document.getElementsByClassName("themeBack");

    //The first for-loop here iterates for the text, so a defined text-color is implemented for each word.
    for(let i = 0; i<text.length; i++){
        text[i].style.color = themeName[1];
    }
    //The second for-loop here iterates for the background, so a defined background-color is implemented for each page.
    for(let i = 0; i<background.length; i++){
        background[i].style.backgroundColor = themeName[0];
    }

    //EXPERIMENTAL CODE WITH COOKIES UNDER DEVELOPMENT:
    //document.body.style.backgroundColor = "white";
    //text.style.color = "black";
    //document.body.style.backgroundColor = "black";
    //text.style.color = "white";
}

//The cookies_read function implements the background color if it is defined in the colorpicker, otherwise a default color is defined.
function cookies_read(){
    test.value = currentThemeBack + " " + currentThemeText;
    if(currentThemeBack.length > 0) {
        const theme = [currentThemeBack,currentThemeText];
        setTheme(theme);
    }
    else activateTheme("dark");

    //EXPERIMENTAL CODE WITH COOKIES UNDER DEVELOPMENT:
    /*if(document.cookie.startsWith("background")) let color = document.cookie;
    else let color = "none";*/
    /*let color = document.cookie;
    if(color==null){
        activateTheme("light");
    }else{
        const colorsplit = color.split(";");
        const split_background = colorsplit[0].split("=");
        const split_text = colorsplit[1].split("=");
        const split_colorpicker = [split_background[1],split_text[1]];
        setTheme(split_colorpicker);
    }*/
}

//The cookies_write function makes sure, that the selected themeText and themeBack is saved in the respective places of the arrays in the localstorage.
function cookies_write(themeName){
    localStorage.setItem("themeBack", themeName[0]);
    localStorage.setItem("themeText", themeName[1]);

    //EXPERIMENTAL CODE WITH COOKIES UNDER DEVELOPMENT:
    /*const background_string = "background="+themeName[0]+";";
    const text_string = "text="+themeName[1];
    const colorpicker_string = background_string+text_string;
    document.cookie = colorpicker_string;*/
}
//EXPERIMENTAL CODE WITH COOKIES UNDER DEVELOPMENT:
//activateTheme(currentTheme);

//This small line of cookies_read() implements the function.
cookies_read();

