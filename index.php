<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
    </style>
</head>
<body>
    <table><tr><th>X</th><th>Текст</th></tr><tr class="temp"><td><?php $x = rand(350, 420)/10; echo $x; ?></td><td><?php if($x < 37.7) { echo "Здоров!"; } elseif ($x > 37.7) { echo "Болен!"; } else { echo "Что-то не здоровится..."; } ?></td></tr></table>
</body>
</html>