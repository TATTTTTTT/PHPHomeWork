<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購買CD頁面</title>
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="251"><img src="pic/cd1.jpg" width="246" height="333" /></td>
    <td width="278"><div>
      <h2 itemprop="name">LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)</h1>
      <h2></h2>
    </div>
      <div>
        <ul>
          <li>發行公司：愛貝克思</li>
          <li>產品編號：KEP17001A</li>
          <li>發行日期：2017/05/16</li>
          <li>媒體形式：CD</li>
          <li>張數：1 張 - 1CD</li>
        </ul>
      </div>
      <div>
        <div>
          <div>
            <ul>
              <li>定價：<em>359</em>元</li>
              <li>優惠價：<strong itemprop="offers" itemscope="" itemtype="http://schema.org/Offer"><strong itemprop="price">328</strong></strong>元</li>
            </ul>
          </div>
        </div>
    </div></td>
    <td width="248"><img src="pic/cd2.jpg" width="246" height="333" /></td>
    <td width="223"><div>
      <h2 itemprop="name">李千娜 / 愛 到站了</h1>
      <h2></h2>
    </div>
      <div>
        <ul>
          <li>發行公司：Universal</li>
          <li>產品編號：8897317</li>
          <li>發行日期：2014/05/16</li>
          <li>媒體形式：CD</li>
          <li>張數：1 張 - 1CD</li>
        </ul>
      </div>
      <div>
        <div>
          <div>
            <ul>
              <li>定價：<strong><strong>459</strong></strong>元</li>
            </ul>
          </div>
        </div>
    </div></td>
  </tr>
  <tr>
    <td align="center" colspan="2" name="Car3" id="Car3" ><a href = "cd.php?Car3=true".$shopcar1>加入購物車</a></td>
    <td align="center" colspan="2" name="Car4" id="Car4" ><a href = "cd.php?Car4=true".$shopcar1>加入購物車</a></td>
  </tr>
  <tr>
    <td  align="center" colspan="4"><a href = total.php?page=>結帳去</a></td>
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
if (!isset($_SESSION['click_count3'])) {
  $_SESSION['click_count3'] = 0;
}
// 檢查car3文字 確認是否有被點擊
if (isset($_GET['Car3'])) {
  //有就增加
  $_SESSION['click_count3']++;
}
// 輸出
//echo $_SESSION['click_count3'];
if (!isset($_SESSION['click_count4'])) {
  $_SESSION['click_count4'] = 0;
}
//這裡是檢查car4是否有被點擊
if (isset($_GET['Car4'])) {
  $_SESSION['click_count4']++;
}
// 輸出
//echo $_SESSION['click_count4'];
?>
</body>
</html>
