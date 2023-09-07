<nav class="navbar fixed-top navbar-expand-lg navbar-white bg-white fixed-top flex-wrap p-0">
	<?php echo latest('basic', 'adtop', 3, 100 ); ?>
  	<div class="container mainhead">
		<a class="navbar-brand" href="<?php echo G5_URL?>">
			<img src="<?php echo G5_THEME_URL; ?>/img/logo.gif" alt="logo">
		</a>
		<button class="navbar-toggler navbar-dark navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInRight">
	  		<ul class="navbar-nav ml-auto">
			<div class="submenuBg"></div>
			<?php
			$sql = " select *
						from {$g5['menu_table']}
						where me_use = '1'
						  and length(me_code) = '2'
						order by me_order, me_id ";
			$result = sql_query($sql, false);
			$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
			$menu_datas = array();
			for ($i=0; $row=sql_fetch_array($result); $i++) {
				$menu_datas[$i] = $row;

				$sql2 = " select *
							from {$g5['menu_table']}
							where me_use = '1'
							  and length(me_code) = '4'
							  and substring(me_code, 1, 2) = '{$row['me_code']}'
							order by me_order, me_id ";
				$result2 = sql_query($sql2);
				for ($k=0; $row2=sql_fetch_array($result2); $k++) {
					$menu_datas[$i]['sub'][$k] = $row2;
				}
			}
			$i = 0;
			foreach( $menu_datas as $row ){
				if( empty($row) ) continue; 
			?>			
			<?php if($row['sub']['0']) { ?>
				<li class="nav-item  megamenu-li position-relative">
					<a class="nav-link  ks4 f16" href="<?php echo $row['me_link']; ?>"  target="_<?php echo $row['me_target']; ?>">
					<?php echo $row['me_name'] ?>
					</a>
						<!-- 서브 -->
						<ul class="submenu" >
							<?php
							// 하위 분류
							$k = 0;
							foreach( (array) $row['sub'] as $row2 ){

							if( empty($row2) ) continue; 

							?>
							<li>
								<a class="ks4 f15 fw4" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>
							</li>

							<?php
							$k++;
							}   //end foreach $row2

							if($k > 0)
							echo '</ul>'.PHP_EOL;
							?>
							<?php }else{?>
								<li class="nav-item">
								<a class="nav-link ks4 f16" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
								</li>
							<?php }?>
					</li>

					<?php
					$i++;
					}   //end foreach $row
				
					if ($i == 0) {  ?>
						<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
					<?php } ?>
	  		</ul>
		</div>
  	</div>
</nav>