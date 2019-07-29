<?php
$sql = "SELECT * FROM `account`";
$result = mysqli_query($conn, $sql);
$list_users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_users[] = $row;
    }
}
?>
<?php get_header(); ?>
<!--<a class="add_new" href="?mod=bai3&act=add">Thêm nhân viên</a>-->
<p>Danh sách tai khoan</p>
<form action="" method="POST">
    <table border="1" class="table_data">
        <thead>
        <tr>
            <td>id</td>
            <td>username</td>
            <td>password</td>
        </tr>
        </thead>
        <?php foreach ($list_users as $user) {
            ?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['password'];?></td>
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

