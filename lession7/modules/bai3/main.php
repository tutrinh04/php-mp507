<?php
$sql = "SELECT * FROM `nhan`";
$result = mysqli_query($conn, $sql);
$list_users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_users[] = $row;
    }
}
?>
<?php get_header(); ?>
<a class="add_new" href="?mod=bai3&act=add">Thêm nhân viên</a>
<p>Danh sách nhân viên</p>
<form action="" method="POST">
    <table border="1" class="table_data">
        <thead>
        <tr>
            <td>id</td>
            <td>fullname</td>
            <td>phone</td>
            <td>adrees</td>
            <td>email</td>
        </tr>
        </thead>
        <?php foreach ($list_users as $nv) {
            ?>
            <tr>
                <td><?php echo $nv['id'];?></td>
                <td><?php echo $nv['fullname'];?></td>
                <td><?php echo $nv['phone'];?></td>
                <td><?php echo $nv['addr'];?></td>
                <td><?php echo $nv['email'];?></td>
            </tr>
            <?php
        } ?>

        </tbody>
    </table>
</form>
<?php get_footer(); ?>
<style>
    .table_data {
        width: 100%;
    }

    .table_data thead tr td {
        font-weight: bold;
    }

    .table_data tr td {
        border-bottom: 2px solid #333;
        padding: 8px 15px;
    }
</style>