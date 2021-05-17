<main role="main" class="main-content">
    <h2>Cập nhật thông tin khách hàng</h2>
    <div class="container-fluid">
        <form method="POST" action="http://localhost/DemoCase/?url=PhoneController/edit/<?php echo $phone->id; ?>">
            <input type="hidden" name="id" value="<?php echo $phone->id; ?>"/>
            <div class="form-group">
                <label>Name</label>
                <input type="name" name="name" value="<?php echo $phone->phone_name; ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Price</label>
                <textarea name="price" class="form-control"><?php echo $phone->price; ?></textarea>
            </div>
            <div class="form-group">
                <label>Tittle</label>
                <textarea name="tittle" class="form-control"><?php echo $phone->tittle; ?></textarea>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control"><?php echo $phone->description; ?></textarea>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <textarea name="quantity" class="form-control"><?php echo $phone->quantity; ?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary"/>
                <a href="index.php" class="btn btn-default">Cancel</a>
            </div>
        </form>
<!--<div class="col-12 col-md-12 mt-2">-->
<!--    <div class="card">-->
<!--        <div class="card-header">-->
<!--            Cập nhật thông tin khách hàng-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--            <div class="col-12">-->
<!--                <form method="post" action="./index.php?page=edit_customer&id=--><?php //echo $customer->id ?><!--">-->
<!--                    <input type="hidden" name="id" value="--><?php //echo $customer->id; ?><!--"/>-->
<!--                    <div class="mb-3">-->
<!--                        <label class="form-label">name</label>-->
<!--                        <input type="text" value="--><?php //echo $customer->name; ?><!--" name="name" class="form-control">-->
<!--                        --><?php //if (isset($errors['name'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['name'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                    <div class="mb-3">-->
<!--                        <label class="form-label">age</label>-->
<!--                        <input type="text" value="--><?php //echo $customer->age; ?><!--" class="form-control" name="age">-->
<!--                        --><?php //if (isset($errors['age'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['age'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                    <div class="mb-3">-->
<!--                        <label class="form-label">address</label>-->
<!--                        <input type="text" value="--><?php //echo $customer->address; ?><!--" class="form-control" name="address">-->
<!--                        --><?php //if (isset($errors['address'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['address'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                    <div class="mb-3">-->
<!--                        <label class="form-label">phone</label>-->
<!--                        <input type="text" value="--><?php //echo $customer->phone; ?><!--" class="form-control" name="phone">-->
<!--                        --><?php //if (isset($errors['address'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['address'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                    <div class="mb-3">-->
<!--                        <label class="form-label">address</label>-->
<!--                        <input type="text" value="--><?php //echo $customer->address; ?><!--" class="form-control" name="address">-->
<!--                        --><?php //if (isset($errors['address'])): ?>
<!--                            <p class="text-danger">--><?php //echo $errors['address'] ?><!--</p>-->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                    <button type="submit" class="btn btn-primary">Lưu</button>-->
<!--                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->