<?php
// set page headers
$page_title = "Create User";
include_once "header.php";

// read products button
echo "<div class='right-button-margin'>";
	echo "<a href='index.php' class='btn btn-primary pull-right'>";
		echo "<span class='glyphicon glyphicon-list'></span> Back";
	echo "</a>";
echo "</div>";

// get database connection
include_once 'config/database.php';

$database = new Database();
$db = $database->getConnection();


if($_POST){

  // instantiate product object
  include_once 'objects/users.php';
  $users = new Users($db);

  // set product property values

  $users->title = $_POST['title'];
  $users->first_name = $_POST['first_name'];
  $users->last_name = $_POST['last_name'];
  $users->client_type = $_POST['client_type'];
  $users->dob = $_POST['dob'];

  // create the product
  if($users->create()){
    echo "<div class=\"alert alert-success alert-dismissable\">";
      echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
      echo "User was created.";
    echo "</div>";
  }

  // if unable to create the product, tell the user
  else{
    echo "<div class=\"alert alert-danger alert-dismissable\">";
      echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
      echo "Unable to create User.";
    echo "</div>";
  }
}
?>

<!-- HTML form for creating a product -->
<form action='create_user.php' method='post'>

  <table class='table table-hover table-responsive table-bordered'>

    <tr>
      <td>Title</td>
      <td>
        <select name='title' class='form-control' required>
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
          <option value="Miss">Miss</option>
          <option value="Ms">Ms</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>First Name</td>
      <td><input type='text' name='first_name' class='form-control' required></td>
    </tr>

    <tr>
      <td>Last Name</td>
      <td><input type='text' name='last_name' class='form-control' required></td>
    </tr>

    <tr>
      <td>Client Type</td>
      <td><input type='text' name='client_type' class='form-control' required></td>
    </tr>

    <tr>
      <td>Date of Birth</td>
      <td><input type='date' name='dob' class='form-control' required></td>
    </tr>

    <tr>
      <td></td>
      <td>
        <button type="submit" class="btn btn-primary">
          <span class="glyphicon glyphicon-plus"></span> Create
        </button>
      </td>
    </tr>

  </table>
</form>

<?php
include_once "footer.php";
?>
