<?php
    include_once 'objects/dal/categoryDal.php';
    include_once 'objects/dal/userDal.php';
    include_once 'objects/dal/productDal.php';
    include_once 'config/database.php';

  class dalFactory {

    public static function factory($modelName){
      $ret = null;

      switch($modelName){
        case 'userDAL':
          $ret = new userDAL();
          $db = new Database();
          $ret->setConnection($db->getConnection());
          break;
        case 'productDAL':
          $ret = new productDAL();
          $db = new Database();
          $ret->setConnection($db->getConnection());
          break;
        case 'categoryDAL':
          $ret = new categoryDAL();
          $db = new Database();
          $ret->setConnection($db->getConnection());
          break;
        default:
        // Broken
      }
      if($ret instanceof ICRUD) {
        return $ret;
      }else {
        // Broken
      }
    }
  }
?>
