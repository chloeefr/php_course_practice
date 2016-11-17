<?php
    include_once 'objects/dal/dalFactory.php';
    class productController {
        public static function AddProduct($product){
            $ICRUD = dalFactory::factory('productDAL');

            return $ICRUD->create($product);

        }
        public static function getAllProducts($from_record_num, $records_per_page) {
            $ICRUD = dalFactory::factory('productDAL');

            return $ICRUD->readAll($from_record_num, $records_per_page);

        }
        public static function getCategoryName($categoryId) {
            $ICRUD = dalFactory::factory('categoryDAL');
            return $ICRUD->readName($categoryId);
        }
    }
