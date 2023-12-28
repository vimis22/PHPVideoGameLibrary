const languageselection = document.getElementById("languageselection");

languageselection.addEventListener("selectionchange",function (){
    const selected = languageselection.selected;
    //Selected skal forbindes med PHP gennem en get eller post.
    function reloadAsGet(){
        var placement = window.location;
        placement.search = "language=" + selected ;
        window.location = placement.protocol + '//' + placement.host + placement.pathname + placement.search;
    }
});

// SRC: https://stackoverflow.com/questions/1225337/javascript-to-reload-the-page-as-get-request
