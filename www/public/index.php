<?php

header('Content-Type: application/json');

require __DIR__.'/prova/vendor/autoload.php';

    $uri = $_SERVER['REQUEST_URI'];
    $method = strtolower($_SERVER['REQUEST_METHOD']);

    if ($uri) {
        $url = explode('/', $uri);
        array_shift($url);

        if ($url[0] === 'api') {
            array_shift($url);

            $controller = 'App\Controller\\'.ucfirst($url[0]).'Controller';
            array_shift($url);

            try {
                echo json_encode(call_user_func_array(array(new $controller, $method), $url));
            } catch (\Exception $e) {
                http_response_code($e->getCode());
                echo json_encode([
                    'status' => 'error',
                    'message' => $e->getMessage(),
                ]);
            }
        }
    }
