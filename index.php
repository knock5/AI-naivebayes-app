<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Naive Bayes</title>

    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="header-main">
    <h2>INPUT DATA - NAIVE BAYES</h2>
</div>

<div class="content-flex">
    <div class="wrap-input">
        <form action="views/process_view.php" method="post">
            <table>
                <tr>
                    <td class="form-item">
                        <label for="sl">Sepal Length</label>
                    </td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <input type="text" name="sl">
                    </td>
                </tr>
                <tr>
                    <td class="form-item">
                        <label for="sw">Sepal Width</label>
                    </td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <input type="text" name="sw">
                    </td>
                </tr>
                <tr>
                    <td class="form-item">
                        <label for="pl">Petal Length</label>
                    </td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <input type="text" name="pl">
                    </td>
                </tr>
                <tr>
                    <td class="form-item">
                        <label for="sw">Petal Width</label>
                    </td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <input type="text" name="pw">
                    </td>
                </tr>
            </table>

            <div class="wrap-btn">
                <input class="btn-enter" type="submit" value="Enter">
            </div>
        </form>
    </div>
</div>

<div class="wrap-btn">
    <a href="./views/tabel.php" class="btn-tabel">Lihat Data Tabel</a>
</div>


</body>
</html>