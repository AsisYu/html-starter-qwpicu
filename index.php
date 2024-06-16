<!DOCTYPE html>
<html>
<head>
    <!-- 基础信息 -->
    <html lang="zh-cmn-Hans">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="force-rendering" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yu裕の主页">
    <meta name="keywords" content="Yu裕,个人主页">
    <meta name="author" content="Yu裕">
    <title>Yuの主页</title>
    <script src="js/debuger.js"></script>
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/iconfont.css">
    <link rel="stylesheet" href="css/dl_1.css">
    <link rel="stylesheet" href="https://fastly.jsdelivr.net/gh/volantis-x/cdn-fontawesome-pro@master/css/all.min.css" media="all">
    <!--科技炫酷按钮-->
    <link rel="stylesheet" type="text/css" href="css/sey.css">
</head>
<?php

// 检查User-Agent头是否存在
if (!isset($_SERVER['HTTP_USER_AGENT'])) {
    // 如果没有User-Agent头，返回错误
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(array('error' => '缺少必要的头部信息'));
    exit;
}

?>
<body class="shell" oncontextmenu=self.event.returnValue=false onselectstart="return false">
    <div id="panel" class="panel-cover" style="background: center center / cover no-repeat rgb(102, 102, 102);"></div>
    <!--天气-->
    <div class="panel-main">
        <div class="panel-main__inner panel-inverted">
            <div class="panel-main__content">
                <div class="ih-item circle effect right_to_left">
                    <a class="blog-button">
                        <div class="img"> <img src="images/qqlogo.jpg" alt="img"
                                class="js-avatar iUp profilepic header-logo">
                        </div>
                        <div class="info iUp">
                            <div class="info-back">
                                <img alt="img" src="images/kl.gif" class="js-avatar profilepic">
                            </div>
                        </div>
                    </a>
                </div>
                <h1 class="panel-cover__title panel-title iUp">Yuyu</h1>
                <p class="panel-cover__subtitle panel-subtitle iUp">be your true self</p>
                <canvas class="navigation-wrapper iUp" id="canvas" style="width:50%;padding-top:0px;" width="920"
                    height="350"></canvas>
                <script src="js/clock.js"></script>
                <hr class="iUp" />
                <!--一言无法显示时的文字-->
                <p id="description" class="panel-cover__description iUp">每一个人都应该明确自己的方向和位置
                    <strong>-「Yu裕」</strong>
                </p>
                <div class="navigation-wrapper iUp">
                    <div>
                        <nav class="cover-navigation cover-navigation--primary">
                            <ul class="navigation">
                                <li class="navigation__item">
                                    <a href="https://www.phantomidc.com" target="_blank"
                                        style="--clr:#1e9bff"><span>上云</span><i></i></a>
                                </li>
                                <li class="navigation__item">
                                    <a href="https://ysclouds10.cn" target="_blank"
                                        style="--clr:#f85d5d"><span>原神</span><i></i></a>
                                </li>
                                <li class="navigation__item">
                                    <a href="404.html" target="_blank"
                                        style="--clr:#ff1867"><span>博客</span><i></i></a>
                                </li>
                                <li class="navigation__item">
                                    <a href="https://dns.phantomidc.com" target="_blank"
                                         style="--clr:#ebe417"><span>二级域名</span><i></i></a>
                                </li>
                                <li class="navigation__item">
                                    <a href="http://bizhi.qwp.icu" target="_blank"
                                        style="--clr:#eb2feb"><span>壁纸</span><i></i></a>
                                </li>
                                <li class="navigation__item">
                                    <a href="https://www.bt.cn" target="_blank"
                                        style="--clr:#28a745"><span>宝塔面板</span><i></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="iUp">
                        <nav class="cover-navigation navigation--social">
                            <ul class="navigation">
                                <li class="navigation__item">
                                    <a href="https://github.com/mcmtYu" title="Github" target="_blank">
                                        <j class="iconfont icon-github"></j>
                                        <span class="label">Github</span>
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a href="https://t.me/yundaoyaoling" title="Telegram" target="_blank">
                                        <j class="fab fa-telegram-plane"></j>
                                        <span class="label">Telegram</span>
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a href="https://twitter.com/p0MsPT4c01c3QiW" title="Twitter" target="_blank">
                                        <j class="fab fa-twitter"></j>
                                        <span class="label">Twitter</span>
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a href="https://wpa.qq.com/msgrd?v=3&uin=2773943729&site=qq&menu=yes"
                                        title="QQ" target="_blank">
                                        <j class="fab fa-qq"></j>
                                        <span class="label">QQ</span>
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a onClick="weixin()" title="微信" target="_blank">
                                        <j class="fab fa-weixin"></j>
                                        <script>
                                            function weixin() {
                                                Swal.fire({
                                                    title: "请扫码",
                                                    text: "请使用微信扫一扫",
                                                    confirmButtonText: "好的",
                                                    imageUrl: "images/weixin.png",
                                                    imageWidth: 150,
                                                    imageHeight: 150
                                                })
                                            }
                                        </script>
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a href="mailto:2773943729@qq.com" title="Email">
                                        <j class="fas fa-envelope"></j>
                                        <span class="label">Email</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-cover--overlay cover-slate"></div>
    </div>
    <div class="remark iUp">
        <p class="power">Copyright © 2022<script>document.write(' - ' + (new Date()).getFullYear())</script> Yu裕</p>
    </div>
    <script type="text/javascript" src="js/bj.js"></script>
	<script src="https://fastly.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/fetch.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
