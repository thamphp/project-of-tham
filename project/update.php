<?php
require_omce'database.php';
if (isset($_GET['id_edit'])) {
    $id = $_GET['id_edit'];

    $querySelect = "SELECT * FROM users WHERE id =  '$id '";
   
    $results = mysqli_query($connection, $querySelect);
    $category = [];
    if (mysqli_num_rows($results) > 0) {
        $categoryArr = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $category = $categoryArr[0];
  
    }
}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $avatar = $_POST['avatar'];
    $jobs = $_POST['jobs'];
    $last_login = $_POST['last_login'];
    $facebook = $_POST['facebook'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];
    $queryUpdate = "UPDATE users
    set `username` = '$username',`password` = '$password',`first_name` = '$first_name',`last_name` = '$last_name',`phone` = '$phone',`address` = '$address',`email` = '$email',`avatar` = '$avatar',`jobs` = '$jobs',`first_login` = '$last_login',`facebook` = '$facebook',`created_at` = '$created_at',`updated_at` = 'updated_at' WHERE id = '$id'";
    $isUpdate = mysqli_query($connection, $queryUpdate);
   if ($isUpdate) {
       echo "update thanh công";
      
   }else{
    echo "update thất bại";
   }
}
?>

    <form  action="" method="POST" >
        <table>
            <tr>
                <td colspan="2">cập nhật thông tin người dùng</td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" id="id_user" value="<?php echo($category['username']) ?>" ></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="text" name="password" id="id_pass" value="<?php echo($category['password']) ?>"></td>
            </tr>
            <tr>
                <td>first_name</td>
                <td><input type="text" name="first_name" value="<?php echo($category['first_name']) ?>"></td>
            </tr>
            <tr>
                <td>last_name</td>
                <td><input type="text" name="last_name" value="<?php echo($category['last_name']) ?>"></td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="text" name="phone" value="<?php echo($category['phone']) ?>"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address" value="<?php echo($category['address']) ?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" value="<?php echo($category['email']) ?>"></td>
            </tr>
            <tr>
                <td>avatar</td>
                <td><input type="text" name="avatar" value="<?php echo($category['avatar']) ?>"></td>
            </tr>
            <tr>
                <td>jobs</td>
                <td><input type="text" name="jobs" value="<?php echo($category['jobs']) ?>"></td>
            </tr>
            <tr>
                <td>last_login</td>
                <td><input type="text" name="last_login" value="<?php echo($category['last_login']) ?>"></td>
            </tr>
            <tr>
                <td>facebook</td>
                <td><input type="text" name="facebook" value="<?php echo($category['facebook']) ?>"></td>
            </tr>
            <tr>
                <td>created_at</td>
                <td><input type="text" name="created_at" value="<?php echo date("Y-m-d H:i:s",strtotime($category['created_at'])) ?>"></td>
            </tr>
            <tr>
                <td>updated_at</td>
                <td><input type="text" name="updated_at" value="<?php echo date("Y-m-d H:i:s",strtotime($category['updated_at'])) ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>