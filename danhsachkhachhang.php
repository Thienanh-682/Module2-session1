
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%
    }
    th,td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
    <table border="1px solid black">
        <caption><h1>Danh Sách Khách Hàng</h1></caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Địa Chỉ</th>
        </tr>

        <?php
        $customerlist = array(
            "1" => array("ten" => "Lưu Đức Thiên Anh",
                "ngaysinh" => "2001-08-20",
                "diachi" => "Nghệ An",
            ),
            "2" => array("ten" => "Phạm Hữu Minh",
                "ngaysinh" => "2001-09-20",
                "diachi" => "Nghệ An",
            ),
            "3" => array("ten" => "Trần Ngọc Dương",
                "ngaysinh" => "1993-08-21",
                "diachi" => "Nghệ An",
            ),
            "4" => array("ten" => "Trần Mạnh Hiệp",
                "ngaysinh" => "1995-08-22",
                "diachi" => "Ninh Bình",
            ),
            "5" => array("ten" => "Lê Tấn Đạt",
                "ngaysinh" => "1998-08-17",
                "diachi" => "Hà Nội",
            )
        );
        ?>

        <?php
        foreach($customerlist as $key => $values){
            echo "<tr >";
            echo "<td>".$key."</td>";
            echo "<td>".$values['ten']."</td>";
            echo "<td>".$values['ngaysinh']."</td>";
            echo "<td>".$values['diachi']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>



