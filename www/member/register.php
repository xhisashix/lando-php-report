<!DOCTYPE html>
<html lang="ja">
<?php include '../part/head.php'; ?>

<body>
<?php include '../part/header.php'; ?>

<div class="main">
  <div class="content">
    <form action="confirm.php" method="post">
      <table>
        <tr>
          <td>ID</td>
          <td>
            <input type="text" name="id" id="id">
          </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>
            <input type="text" name="password" id="password">
          </td>
        </tr>
      </table>
      <div class="btn_area">
        <button type="reset" class="reset">リセット</button>
        <button>確認画面へ</button>
      </div>
    </form>
  </div>
</div>

</body>