<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>結帳頁面</title>
</head>

<body>
<table border="2" >
<tr>
    <td colspan="4"  align="center" style="font-weight: bold;">您購買的商品資訊如下</td>
</tr> 
<tr>
    <td style="font-weight: bold;">項次</td>
    <td style="font-weight: bold;">產品代號</td>
    <td align="center" style="font-weight: bold;">產品名稱</td>
    <td style="font-weight: bold;">價格</td>
</tr> 
<tr>
    <td>1</td>
    <td>book1</td>
    <td>超圖解 Arduino 互動設計入門 第3版 </td>
    <td>680</td>
</tr>
<tr>
    <td>2</td>
    <td>book2</td>
    <td>第一次學 Python 就上手！</td>
    <td>480</td> 
</tr>
<tr>
    <td>3</td>
    <td>cd1</td>
    <td>LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A) </td>
    <td>328</td>
</tr>
<tr>
    <td>4</td>
    <td>cd2</td>
    <td>李千娜 / 愛 到站了 </td>
    <td>459</td>
</tr>
<tr>
    <td colspan="4" align ="right">總金額：<?php session_start(); echo $_SESSION['click_count']*680 +$_SESSION['click_count2']*480 +$_SESSION['click_count3']*328 +$_SESSION['click_count4']*459; ?></td>
</tr>



</table>
</form>
</body>
</html>
