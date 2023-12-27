import './bootstrap';

function changePage(button) {
    button.addEventListener("click", function() {
        var url = button.dataset.route;
        window.location.href = url;
    });
}

function goBack(button) {
    button.addEventListener("click", function(){
        window.history.back();
    });
}

document.addEventListener("DOMContentLoaded", function () {
    //Category buttons
    var strategyButton = document.getElementById("strategyButton");
    var drivingRacingButton = document.getElementById("drivingRacingButton");
    var actionButton = document.getElementById("actionButton");
    var shootingButton = document.getElementById("shootingButton");
    var puzzleButton = document.getElementById("puzzleButton");

    //Top bar buttons
    var logo = document.getElementById("logo");
    var newsButton = document.getElementById("newsButton");
    var profileButton = document.getElementById("profileButton");

    //Misc. buttons
    var backButton = document.getElementById("backButton");

    if (strategyButton) {
        changePage(strategyButton);
    }

    if (drivingRacingButton) {
        changePage(drivingRacingButton);
    }

    if (actionButton) {
        changePage(actionButton);
    }

    if (shootingButton) {
        changePage(shootingButton);
    }

    if (puzzleButton) {
        changePage(puzzleButton);
    }

    if(logo) {
        changePage(logo);
    }

    if(newsButton) {
        changePage(newsButton);
    }

    if(profileButton) {
        changePage(profileButton);
    }

    if(backButton) {
        goBack(backButton);
    }

});
