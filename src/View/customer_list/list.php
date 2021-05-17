
<style>
    th , td{
        border: 1px solid;
        text-align: left;
        padding: 8px;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    tr:nth-child(even) {
        background-color: #dddddd;

</style>
<a href="index.php?page=add_customers">ADD</a>
<table style="border: 1px solid">
<tr>
    <th>stt</th>
    <th>customer_id</th>
    <th>name</th>
    <th>age</th>
    <th>address</th>
    <th>phonenumber</th>
    <th>email</th>
    <th>Action</th>
</tr>
<?php foreach ($customers as $key => $customer) :?>
<tr>
    <td><?php echo ++$key ?></td>
    <td> <a href="index.php?page=customer" <?php echo $customer['Customer_id']?>>
            <?php  echo 'DH-'.$customer['Customer_id'] ?>
        </a>
    </td>
    <td><?php echo $customer['name']?></td>
    <td><?php echo $customer['age'] ?></td>
    <td><?php echo $customer['address']?></td>
    <td><?php echo $customer['phone']?></td>
    <td><?php echo $customer['email']?></td>
<td>
    <a href="./index.php?page=delete_customers&id=<?php echo $customer->id; ?>"
       class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">DELETE</a>
    <a href="./index.php?page=edit_customers&id=<?php echo $customer->id; ?>"
       class="btn btn-primary btn-sm">UPDATE</a></td>
</td>
</tr>
    <?php endforeach;?>
</table>
