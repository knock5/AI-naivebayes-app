<?php

include('koneksi.php');

// Jumlah data species
$total_set = $conn->query("SELECT * FROM naive_bayes WHERE species = 'setosa'");
$set = mysqli_num_rows($total_set);
$total_ver = $conn->query("SELECT * FROM naive_bayes WHERE species = 'versicolor'");
$ver = mysqli_num_rows($total_ver);
$total_vir = $conn->query("SELECT * FROM naive_bayes WHERE species = 'virginica'");
$vir = mysqli_num_rows($total_vir);

// jumlah species/variable
$var_set = ($set+4);
$var_ver = ($ver+4);
$var_vir = ($vir+4);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sepal_length = $_POST["sl"];
    $sepal_width = $_POST["sw"];
    $petal_length = $_POST["pl"];
    $petal_width = $_POST["pw"];

    // Cek Species setosa
    $tsl_setosa = $conn->query("SELECT * FROM naive_bayes WHERE sepal_length = '$sepal_length' AND species = 'setosa'");
    $h_tsl_setosa = mysqli_num_rows($tsl_setosa);
    $tsw_setosa = $conn->query("SELECT * FROM naive_bayes WHERE sepal_width = '$sepal_width' AND species = 'setosa'");
    $h_tsw_setosa = mysqli_num_rows($tsw_setosa);
    $tpl_setosa = $conn->query("SELECT * FROM naive_bayes WHERE petal_length = '$petal_length' AND species = 'setosa'");
    $h_tpl_setosa = mysqli_num_rows($tpl_setosa);
    $tpw_setosa = $conn->query("SELECT * FROM naive_bayes WHERE petal_width = '$petal_width' AND species = 'setosa'");
    $h_tpw_setosa = mysqli_num_rows($tpw_setosa);

    // Cek Species versicolor
    $tsl_versicolor = $conn->query("SELECT * FROM naive_bayes WHERE sepal_length = '$sepal_length' AND species = 'versicolor'");
    $h_tsl_versicolor = mysqli_num_rows($tsl_versicolor);
    $tsw_versicolor = $conn->query("SELECT * FROM naive_bayes WHERE sepal_width = '$sepal_width' AND species = 'versicolor'");
    $h_tsw_versicolor = mysqli_num_rows($tsw_versicolor);
    $tpl_versicolor = $conn->query("SELECT * FROM naive_bayes WHERE petal_length = '$petal_length' AND species = 'versicolor'");
    $h_tpl_versicolor = mysqli_num_rows($tpl_versicolor);
    $tpw_versicolor = $conn->query("SELECT * FROM naive_bayes WHERE petal_width = '$petal_width' AND species = 'versicolor'");
    $h_tpw_versicolor = mysqli_num_rows($tpw_versicolor);

    // Cek Species versicolor
    $tsl_virginica = $conn->query("SELECT * FROM naive_bayes WHERE sepal_length = '$sepal_length' AND species = 'virginica'");
    $h_tsl_virginica = mysqli_num_rows($tsl_virginica);
    $tsw_virginica = $conn->query("SELECT * FROM naive_bayes WHERE sepal_width = '$sepal_width' AND species = 'virginica'");
    $h_tsw_virginica = mysqli_num_rows($tsw_virginica);
    $tpl_virginica = $conn->query("SELECT * FROM naive_bayes WHERE petal_length = '$petal_length' AND species = 'virginica'");
    $h_tpl_virginica = mysqli_num_rows($tpl_virginica);
    $tpw_virginica = $conn->query("SELECT * FROM naive_bayes WHERE petal_width = '$petal_width' AND species = 'virginica'");
    $h_tpw_virginica = mysqli_num_rows($tpw_virginica);

    // Perhitungan setosa
    $res_sl_setosa = ($h_tsl_setosa+1);
    $res_sw_setosa = ($h_tsw_setosa+1);
    $res_pl_setosa = ($h_tpl_setosa+1);
    $res_pw_setosa = ($h_tpw_setosa+1);
    // Perhitungan versicolor
    $res_sl_versicolor = ($h_tsl_versicolor+1);
    $res_sw_versicolor = ($h_tsw_versicolor+1);
    $res_pl_versicolor = ($h_tpl_versicolor+1);
    $res_pw_versicolor = ($h_tpw_versicolor+1);
    // Perhitungan virginica
    $res_sl_virginica = ($h_tsl_virginica+1);
    $res_sw_virginica = ($h_tsw_virginica+1);
    $res_pl_virginica = ($h_tpl_virginica+1);
    $res_pw_virginica = ($h_tpw_virginica+1);

    // Kalkulasi setosa
    $a_setosa = ($set * $res_sl_setosa * $res_sw_setosa * $res_pl_setosa * $res_pw_setosa);
    $b_setosa = ($tot_data * $var_set * $var_set * $var_set * $var_set);
    // Kalkulasi versicolor
    $a_versicolor = ($ver * $res_sl_versicolor * $res_sw_versicolor * $res_pl_versicolor * $res_pw_versicolor);
    $b_versicolor = ($tot_data * $var_ver * $var_ver * $var_ver * $var_ver);
    // Kalkulasi virginica
    $a_virginica = ($vir * $res_sl_virginica * $res_sw_virginica * $res_pl_virginica * $res_pw_virginica);
    $b_virginica = ($tot_data * $var_vir * $var_vir * $var_vir * $var_vir);

    // Hasil setosa
    $hasil_set = ($a_setosa / $b_setosa);
    $f_hasil_set = number_format($hasil_set, 7);
    // Hasil versicolor
    $hasil_ver = ($a_versicolor / $b_versicolor);
    $f_hasil_ver = number_format($hasil_ver, 7);
    // Hasil virginica
    $hasil_vir = ($a_virginica / $b_virginica);
    $f_hasil_vir = number_format($hasil_vir, 7);

    // Hasil Output
    if (($f_hasil_set > $f_hasil_ver) and ($f_hasil_set > $f_hasil_vir)) {
        $output = 'Setosa';
    } elseif (($f_hasil_ver > $f_hasil_set) && ($f_hasil_ver > $f_hasil_vir)) {
        $output = 'Versicolor';
    } else {
        $output = 'Virginica';
    }

} else {
    $error_msg = "Gagal menampilkan data";
    echo $error_msg;
}