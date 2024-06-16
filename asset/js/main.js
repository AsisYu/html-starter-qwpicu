var iUp = (function () {
	var t = 0,
		d = 150,
		clean = function () {
			t = 0;
		},
		up = function (e) {
			setTimeout(function () {
				$(e).addClass("up")
			}, t);
			t += d;
		},
		down = function (e) {
			$(e).removeClass("up");
		},
		toggle = function (e) {
			setTimeout(function () {
				$(e).toggleClass("up")
			}, t);
			t += d;
		};
	return {
		clean: clean,
		up: up,
		down: down,
		toggle: toggle
	}
})();
yiyan = "";
$(document).ready(function () {

	// 获取一言数据
	fetch('https://v1.hitokoto.cn').then(function (res) {
		return res.json();
	}).then(function (e) {
		yiyan = e.hitokoto;
		$('#description').html(e.hitokoto + "<br/> -「<strong>" + e.from + "</strong>」")
	}).catch(function (err) {
		console.error(err);
	})
// var url = 'https://query.yahooapis.com/v1/public/yql' + 
	// '?q=' + encodeURIComponent('select * from json where url=@url') +
	// '&url=' + encodeURIComponent('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=8') +
	// '&format=json&callback=?';

	/**
	 * 获取Bing壁纸
	 * 原先 YQL 已经无法提供服务了
	 * 改用 JsonBird：https://bird.ioliu.cn/
	 * 
	 */
	// var url = '';
	// var imgUrls = JSON.parse(sessionStorage.getItem("imgUrls"));
	// var index = sessionStorage.getItem("index");
	// var $panel = $('#panel');
	// if (imgUrls == null) {
	// 	imgUrls = new Array();
	// 	index = 0;
	// 	$.get(url, function (result) {
	// 		images = result.images;
	// 		for (let i = 0; i < images.length; i++) {
	// 			const item = images[i];
	// 			imgUrls.push(item.url);
	// 		}
	// 		var imgUrl = imgUrls[index];
	// 		var url = "https://www.bing.com" + imgUrl;
	// 		$panel.css("background", "url('" + url + "') center center no-repeat #666");
	// 		$panel.css("background-size", "cover");
	// 		sessionStorage.setItem("imgUrls", JSON.stringify(imgUrls));
	// 		sessionStorage.setItem("index", index);
	// 	});
	// } else {
	// 	if (index == 7)
	// 		index = 0;
	// 	else
	// 		index++;
	// 	var imgUrl = imgUrls[index];
	// 	var url = "https://www.bing.com" + imgUrl;
	// 	$panel.css("background", "url('" + url + "') center center no-repeat #666");
	// 	$panel.css("background-size", "cover");
	// 	sessionStorage.setItem("index", index);
	// }

	$(".iUp").each(function (i, e) {
		iUp.up(e);
	});

	$(".js-avatar")[0].onload = function () {
		$(".js-avatar").addClass("show");
	}
});

$('.btn-mobile-menu__icon').click(function () {
	if ($('.navigation-wrapper').css('display') == "block") {
		$('.navigation-wrapper').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			$('.navigation-wrapper').toggleClass('visible animated bounceOutUp');
			$('.navigation-wrapper').off('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
		});
		$('.navigation-wrapper').toggleClass('animated bounceInDown animated bounceOutUp');

	} else {
		$('.navigation-wrapper').toggleClass('visible animated bounceInDown');
	}
	$('.btn-mobile-menu__icon').toggleClass('social iconfont icon-list social iconfont icon-ngleup animated fadeIn');
});

//title
// 在脚本开始时保存原始标题（假设原始标题不包含时间信息）
var originalTitle = "Yuの主页"; // 根据实际情况调整

function updateTimeTitle() {
  // 获取当前时间
  var currentDateTime = new Date();
  
  // 格式化时间。以下格式为：小时
  var hour = currentDateTime.getHours();

  //两位值
  var formattedHours = hour.toString().padStart(2, '0');

  //判断
  if (formattedHours <= 5) {
    formattedText = "深夜啦，还不休息吗？身体是革命的本钱哦";
} else if (formattedHours <= 8) {
    formattedText = "早上好，昨晚睡得还好吗？";
} else if (formattedHours <= 10) {
    formattedText = "而你 我的朋友，天一亮你才是真正的帕鲁";
} else if (formattedHours >= 16 && formattedHours <= 17) {
    formattedText = "傍晚了，想好吃什么了吗？";
} else if (formattedHours >= 20 && formattedHours <= 24) {
    formattedText = "快深夜了，再忙也要注意休息呀";
} else {
    formattedText = yiyan;
}

  // 仅在原始标题基础上添加当前时间信息
  document.title = originalTitle + " - " + formattedText;
}

// 定期更新标题以保持时间更新
setInterval(updateTimeTitle, 1000);
  
