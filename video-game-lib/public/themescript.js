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

activateTheme(currentTheme);

// //Det nederste herfra er fra ChatGPT.
// const backgroundpicker = document.getElementById("backgroundpicker");
// const textpicker = document.getElementById("textpicker");
// colorpicker.addEventListener("input",function(){
//     activateTheme(backgroundpicker.value);
//     activateTheme(textpicker.value);
// });
//
