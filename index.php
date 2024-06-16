<?php
$Name = "Yu";
$QQ = "2773943729";
$Custom_Url = "localhost";
$QQUrl = "asset/image/logo.webp";
$Subheading = "be your true self";
$Slogan = "每一个人都应该明确自己的方向和位置";
$Color_buttons = [
    ['btname' => '示例1', 'bturl' => 'https://example1.com','btcolor' => '#1e9bff'],
    ['btname' => '示例2', 'bturl' => 'https://example2.com','btcolor' => '#f85d5d'],
	['btname' => '示例2', 'bturl' => 'https://example2.com','btcolor' => '#f85d5d'],
	['btname' => '示例2', 'bturl' => 'https://example2.com','btcolor' => '#f85d5d'],
    ['btname' => '示例3', 'bturl' => 'https://example3.com','btcolor' => '#ff1867']
];
if (!empty($QQ)) {
    $QQUrl =  "http://q.qlogo.cn/headimg_dl?dst_uin={$QQ}&spec=640&img_type=jpg";
}

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>Yuの主页</title>
	<meta charset="UTF-8">
	<link rel="icon" href="./favicon.ico"/>
	<meta http-equiv="Expires" content="0" />
	<meta name='robots' content='index,follow'>
	<meta name='keywords' content='中国,GA,中国GA'>
	<meta http-equiv="Pragma" content="no-cache" />
	<meta name='description' content='中国,GA,中国GA'>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" href="asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="asset/css/iconfont.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" href="https://fastly.jsdelivr.net/gh/volantis-x/cdn-fontawesome-pro@master/css/all.min.css" media="all">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
	<script data-cfasync="false" src="asset/js/feature.js"></script>
	<noscript>
		<link rel="stylesheet" href="asset/css/noscript.css" />
	</noscript>
    <!--科技炫酷按钮-->
    <link rel="stylesheet" type="text/css" href="asset/css/sey.css">
</head>
<body class="is-preload">
	<div id="wrapper">
		<div id="bg"></div>
		<div id="overlay"></div>
		<div id="main">
			<!-- Header -->
			<header id="header">
			<div class="panel-main">
        <div class="panel-main__inner panel-inverted">
		<div class="panel-main__content">
					<div class="ih-item circle effect right_to_left">
						<a class="blog-button">
							<div class="img"> <img src="<?php echo $QQUrl; ?>" alt="img"
									class="js-avatar iUp profilepic header-logo">
							</div>
							<div class="info iUp">
								<div class="info-back">
									<img alt="img" src="asset/image/kl.gif" class="js-avatar profilepic">
								</div>
							</div>
						</a>
					</div>
					<h1 class="panel-cover__title panel-title iUp" style="margin:20px;"><?php echo $Name;?></h1>
					<p class="panel-cover__subtitle panel-subtitle iUp"><?php echo $Subheading;?></p>
					<canvas class="navigation-wrapper iUp" id="canvas" style="width:50%;padding-top:0px;" width="920"
						height="350"></canvas>
					<script src="asset/js/clock.js"></script>
					<hr class="iUp" />
					<!--一言无法显示时的文字-->
					<p id="description" class="panel-cover__description iUp"><?php echo $Slogan;?>
						<strong>-「<?php echo $Name;?>」</strong>
					</p>
                    <div class="navigation-wrapper iUp">
                    <div>
                        <nav class="cover-navigation cover-navigation--primary">
                            <ul class="navigation">
                            <?php
                                foreach ($Color_buttons as $Color_button) {
                                    echo '<li class="navigation__item">';
                                    echo '<a href="' . $Color_button['bturl'] . '" target="_blank" style="--clr:'.$Color_button['btcolor'].';">';
                                    echo '<span>' . $Color_button['btname'] . '</span><i></i></a>';
                                    echo '</li>';
                                }
                            ?>
                            </ul>
                        </nav>
                    </div>
				</div>
        </div>
    </div>
			</header>
			<!-- Footer -->
			<footer id="footer">
				<p>&copy; 2022 - <script>document.write(new Date().getFullYear());</script><a href="<?php echo $Custom_Url;?>" class="active"><?php echo $Name;?></a></p>
			</footer>
		</div>
	</div>
    <script src="https://fastly.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="asset/js/fetch.min.js"></script>
    <script type="text/javascript" src="asset/js/main.js"></script>
</body>
</html>