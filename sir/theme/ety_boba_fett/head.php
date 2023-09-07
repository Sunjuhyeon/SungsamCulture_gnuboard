<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');

// 팝업추가
if(defined('_INDEX_')) {
    include G5_BBS_PATH.'/newwin.inc.php';
}

?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-------------------------- 네비게이션 -------------------------->
<?php include_once(G5_THEME_PATH.'/navication.php');?>

<div
<?php if(defined('_INDEX_')) { ?>
		class="w-100"
	<?php }else{?>
		class="container-lg"
	<?php } ?>
>



