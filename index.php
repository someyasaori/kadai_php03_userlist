<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理</title>
</head>
<body>

<h1>ユーザー管理画面</h1>
<main>
    <h2>新規ユーザー登録</h2>
    <form method="POST" action="insert.php">
        <p>名前：<input type="text" name ="name" id="name"></p>
        <p>LID：<input type="text" name="lid" id="lid"></p>
        <p>LPW：<input type="text" name="lpw" id="lpw"></p>
        <p>管理者<input type="radio" name="kanri_flg" value="0" id="kanri_flg"></p>
        <p>スーパー管理者<input type="radio" name="kanri_flg" value="1" id="kanri_flg"></p>
        <p>退社<input type="radio" name="life_flg" value="0" id="life_flg"></p>
        <p>入社<input type="radio" name="life_flg" value="1" id="life_flg"></p>
        <p><input type="submit" id="submit" value="登録"></p>
    </form>
<p class="all">
    <a href="select.php">登録済みユーザーを表示（編集・削除もこちら）</a>
</p>

</main>
</body>
</html>