<?
/* 
제작자 : 폰돌
스킨 : wizboard list skin 
URL : http://www.shop-wiz.com
Email : master@shop-wiz.com
*** Updating List ***
*/

/* VIEW 내용을 DB에서 가져온다 */
//스킨별 추가 프로그램이 필요하면 이곳에서 처리
?>
<SCRIPT>
<!--
document.title = '<?=addslashes($boardview["SUBJECT"]);?>';
//-->
</SCRIPT>
  
<div id="imgLayer" style="display:none;position:absolute;z-index:1000";>
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right"><a href="javascript:closeImgLayer()">닫기[x]</a></td>
    </tr>
    <tr>
      <td><img src="" id="popLayerImg"></td>
    </tr>
  </table>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="5" style="font-family: '굴림', '돋움','Arial';font-size: 12px; color:#666666;line-height:140%">

  <tr>
    <td bgcolor="<?=$Linecolor?>" height="1" width="100%" align="center"></td>
  </tr>
  <tr bgcolor="<?=$Bgcolorl?>">
    <td width="100%" valign="top" height="250"><?
for($i=0; $i < count($boardview["viewAttachedImg"]); $i++){
?>
      <table width="100%" border="0" cellspacing="5">
        <tr>
          <td><?=$boardview["viewAttachedImg"][$i]?>
          </td>
        </tr>
      </table>
      <?
}
?>
      <font class="boardviewcontents">
      <?=$boardview["CONTENTS"];?>
      </font> </td>
  </tr>
   <?if(!strcmp($cfg["wizboard"]["CommentEnable"],"yes")):?>
  <tr bgcolor="<?=$Bgcolorl?>">
    <td height="1" width="43%" align="center">&nbsp;
      <!-- reply start -->
      <? include "./wizboard/skin_reple/".$cfg["wizboard"]["REPLE_SKIN_TYPE"]."/reple.php"; ?>
    </td>
  </tr>
  <?endif;?>
  <tr align="right" bgcolor="<?=$Bgcolors?>">
    <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right"><?if(!strcmp($cfg["wizboard"]["ReplyBtn"],"yes")):?>
            <? echo $board->showBoardIcon('reply');?>
            <? endif;?>
            <?
if ($board->is_admin() || $cfg["wizboard"]["AdminOnly"] != "yes") :
?>
            <? echo $board->showBoardIcon('modify');?>
            <? endif; ?>
            <?
if ($board->is_admin() || $cfg["wizboard"]["AdminOnly"] != "yes") :
?>
            <? echo $board->showBoardIcon('delete');?>
            <? endif; ?>
            <? echo $board->showBoardIcon('recomm');?> <? echo $board->showBoardIcon('print');?>
            <?if($board->listpre["UID"]):?>
            <? echo $board->showBoardIcon('prev');?>
            <?endif; if($board->listnext["UID"]):?>
            <? echo $board->showBoardIcon('next');?>
            <?endif;?>
            <?
if ($board->is_admin() || $cfg["wizboard"]["AdminOnly"] != "yes") :
?>
            <? echo $board->showBoardIcon('write');?>
            <?
endif;
?>
            <? echo $board->showBoardIcon('list');?></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td bgcolor="BEBEBE" height="1" width="43%" align="center"></td>
  </tr>
</table>
