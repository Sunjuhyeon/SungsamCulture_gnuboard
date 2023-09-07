<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="py-5">
    <?php
       $title_arr = explode('|', $bo_subject);
    ?>
    <div class="title">
        <h2><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $title_arr[0]; ?></a></h2>
        <p><?php echo $title_arr[1]; ?></p>
        <a class="viewmore" href="<?php echo get_pretty_url($bo_table); ?>">VIEW ALL</a>
    </div>
    <ul class="noticelist d-md-flex mb-0">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
      <?php   if ($list[$i]['subject']){ ?>
        <li class="col-md-4">
            <div class="notice-wrapper">
                <?php
                
                echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\">";
                echo "<h3>".$list[$i]['wr_subject']."</h3>";
                echo "<div>".$list[$i]['wr_content']."</div>";
                echo "<span>".$list[$i]['datetime']."</span>";
                echo "</a>";
                ?>
            </div>
        </li>
        <? } ?>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
</div>
