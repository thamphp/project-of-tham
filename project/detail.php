
<?php
require_once'database.php';
require_once "view/layouts/header.php";
?>
    <div class="container">
        <h3>Hiển thị thông tin người dùng</h3>
        id <br>
        <?php echo $category['id']?><br>
        username <br>
        <?php echo $category['username']?><br>
         Password <br>
        <?php echo $category['password']?><br>
         first_name <br>
        <?php echo $category['first_name']?><br>
         last_name <br>
        <?php echo $category['last_name']?><br>
         phone <br>
        <?php echo $category['phone']?><br>
         address <br>
        <?php echo $category['address']?><br>
         email <br>
        <?php echo $category['email']?><br>
         avatar <br>
        <?php echo $category['avatar']?><br>
         jobs <br>
        <?php echo $category['jobs']?><br>
         last_login <br>
        <?php echo $category['last_login']?><br>
         facebook <br>
        <?php echo $category['facebook']?><br>
         status <br>
        <?php echo $category['status']?><br>
        created_at <br>
        <?php echo date("d/m/Y H:i:s", strtotime($category['created_at'])) ?><br>
         updated_at <br>
        <?php echo date("d/m/Y H:i:s", strtotime($category['updated_at'])) ?><br>
        <button class="btn btn-primary"><a href="" style="color: white">Save</a></button>
    </div>
<?php
require_once "view/layouts/footer.php";
?>




