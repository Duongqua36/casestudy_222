<?php require_once 'src/View/Bootstrap/header.php'?>
<div>
    <div>
        <div>
            ADD PRODUCTS
        </div>
        <div>
            <div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">products_name</label>
                        <input type="text" name="products_name">
                        <?php if (isset($errors['products_name'])): ?>
                            <p><?php echo $errors['products_name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">salePrice</label>
                        <input type="text" name="salePrice">
                        <?php if (isset($errors['asalePrice'])): ?>
                            <p><?php echo $errors['salePrice'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">price</label>
                        <input type="text" name="price">
                        <?php if (isset($errors['price'])): ?>
                            <p><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">img</label>
                        <input type="file" name="img">
                        <?php if (isset($errors['img'])):?>
                            <p><?php echo $errors['img'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">status</label>
                        <input type="text" name="status">
                        <?php if (isset($errors['status'])): ?>
                            <p><?php echo $errors['status'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit">Save</button>
                    <a href="index.php" type="button">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
//var_dump($errors['img']);die('aaaaaaaaaaaa');
