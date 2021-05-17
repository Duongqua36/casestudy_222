<div>
    <div>
        <div>
            Thêm mới khách hàng
        </div>
        <div>
            <div>
                <form action="" method="post">
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name">
                        <?php if (isset($errors['name'])): ?>
                            <p><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">Age</label>
                        <input type="text" name="age">
                        <?php if (isset($errors['age'])): ?>
                            <p><?php echo $errors['age'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">adress</label>
                        <input type="text" name="address">
                        <?php if (isset($errors['address'])): ?>
                            <p><?php echo $errors['address'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">PhoneNumber</label>
                        <input type="text" name="phone">
                        <?php if (isset($errors['phone'])): ?>
                            <p><?php echo $errors['phone'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email">
                        <?php if (isset($errors['email'])): ?>
                            <p><?php echo $errors['email'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit">Save</button>
                    <a href="index.php" type="button">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>