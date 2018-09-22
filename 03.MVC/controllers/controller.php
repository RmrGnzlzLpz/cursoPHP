<?php

class MvcController {

    /*
     * Llamada a la plantilla
     */
    public function plantilla() {
        include "views/template.php";
    }

    /*
     * Interacción del usuario
     */
    public function enlacesPaginasController() {
        $enlace = $_GET["action"];
    }
}