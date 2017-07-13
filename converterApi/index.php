<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Конвертер Валют</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <h1>Конвертер Валют</h1>
    <form id="form" action="converter.php" method="post">
        <div class="form-group row">
            <div class="col-xs-2">
                <label for="second"> Введите суму в UAH :</label> <input type="text" class="form-control"
                                                                   name="amount"><br><br>
            </div>
        </div>
        <span class="badge">  <input type="radio" name="convert" value="USD" checked> USD<br></span>
        <span class="badge">  <input type="radio" name="convert" value="EUR"> EUR<br></span>
        <span class="badge"> <input type="radio" name="convert" value="RUR"> RUB<br></span>
        <div class="btn-group">

            <input class="btn" type="submit" value="Конвертировать">
        </div><br><br><br><br>
            <div class="alert alert-success">
          <strong > <?php echo "Курс " . $convert . "=" . $cur . " " . "UAH";?>
          <br>
            <?php echo "Сумма конвертации : " . $sum . " " . $convert; ?></strong>
            </div>
            </div>

        </div>
    </form>

</div>
</body>
</html>
