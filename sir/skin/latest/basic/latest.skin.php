<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가



$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="swiper mySwiper topad">
    <div class="swiper-wrapper">   
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
       <div class="swiper-slide">       
            <?php
            echo "<a href=\"".$list[$i]['wr_link1']."\"> ";
            echo $list[$i]['subject'];
            echo "</a>";
            ?>
       </div>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?> 
    </div>
</div>


