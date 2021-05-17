
<?php //var_dump($product);?>
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Cập nhật thông tin sản phẩm
        </div>
        <div class="card-body">
            <div class="col-12">
                <form enctype="multipart/form-data"  method="post" action="./index.php?page=edit_products&id=<?php echo $product['products_id'] ?>">
                    <input type="hidden" name="id" value="<?php echo $product['products_id']; ?>"/>
                    <div class="mb-3">
                        <label class="form-label">products_name	</label>
                        <input type="text" value="<?php echo $product['products_name']; ?>" class="form-control" name="products_name">
                        <?php if (isset($errors['products_name      '])): ?>
                            <p class="text-danger"><?php echo $errors['products_name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">salePrice</label>
                        <input type="text" value="<?php echo $product['salePrice']; ?>" class="form-control" name="salePrice">
                        <?php if (isset($errors['salePrice'])): ?>
                            <p class="text-danger"><?php echo $errors['salePrice'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="text" value="<?php echo $product['price']; ?>" class="form-control" name="price">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <img src=img/"<?php echo $product['img']?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">img</label>
                        <input  type="file" value="<?php echo $product['img']; ?>" class="form-control" name="img">
                            <p class="text-danger"></p>
                        <?php //var_dump($errors['img']);?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">status</label>
                        <input type="text" value="<?php echo $product['status']; ?>" class="form-control" name="status">
                        <?php if (isset($errors['status'])): ?>
                            <p class="text-danger"><?php echo $errors['status'] ?></p>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>