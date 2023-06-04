<?php
include('../handler/process_data.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Naive Bayes</title>

    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="header">
    <a href="../index.php" class="btn-back">&laquo; Kembali</a>
    <h2>DATA HASIL</h2>
</div>

    <div class="content-data">

        <div class="wrap-res1 box">
            <table class="table1">
                <tr>
                    <th colspan="2" class="table-item">
                        <h4>Jumlah P(H)</h4>
                    </th>
                </tr>
                <tr>
                    <td class="table-item">Setosa</td>
                    <td class="table-item">
                        <?php echo $set . "/" . $tot_data ?>
                    </td>
                </tr>
                <tr>
                    <td class="table-item">Versicolor</td>
                    <td class="table-item">
                        <?php echo $ver . "/" . $tot_data ?>
                    </td>
                </tr>
                <tr>
                    <td class="table-item">Virginica</td>
                    <td class="table-item">
                        <?php echo $vir . "/" . $tot_data ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="wrap-res2 box">
            <table class="table2">
                <tr>
                    <th colspan="3" class="table-item">
                        <h4>Data Input</h4>
                    </th>
                </tr>
                <tr>
                    <td class="table-item">Sepal Length</td>
                    <td class="table-item">
                        <?php echo $sepal_length ?>
                    </td>
                </tr>
                <tr>
                    <td class="table-item">Sepal Width</td>
                    <td class="table-item">
                        <?php echo $sepal_width ?>
                    </td>
                </tr>
                <tr>
                    <td class="table-item">Petal Length</td>
                    <td class="table-item">
                        <?php echo $petal_length ?>
                    </td>
                </tr>
                <tr>
                    <td class="table-item">Petal Width</td>
                    <td class="table-item">
                        <?php echo $petal_width ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="wrap-res3 box">
            <table class="table3">
                <tr>
                    <th colspan="5" class="table-item">
                        <h4>Perhitungan</h4>
                    </th>
                </tr>
                <tr>
                    <th class="table-item"></th>
                    <th class="table-item">Setosa</th>
                    <th class="table-item">Versicolor</th>
                    <th class="table-item">Virginica</th>
                </tr>
                <tr>
                    <th class="table-item">Sepal Length</th>
                    <td class="table-item">
                        <?php echo "(" . $h_tsl_setosa . "+1) /" . "(" . $set . "+4)" ?>
                    </td>
                    <td class="table-item">
                        <?php echo "(" . $h_tsl_versicolor . "+1) /" . "(" . $ver . "+4)" ?>
                    </td>
                    <td class="table-item">
                        <?php echo "(" . $h_tsl_virginica . "+1) /" . "(" . $vir . "+4)" ?>
                    </td>
                </tr>
                <tr>
                    <th class="table-item">Sepal Width</th>
                    <td class="table-item">
                        <?php echo "(" . $h_tsw_setosa . "+1) /" . "(" . $set . "+4)" ?>
                    </td>
                    <td class="table-item">
                        <?php echo "(" . $h_tsw_versicolor . "+1) /" . "(" . $ver . "+4)" ?>
                    </td>
                    <td class="table-item">
                        <?php echo "(" . $h_tsw_virginica . "+1) /" . "(" . $vir . "+4)" ?>
                    </td>
                </tr>
                <tr>
                    <th class="table-item">Petal Length</th>
                    <td class="table-item">
                        <?php echo "(" . $h_tpl_setosa . "+1) /" . "(" . $set . "+4)" ?>
                    </td>
                    <td class="table-item">
                        <?php echo "(" . $h_tpl_versicolor . "+1) /" . "(" . $ver . "+4)" ?>
                    </td>
                    <td class="table-item">
                        <?php echo "(" . $h_tpl_virginica . "+1) /" . "(" . $vir . "+4)" ?>
                    </td>
                </tr>
                <tr>
                    <th class="table-item">Petal Width</th>
                    <td class="table-item">
                        <?php echo "(" . $h_tpw_setosa . "+1) /" . "(" . $set . "+4)" ?>
                    </td>
                    <td class="table-item">
                        <?php echo "(" . $h_tpw_versicolor . "+1) /" . "(" . $ver . "+4)" ?>
                    </td>
                    <td class="table-item">
                        <?php echo "(" . $h_tpw_virginica . "+1) /" . "(" . $vir . "+4)" ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="wrap-res4 box">
            <table class="table4">
                <tr>
                    <th colspan="6" class="table-item"></th>
                    <th colspan="2" class="table-item">Hasil</th>
                </tr>
                <tr>
                    <th class="table-item">Setosa</th>
                    <td class="table-item">
                        <?php echo $set . "/" . $tot_data ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_sl_setosa . "/" . $var_set ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_sw_setosa . "/" . $var_set ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_pl_setosa . "/" . $var_set ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_pw_setosa . "/" . $var_set ?>
                    </td>
                    <td class="table-item hasil">
                        <?php echo $a_setosa . "/" . $b_setosa ?>
                    </td>
                    <td class="table-item result">
                        <?php echo $f_hasil_set ?>
                    </td>
                </tr>
                <tr>
                    <th class="table-item">Versicolor</th>
                    <td class="table-item">
                        <?php echo $ver . "/" . $tot_data ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_sl_versicolor . "/" . $var_ver ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_sw_versicolor . "/" . $var_ver ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_pl_versicolor . "/" . $var_ver ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_pw_versicolor . "/" . $var_ver ?>
                    </td>
                    <td class="table-item hasil">
                        <?php echo $a_versicolor . "/" . $b_versicolor ?>
                    </td>
                    <td class="table-item result">
                        <?php echo $f_hasil_ver ?>
                    </td>
                </tr>
                <tr>
                    <th class="table-item">Virginica</th>
                    <td class="table-item">
                        <?php echo $vir . "/" . $tot_data ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_sl_virginica . "/" . $var_vir ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_sw_virginica . "/" . $var_vir ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_pl_virginica . "/" . $var_vir ?>
                    </td>
                    <td class="table-item">
                        <?php echo $res_pw_virginica . "/" . $var_vir ?>
                    </td>
                    <td class="table-item hasil">
                        <?php echo $a_virginica . "/" . $b_virginica ?>
                    </td>
                    <td class="table-item result">
                        <?php echo $f_hasil_vir ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="wrap-res5 box">
            <div class="container-res">
                <h3>Output : <?php echo $output ?></h3>
            </div>
        </div>


    </div>

</body>
</html>