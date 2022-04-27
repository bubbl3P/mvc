<h1>
    Danh Sách Sinh Viên
</h1>
<a href="?action=create">Thêm Sinh Viên</a>

<table border = "1" width="100%">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
    </tr>
    <?php if (isset($result)) {
        foreach ($result as $each){ ?>
        <tr>
            <td><?php echo $each['ma']?></td>
            <td><?php echo $each['ten']?></td>
        </tr>
        <?php }
    } ?>

</table>