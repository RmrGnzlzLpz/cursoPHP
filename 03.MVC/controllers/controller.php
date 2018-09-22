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
        if (isset($_GET["action"])) {
            $enlaces = $_GET["action"];
        } else {
            $enlaces = "inicio";
        }
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlaces);
        include $respuesta;
    }
}