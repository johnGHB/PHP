
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
    }

    public function parseUrl() {
        if(isset($_GET['url'])) {
            return $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
        }
    }
}
