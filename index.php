<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>社員旅行アンケート</title>
  <link rel="stylesheet" href="style.css">

  <!-- 名前、Eメール、第1希望が未入力の場合にアラートを表示し、フォームの送信を中止する -->
  <script>
    function validateForm() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var choice1 = document.getElementById("choice1").value;

      if (name === "" || email === "" || choice1 === "") {
        alert("名前、Eメール、第1希望は必須入力です。");
        return false;
      }

      if (!email.includes("@")) {
        alert("有効なEメールアドレスを入力してください。");
        return false;
      }

      var choice2 = document.getElementById("choice2").value;
      var choice3 = document.getElementById("choice3").value;

      var message = "アンケート結果\n\n" +
        "名前: " + name + "\n" +
        "Eメール: " + email + "\n" +
        "第1希望: " + choice1 + "\n" +
        "第2希望: " + choice2 + "\n" +
        "第3希望: " + choice3 + "\n\n" +
        "この内容で送信してよろしいですか？";

      return confirm(message);
    }
  </script>
</head>

<body>
  <div class="container">
    <h1>社員旅行アンケート</h1>
    <form action="write.php" method="post" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="name">名前:</label>
        <input type="text" name="name" id="name" required>
      </div>
      <div class="form-group">
        <label for="email">Eメール:</label>
        <input type="email" name="email" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
        <!-- <input type="email" name="email" id="email" required> -->
      </div>
      <div class="form-group">
        <label for="choice1">第1希望:</label>
        <input type="text" name="choice1" id="choice1" required>
      </div>
      <div class="form-group">
        <label for="choice2">第2希望:</label>
        <input type="text" name="choice2" id="choice2">
      </div>
      <div class="form-group">
        <label for="choice3">第3希望:</label>
        <input type="text" name="choice3" id="choice3">
      </div>
      <input type="submit" value="回答" class="btn">
    </form>
  </div>
</body>

</html>