<?php require_once 'src/View/Bootstrap/header.php'?>
<style>
    th , td{
        border: 1px solid;
        text-align: left;
        padding: 8px;
    }
    button{
        background: #1c7430;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
</style>
<form  action="index.php?page=search_products" class="form-inline my-2 my-lg-0" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<!--<a href="index.php?page=add_products">ADD</a>-->
<table class="table-list" style="border: 1px solid" >
<!--    <a href="index.php?page=add_products">ADD</a>-->
    <tr>
    <th>stt</th>
    <th>products_id</th>
    <th>products_name</th>
    <th>salePrice</th>
    <th>price</th>
    <th>img</th>
    <th>status</th>
    <th>Action</th>

</tr>
    <?php foreach ($products as $key=> $product ):?>

    <tr>
        <td><?php echo ++$key ?></td>
       <td> <a href="index.php?page=products" <?php echo $product['products_id']?>>

            <?php  echo 'DH-'.$product['products_id'] ?>
        </a>
        </td>
        <td><?php echo $product['products_name']?></td>
        <td><?php echo $product['salePrice']?></td>
        <td><?php echo $product['price'] ?></td>
        <td>
            <img style="width: 50px" src="img/<?php echo $product['img'] ?> ">


        </td>
        <td><?php echo $product['status'] ?></td>
        <td>
            <a href="./index.php?page=delete_products&id=<?php echo  $product['products_id']; ?>"
               class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xoá?')">DELETE</a>
            <a  href="./index.php?page=edit_products&id=<?php echo $product['products_id']; ?>"
                class="btn btn-primary" >UPDATE</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
