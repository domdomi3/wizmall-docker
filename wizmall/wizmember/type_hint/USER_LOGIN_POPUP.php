<?
$MEMBER_SKIN = "BASIC";
?>
<html>

<head>

<title>::::: 이벤트뉴스를 방문해 주셔서 감사합니다.:::::</title>

<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">

<style type="text/css">



<!--



a:link {  font-family: "굴림", "굴림체"; font-size: 9pt; color: 5D5D5D; text-decoration: none}



a:visited {  font-family: "굴림", "굴림체"; font-size: 9pt; color: #666666; text-decoration: none}



a:active {  font-family: "굴림", "굴림체"; font-size: 9pt; color: #E50101; text-decoration: underline}



a:hover {  font-family: "굴림", "굴림체"; font-size: 9pt; color: E50101; text-decoration: underline}







.txt {  font-family: "굴림", "굴림체"; font-size: 9pt; color: #333333; line-height: 15pt}



-->



</style>

</head>



<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="414" border="0" cellspacing="0" cellpadding="0" height="254" class="txt">

  <tr> 

    <td colspan="5" height="111"><img src="images/login_img01.gif" width="414" height="111"></td>

  </tr>
<FORM method=post action='./LOG_CHECK.php'> 
<input type=hidden name=where_log value='<?=$query?>'><!-- 로그인되는 위치 --> 
<input type=hidden name=sort value='<?=$going?>'>
<input type=hidden name=pt value='<?=$pt?>'> <!-- 성인 혹은 기타 -->
<input type="hidden" name="ispopup" value="yes"> <!-- 팝업이면 로그인후 팝업창 닫음 -->

  <tr> 

    <td colspan="3" align="right"><INPUT TYPE=radio NAME="Grade" VALUE="10" CHECKED tabindex=1>

      <font color="#666666">개인회원</font> &nbsp; 

      <INPUT TYPE=radio NAME="Grade" VALUE="5" tabindex=2>

      <font color="#666666">기업회원</font></td>

    <td width="10" rowspan="3">&nbsp;</td>

      <td width="170" rowspan="3" valign="bottom"><input type="image" src="images/login_img03.gif" width="48" height="55" border="0" onfocus="this.blur()" tabindex=3></td>

  </tr>

  <tr> 

    <td width="82" align="right"><img src="images/login_img05.gif" width="11" height="9"></td>

    <td rowspan="2" width="7"></td>

    <td width="145"> 

      <input type="text" name="wizmemberID" size="20" maxlength="30"  style="border:1 solid #cccccc" tabindex=3>

    </td>

  </tr>

  <tr> 

    <td width="82" align="right"><img src="images/login_img04.gif" width="52" height="9"></td>

    <td width="145"> 

      <input type="password" name="wizmemberPWD" size="20" maxlength="30"  style="border:1 solid #cccccc" tabindex=4>

    </td>

  </tr>

  <tr> 

    <td colspan="5" height="68"><img src="images/login_img02.gif" width="414" height="68" usemap="#Map" border="0"></td>

  </tr>
</form>
</table>

<map name="Map"> 
  <area shape="rect" coords="87,5,166,26" href="javascript: void(window.open('./ID_SEARCH.php','WizFormMailler','height=254, width=414'));" tabindex=6>
  <area shape="rect" coords="86,30,166,48" href="javascript: void(window.open('./PASS_SEARCH.php','WizFormMailler','height=300, width=414'));" tabindex=7>
</map>
</body>

</html>

