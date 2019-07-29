<?php
$sql = "SELECT * FROM `customer_name`";
$result = mysqli_query($conn, $sql);
$list_users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_users[] = $row;
    }
}
foreach ($list_users as &$us){
    $us['url_delete']="?mod=bai1&act=delete&id={$us['id']}";
}
unset($us);
?>
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
<?php
get_header();
?>
<div class="content">
    <a class="add_new" href="?mod=bai1&act=add">Thêm thành viên</a>
    <p>Danh sách thành viên</p>
    <table class="table_data">
        <thead>
        <tr>
            <td>id</td>
            <td>ho ten</td>
            <td>xoa</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($list_users as $us) {
            ?>
            <tr>
                <td><?php echo $us['id']; ?></td>
                <td><?php echo $us['hoten']; ?></td>
                <td><a onclick="return confirm('Ban co that su muon xoa!')" href="<?php  echo $us['url_delete']; ?>">xoa</a></td>
            </tr>
            <?php
        }
        ?>
        </tbody><!---->
    </table>
</div>
<?php
get_footer();
?>


