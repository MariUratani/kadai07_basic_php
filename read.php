<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>社員旅行アンケート結果</title>
</head>

<body>
<h1>社員旅行アンケート結果</h1>
  <table border="1">
    <tr>
      <th>回答日時</th>
      <th>名前</th>
      <th>Eメール</th>
      <th>第1希望</th>
      <th>第2希望</th>
      <th>第3希望</th>
    </tr>
    <?php
    $file = fopen("data.txt", "r");
    while (!feof($file)) {
      $line = fgets($file);
      if ($line) {
        list($timestamp, $name, $email, $choices) = explode(",", $line);
        $choices = explode("|", $choices);
        echo "<tr>";
        echo "<td>$timestamp</td>";
        echo "<td>$name</td>";
        echo "<td>$email</td>";
        echo "<td>{$choices[0]}</td>";
        echo "<td>{$choices[1]}</td>";
        echo "<td>{$choices[2]}</td>";
        echo "</tr>";
      }
    }
    fclose($file);
    ?>
  </table>

</body>
</html>