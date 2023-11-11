import './bootstrap';

function changePage(button) {
    button.addEventListener("click", function() {
        var url = button.dataset.route;
        window.location.href = url;
    });
}

document.addEventListener("DOMContentLoaded", function () {
    var strategyButton = document.getElementById("strategyButton");
    var drivingRacingButton = document.getElementById("drivingRacingButton");
    var actionButton = document.getElementById("actionButton");
    var shootingButton = document.getElementById("shootingButton");

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


});
