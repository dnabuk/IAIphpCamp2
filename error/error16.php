<?php
error_reporting(E_ALL);
class Product {
    private $cache;
    public function getName($id, $useCache = false)
    {
        echo 'Pobieram nazwe dla id' . $id;'<br>';
        //w tej metodzie wykonują się bardzo skomplikowane operacje
        if ($useCache) {
            if (!isset($this->$cache)) {
                $this->$cache =$this->_getName($id);
            }

            return $this->$cache[$id];
        }
        return $this->_getName($id);
    }
    private function _getName($id)
    {
        sleep(1);
        return 'Nazwa towaru o id:' . $id;
    }
}

$objProduct = new Product();
foreach (range(1,5) as $id) {
    echo $objProduct->getName($id,true) . '<br>';
}
foreach (range(1,5) as $id) {
    echo $objProduct->getName($id,true) . '<br>';
}
foreach (range(1,5) as $id) {
    echo $objProduct->getName($id,true) . '<br>';
}