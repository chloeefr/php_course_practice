<?php
  class modelFactory {
    public static function factory($modelName){
      switch($modelName){
        case 'User':
          $ret = new User();
          break;
        case 'Product':
          $ret = new Product();
          break;
        case 'Category':
          $ret = new Category();
          break;
        default:
        // There's a problem
      }
      if($ret instanceof abstractModel) {
        return $ret;
      }else {
        // There's a problem
      }
    }
  }
?>
