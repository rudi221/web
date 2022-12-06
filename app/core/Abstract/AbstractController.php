<?php

namespace App\Core\Abstract;

class AbstractController {

    public function pageload($dir, $view, $variablen){
        ob_start();
        extract($variablen);
        require_once __DIR__ . "/../../Views/$dir/pages/$view.php";
        $content = ob_get_contents();
        ob_end_clean();

        require __DIR__ . "/../../Views/$dir/layouts/main.php";
    }
}

?>