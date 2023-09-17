<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
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

img {
    width: 200px;
    height: 200px;
    object-fit: cover;
}
    </style>
</head>
<body>
<table>
  <tr>
    <th>Номер</th>
    <th>Картинки</th>
  </tr>
  <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {$a = $_POST["a"];}
for ($i = 1; $i <= $a; $i++) {
    echo "<tr><td>{$i}</td><td><img src='./images/img_{$i}.jpg'></td></tr>";
}?>
</table>

</body>
</html>