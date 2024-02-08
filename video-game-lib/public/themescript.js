const currentTheme = localStorage.getItem("theme") || "default";

function activateTheme(themeName){
    const light = ["white","black"];
    const dark = ["black","white"];

    switch(themeName){
        case "light":
            setTheme(light);
            break;
        case "dark":
            setTheme(dark);
            break;
    }
}

function setTheme(themeName){
    cookies_write(themeName);
    const text = document.getElementsByClassName("themeText");
    const background = document.getElementsByClassName("themeBack");
    for(let i = 0; i<text.length; i++){
        text[i].style.color = themeName[1];
        //Eksempel på kommentar med text[i] viser at man kan tilføje et tykkelse på teksten.
        //text[i].style.style = themeName[2];
    }
    for(let i = 0; i<background.length; i++){
        background[i].style.backgroundColor = themeName[0];
    }
    //document.body.style.backgroundColor = "white";
    //text.style.color = "black";
    //document.body.style.backgroundColor = "black";
    //text.style.color = "white";
}

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
//activateTheme(currentTheme);
cookies_read();

