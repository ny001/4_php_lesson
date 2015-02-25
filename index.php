<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>情報収集</title>
  </head>
  <body>
    <form action="check.php" metod="post">
      <p>名前<br>
        <input type="text" name="name"><br>
      </p>
      <p>パスワード<br>
        <input type="password" name="password"><br>
      </p>
      <p>性別<br>
        <input type="radio" name="sex" value="1">男性
        <input type="radio" name="sex" value="2">女性
        <input type="radio" name="sex" value="3">回答しない
      </p>
      <p>性格<br>
        <select name="pref">
        <option value="1">明るい</option>
        <option value="2">暗い</option>
        <option value="3">普通</option>
        <option value="4">普通ってなに！</option>
        </select>
      </p>
      <p>趣味<br>
        <input type="checkbox" name="hobby[]" value="1">ネット
        <input type="checkbox" name="hobby[]" value="2">読書
        <input type="checkbox" name="hobby[]" value="3">ショッピング
        <input type="checkbox" name="hobby[]" value="4">サイクリング
        <input type="checkbox" name="hobby[]" value="5">投資
        <br>
      </p>
      <p>備考<br>
        <textarea name="note" cols="40" rows="5"></textarea>
      </p>
      <p><input type="submit" name="submit" value="送信！">
    </form>
  </body>
</html>
