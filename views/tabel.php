<?php include('../handler/koneksi.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data AI Naive Bayes</title>

    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="header">
    <a href="../index.php" class="btn-back">&laquo; Kembali</a>
    <h2>Data Naive Bayes</h2>
</div>

<div class="content-flex">
    <table class="table-wrap">
        <tr class="table-row">
            <th class="table-data">ID</th>
            <th class="table-data">Sepal Length</th>
            <th class="table-data">Sepal Width</th>
            <th class="table-data">Petal Length</th>
            <th class="table-data">Petal Width</th>
            <th class="table-data">Species</th>
        </tr>


        <?php if ($res_all_data->num_rows > 0) {
            while ($row = $res_all_data->fetch_assoc()) {
                echo "<tr class='table-row'>";
                echo "<td class='table-data'>" . $row['id'] . "</td>";
                echo "<td class='table-data'>" . $row['sepal_length'] . "</td>";
                echo "<td class='table-data'>" . $row['sepal_width'] . "</td>";
                echo "<td class='table-data'>" . $row['petal_length'] . "</td>";
                echo "<td class='table-data'>" . $row['petal_width'] . "</td>";
                echo "<td class='table-data'>" . $row['species'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
        } ?>
    </table>
</div>

</body>
</html>