<!-- データ登録 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $choices = array($_POST["choice1"], $_POST["choice2"], $_POST["choice3"]);
    $timestamp = date("Y-m-d H:i:s");

    $data = implode(",", array($timestamp, $name, $email, implode("|", $choices)));
    $data .= "\n";

    $file = fopen("data.txt", "a");
    fwrite($file, $data);
    fclose($file);

    //セッション変数に保存し、confirm.phpにリダイレクト
    //   session_start();
    //   $_SESSION["name"] = $name;
    //   $_SESSION["email"] = $email;
    //   $_SESSION["choices"] = $choices;

    // read.phpへのリダイレクトを削除
    // header("Location: read.php");
    // exit();

    // 保存完了のメッセージを表示するHTMLを出力
    // echo "<!DOCTYPE html>";
    // echo "<html lang='ja'>";
    // echo "<head>";
    // echo "  <meta charset='UTF-8'>";
    // echo "  <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    // echo "  <title>アンケート結果保存完了</title>";
    // echo "</head>";
    // echo "<body>";
    // echo "  <h1>アンケート結果の保存が完了しました。</h1>";
    // echo "  <p><a href='read.php'>アンケート結果一覧を表示する</a></p>";
    // echo "  <p><a href='index.php'>アンケートトップに戻る</a></p>";
    // echo "</body>";
    // echo "</html>";
    // exit();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果保存完了</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>アンケート結果の保存が完了しました。</h1>
        <p><a href="read.php" class="btn">アンケート結果一覧を表示する</a></p>
        <p><a href="index.php" class="btn">アンケートトップに戻る</a></p>
    </div>
</body>

</html>