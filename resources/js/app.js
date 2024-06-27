import "./bootstrap";
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";



$(document).ready(function() {
    $(".dropdown-toggle").dropdown();

    // Gestione del "Select All"
    $("#select-all").click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
});