<?php
  class dalFactory {
    public static function factory($modelName){
      switch($modelName){
        case 'userDAL':
          $ret = new userDAL();
          break;
        case 'productDAL':
          $ret = new ProductDAL();
          break;
        case 'categoryDAL':
          $ret = new categoryDAL();
          break;
        default:
        // Broken
      }
      if($ret instanceof abstractModel) {
        return $ret;
      }else {
        // Broken
      }
    }
  }
?>
