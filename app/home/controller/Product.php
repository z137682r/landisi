namespace app\home\controller;

class Product extends Common{

    public function _initialize(){

        parent::_initialize();

    }

    public function index(){

        return $this->fetch();

    }

}