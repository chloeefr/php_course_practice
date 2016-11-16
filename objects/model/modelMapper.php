<?php
  public static function mapUserModel(){
    $users = modelFactory::factory('User');

    $users->title = $_POST['title'];
    $users->first_name = $_POST['first_name'];
    $users->last_name = $_POST['last_name'];
    $users->client_type = $_POST['client_type'];
    $users->dob = $_POST['dob'];

    return $users;
  }

  public static function mapProductModel(){
    $product = modelFactory::factory('Product');

    $product->name = $_POST['name'];
  	$product->price = $_POST['price'];
  	$product->description = $_POST['description'];
  	$product->category_id = $_POST['category_id'];

    return $product;

  }

  public static function mapCategoryModel(){
    $category = modelFactory::factory('Category');

    $category->name = $_POST['name'];

    return $category;
  }

 ?>
