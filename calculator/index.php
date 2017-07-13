<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
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

    <form id="form" method="POST" action='calculator.php'><br><br>
        <div class="form-group row">
            <div class="col-xs-2">

                <label for="first">Первое число:</label> <?php echo ' <input type="text" class="form-control" 
                name="first" value="' . htmlspecialchars($result) . '"/>' ?>

                <label for="second">Второе число:</label> <input type="text" class="form-control" name="second"/>
            </div>
        </div>
        <span class="badge">   <p><input type="radio" name="operation" checked value='+'/>Сложение</p></span>
        <span class="badge">   <p><input type="radio" name="operation" value='-'/>Вычитание</p></span>
        <span class="badge">   <p><input type="radio" name="operation" value='*'/>Произведение</p></span>
        <span class="badge">   <p><input type="radio" name="operation" value='/'/>Деление</p></span>
        <span class="badge">   <p><input type="radio" name="operation" value='%'/>Процент</p></span>
        <span class="badge">   <p><input type="radio" name="operation" value='log()'/>Логарифм</p></span><br><br>
        <div class="btn-group">
            <p><input class="btn" type='submit' name='calculation' value='Вычислить'></p>
        </div>
        <div class="alert alert-success">
            <strong>  <?php echo "Результат вычислений : $result"; ?></strong>
        </div>
    </form>
</div>
</body>
</html>
