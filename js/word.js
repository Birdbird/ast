/**
 * @author tugenhua
 * @email tugenhua@126.com
 * 一行一行文字向上滚动js
 * 运用了Jquery中的animate动画方法
 * 运用了一个小技巧 滚动的高度和每个li的高度一样
 * 先找到外层ul的容器 然后相对于外层的容器进行向上滚动 ul没有设置他的高度 默认情况下是n个li×li的高度 向上是marginTop： -li.height(每个li的高度);
 * 当滚动到最后一个li时候 那么最外层的容器应该滚动到0了 那么我就把第一个li加到ul里面去 这样就实现了循环滚动
 * 而不会滚动到最后一个就停止下来了
 */
function autoScroll(obj){
	$(obj).find(".list").animate({
		marginTop : "-25px"
	},500,function(){
		$(this).css({marginTop : "0px"}).find("li:first").appendTo(this);
	})
}
$(function(){
	setInterval('autoScroll(".scroll")',3000)
})
