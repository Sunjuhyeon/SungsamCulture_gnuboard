<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 210;
$thumb_height = 150;


$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="gallery_total py-5">
    <?php
       $title_arr = explode('|', $bo_subject);
    ?>
    <div class="gallery_title">
        <h2><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $title_arr[0] ?></a></h2>
        <p><?php echo $title_arr[1] ?></p>
        <a class="viewmore" href="<?php echo get_pretty_url($bo_table); ?>">VIEW ALL</a>
    </div>
    <ul class="gallerybox d-md-flex">
    <?php for ($i=0; $i<$list_count; $i++) {
         $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
          ?>
        <li class="col-md-4">
            <?php
          
             //echo $list[$i]['icon_reply']." ";
            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\">";
            echo $img_content;
            echo "<h3>".$list[$i]['wr_subject']."</h3>";
            echo "</a>";
            ?>
        </li>
    <?php }  ?>
    </ul>
</div>
