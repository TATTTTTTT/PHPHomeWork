<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購買書頁面</title>
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="251"><img src="pic/book1.gif" width="246" height="333" /></td>
    <td width="278">超圖解 Arduino 互動設計入門 第3版 <br />
      <br />
      作者：趙英傑著<br />
      書號：F6799<br />
      ISBN：9789863123682<br />
      建議售價：680 元<br />
    附件：附1片光碟片</td>
    <td width="248"><img src="pic/book2.gif" width="246" height="333" /></td>
    <td width="223">第一次學 Python 就上手！ <br />
      <br />
      作者：陳惠貞<br />
      書號：FS717<br />
      ISBN：9789863124375<br />
    建議售價：480 元</td>
  </tr>
  <tr>
    <td align="center" colspan="2" name="Car1" id="Car1" ><a href = "book.php?Car1=true".$shopcar1>加入購物車</a></td>
    <td align="center" colspan="2" name="Car2" id="Car2" ><a href = "book.php?Car2=true".$shopcar2>加入購物車</a></td>
  </tr>
  <tr>
    <td  align="center" colspan="4"> <a href = cd.php?page>購買CD</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
session_start();
// 檢查 session 是否存在計數器，如果沒這行他會跳出Warning....
if (!isset($_SESSION['click_count'])) {
  $_SESSION['click_count'] = 0;
}
// 檢查car1文字 確認是否有被點擊
if (isset($_GET['Car1'])) {
  //有就增加
  $_SESSION['click_count']++;
}
// 輸出
//echo $_SESSION['click_count'];
//這裡是檢查car2是否有被點擊
if (isset($_GET['Car2'])) {
  $_SESSION['click_count2']++;
}
// 輸出
//echo $_SESSION['click_count2'];
?>
</body>
</html>
