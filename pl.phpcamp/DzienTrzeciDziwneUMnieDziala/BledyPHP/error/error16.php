<?php
error_reporting(E_ALL);
class Product {
    private static $cache;
    public function getName($id, $useCache = false)
    {
        //w tej metodzie wykonują się bardzo skomplikowane operacje
        if ($useCache) {
            if (!isset(self::$cache)) {
                self::$cache =_getName($id);
            }

            return self::$cache;
        }
        return $this->_getName($id);
    }
    private function _getName($id)
    {
        sleep(0.5);
        return 'Nazwa towaru o id:' . $id;
    }
}

$objProduct = new Product();
foreach (range(1,20) as $id) {
    echo $objProduct->getName($id) . '<br>';
}