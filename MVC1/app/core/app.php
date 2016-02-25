
<?php
/**
 * Created by PhpStorm.
 * User: JohnMM2014
 * Date: 2/23/16
 * Time: 1:48 PM
 */

class App
{

    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];

    public function _construct()
    {
        $url = $this->parseUrl();

        if(file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->_construct() = $url[0];
            unset($url[0]); //remove from array
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this_method], $this->params);

    }

    public function parseUrl() {
        if(isset($_GET['url'])) {
            return $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
        }
    }
}
