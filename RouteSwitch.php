<?php abstract class RouterSwitch {

    protected function home() {
        return __DIR__ . '/pages/home/index.php';
    }
    protected function login() {
        return __DIR__ . '/pages/login/index.php';
    }
    protected function candidatura() {
        return __DIR__ . '/pages/candidatura/index.php';
    }

    protected function cargo(){
        return __DIR__ . '/pages/cargo/index.php';
    }
    protected function empresa(){
        return __DIR__ . '/pages/empresa/index.php';
    }
    protected function recrutador(){
        return __DIR__ . '/pages/recrutador/index.php';
    }
    
    protected function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/pages/not-found.html';
    }

}