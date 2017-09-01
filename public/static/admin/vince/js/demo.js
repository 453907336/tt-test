$(document).ready(function(){

// 设置侧导航栏的侧导航样式兼容
$(".sidebar-toggle").click(function(){
if($("body").hasClass("sidebar-collapse")){
$(".sidebar-menu").css({"overflow":'hidden',"width":230})
$(".sidebar-menu").find(".active").removeClass("nei_active");
adjustjia()
}else{
$(".sidebar-menu").css({"overflow":'visible'})
$(".sidebar-menu").find(".active").addClass("nei_active")
adjustjian()}})
// 设置侧导航栏的侧导航样式兼容

resizefun();
//sy_tabel();
//window.addEventListener('resize',function(){
//resizefun();
//sy_tabel();
//sy_fucengresize($(".fuqu"))
//})


function resizefun(){
pingHeight=document.documentElement.clientHeight;
pingWidth=document.documentElement.clientWidth;
add_lin();
$(".qqq").css({"height":pingHeight-166})
$(".requtu").css({"maxHeight":pingHeight-298})
$(".content-wrapper").css({"height":pingHeight-90})
$(".sidebar-menu").css({"height":pingHeight-106})
$(".login").css({"left":(pingWidth-537)/2})
$(".login").css({"top":(pingHeight-458)/2})

var linyi = $(".xg_right").height();
var liner = $(".ssjc_right").height();
if (linyi<pingHeight-166){linyi = pingHeight-166}
if (liner<pingHeight-166){liner = pingHeight-166}
if(pingWidth>990){
$(".ssjc_left").css({"minHeight":liner})
}else{$(".ssjc_left").css({"minHeight":'auto'})}
if(pingWidth>1200){
$(".xj_left").css({"height":linyi})
}else{$(".xj_left").css({"height":'auto'})}
$(".sidebar-menu").css({"overflow":'hidden'})
$(".yxjc_info_right").css({"width":($(".yxjc").width()-145)})
}






// 为适应屏幕高度过高加入的兼容代码
add_lin();
function add_lin(){
if(pingHeight<750){ 
$(".gao").addClass("xian")
$(".lin_kongxian").css({"display":"none"})
$(".xtjc .row").css({"paddingTop":0})
$(".yxjc img").css({"paddingTop":0})}
if(pingHeight>750){ 
$(".gao").removeClass("xian")
$(".lin_kongxian").css({"display":"block"})
$(".xtjc .row").css({"paddingTop":"7%"})
$(".yxjc img").css({"paddingTop":"7%"})}}
// 为适应屏幕高度过高加入的兼容代码


// 表格样式控制
function table_change(){
var biaospansize = $(".table_head").find("span").length;
var biaospanwidth =($(".table_head").width()-biaospansize+1)/biaospansize;
var headliheight=30;
for(n=0;n<biaospansize;n++){
if($(".table_head").find("span").eq(n).find("i").height()>headliheight){
headliheight =$(".table_head").find("span").eq(n).find("i").height();
for(m=0;m<biaospansize;m++){
$(".table_head").find("span").eq(m).css({"height":headliheight})}}}
if(headliheight<40){
for(m=0;m<biaospansize;m++){
$(".table_head").find("span").eq(m).css({"height":headliheight})}}
$(".table_head").find("span").css({"width":biaospanwidth})
$(".table_head").find("span").eq(biaospansize-1).css({"borderRight":"none"})
$(".table_body").find("span").css({"width":biaospanwidth})
var biaolisize = $(".table_body").find("li").length;
for(i=0;i<biaolisize;i++){
$(".table_body").find("li").eq(i).find("span").eq(biaospansize-1).css({"borderRight":"none"});
var everyheight = 30;
for(j=0;j<$(".table_body").find("li").eq(i).find("span").length;j++){
if(everyheight < $(".table_body").find("li").eq(i).find("span").eq(j).find('i').height()){
everyheight = $(".table_body").find("li").eq(i).find("span").eq(j).find('i').height();
for(t=0;t<$(".table_body").find("li").eq(i).find("span").length;t++){
$(".table_body").find("li").eq(i).find("span").eq(t).css({"height":everyheight})}}}
if(everyheight < 40){
for(k=0;k<$(".table_body").find("li").eq(i).find("span").length;k++){
$(".table_body").find("li").eq(i).find("span").eq(k).css({"height":everyheight}) }}}}
// 表格样式控制











// 内部滚动条样式
$(".qqq").niceScroll({
        touchbehavior:false,
        cursorcolor:"#000",  //内侧滚动条的颜色
        cursoropacitymax:0.7,   //滚动条的透明度
        cursorwidth:5,   //滚动条的宽度
        horizrailenabled:false,
        cursorborderradius:1,    //滚动轴的圆角
        autohidemode:true,    //自动隐藏滚动条
        background:'#333',  //滚动条的背景色
        cursorborder:'solid 1px #fff'   //滚动条的边框样式
    })
$(".sidebar-menu").niceScroll({
        touchbehavior:false,
        cursorcolor:"#000",  //内侧滚动条的颜色
        cursoropacitymax:0.7,   //滚动条的透明度
        cursorwidth:5,   //滚动条的宽度
        horizrailenabled:false,
        cursorborderradius:1,    //滚动轴的圆角
        autohidemode:true,    //自动隐藏滚动条
        background:'#333',  //滚动条的背景色
        cursorborder:'solid 1px #fff'   //滚动条的边框样式
    }) 


// 内部滚动条样式


// 树形导航
$(function(){
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', ' ');
    $('.tree li.parent_li > span > em').on('click', function (e) {
        var children = $(this).parent('span').parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).parent('span').attr('title', ' ').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).parent('span').attr('title', ' ').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });
    $('.tree li.parent_li > span > i').on('click', function (e) {
        var children = $(this).parent('span').parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).parent('span').attr('title', ' ').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).parent('span').attr('title', ' ').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();});});
$(".ssjc_title_right").find("span").click(function(){
$(this).addClass("check").siblings().removeClass("check");
var treeji = $(this).index();
$(".tree_menu").find(".tree").eq(treeji).css({"display":"block"}).siblings().css({"display":"none"});})
// 树形导航


// 拖拽功能Start
tuozhuai($(".fuqutitle"),$(".fuqu"));
tuozhuai($(".fuqulogo"),$(".fuqu"));


function tuozhuai(dianzhuai , kuangti){
	if(dianzhuai[0]){
dianzhuai[0].onmousedown = function (e) {
preDef(e);
var e = getEvent(e);
var _this = kuangti[0];
var diffX = e.clientX - _this.offsetLeft;
var diffY = e.clientY - _this.offsetTop;
if (typeof _this.setCapture != 'undefined') {
_this.setCapture();} 
document.onmousemove = function (e) {
var e = getEvent(e);
var left = e.clientX - diffX;
var top = e.clientY - diffY;
if (left < 0) {
left = 0;
} else if (left > getInner().width - _this.offsetWidth) {
left = getInner().width - _this.offsetWidth;}
if (top < 0) {
top = 0;
} else if (top > getInner().height - _this.offsetHeight) {
top = getInner().height - _this.offsetHeight;}
_this.style.left = left + 'px';
_this.style.top = top + 'px';} 
document.onmouseup = function () {
this.onmousemove = null;
this.onmouseup = null;
if (typeof _this.releaseCapture != 'undefined') {
_this.releaseCapture();}}}}}
//阻止默认行为
function preDef(event) {
var e = getEvent(event);
if (typeof e.preventDefault != 'undefined') {//W3C
e.preventDefault();
} else {//IE
e.returnValue = false;}}
//获取Event对象
function getEvent(event) {
return event || window.event;}
//跨浏览器获取视口大小
function getInner() {
if (typeof window.innerWidth != 'undefined') {
return {
width : window.innerWidth,
height : window.innerHeight}
} else {
return {
width : document.documentElement.clientWidth,
height : document.documentElement.clientHeight}}}
// 拖拽功能End
})
