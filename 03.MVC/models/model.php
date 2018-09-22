<?php

class EnlacesPaginas {

    public function enlacesPaginasModel($enlaces) {
        if ($enlaces == "inicio" || $enlaces == "nosotros" || $enlaces == "servicios" || $enlaces == "contactenos") {
            $module = "views/modules/".$enlaces.".php";
        } else {
            $module = "views/modules/inicio.php";
        }
        return $module;
    }

}