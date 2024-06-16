//随机数1-15
  function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  // 初始时生成随机数，并确定图片路径数组
  var randomNum = getRandomNumber(1, 21);
  var images = ['./images/bg/'+randomNum+'.jpg'];

  // 从images中随机选取一个图片路径
  function getRandomBackground() {
    var index = Math.floor(Math.random() * images.length);
    return images[index];
  }

  // 设置<header>的背景图片
  function setBackground() {
    var panel = document.getElementById('panel');
    var selectedImage = getRandomBackground();
    panel.style.backgroundImage = 'url(' + selectedImage + ')';
    panel.style.position = 'center';
  }

  // 当文档加载完成后，调用setBackground()设置背景
  document.addEventListener('DOMContentLoaded', function() {
    setBackground();
  });

//鼠标焦点动画
const shell = document.querySelector(".shell");
const imagebg = document.querySelector("#panel");
shell.addEventListener('mouseenter', function(e) {
    this.x = e.clientX;
    imagebg.style.transition = 'none';  // 禁用过渡效果以实现即时反应
});
shell.addEventListener('mousemove', function(e) {
    this._x = e.clientX;
    const disx = this._x - this.x;
    const move = 3 - disx / -85;  // 计算位移
    imagebg.style.transform = `translate(${move}px, -10px)`; // 应用位移
});
shell.addEventListener('mouseleave', function(e) {
    imagebg.style.transition = '0.4s'; // 启用平滑过渡效果
    imagebg.style.transform = 'translate(0px, 0px)'; // 复原位置
});