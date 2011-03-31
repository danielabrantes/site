<?php
require $_SERVER['DOCUMENT_ROOT'].'/common/Init.php';
Init::getInstance();
//Init::gzip();
//Init::setCache();
header("content-type: text/javascript; charset: UTF-8");
?>
/*
Fun�ao que exibe um menu drop-down horizontal em at� 3 n�veis
*/
function menuDropDown() {
moz = !(document.all);  // Testar o navegador mozilla
nav = navigator.appName;  // Armazena o nome do navegador
temas();  // Fun�ao que retorna as cores escolhidas para o menu
/* if(moz || nav == 'Opera') {
	   // Regras CSS para o Firefox, Safari e Opera
document.styleSheets[0].cssRules[2].style.backgroundColor = cor_Menu_NaoAtiva; 
document.styleSheets[0].cssRules[4].style.color = cor_Fonte_Menu_NaoAtiva;    
document.styleSheets[0].cssRules[5].style.backgroundColor = cor_Submenu_NaoAtiva;    
document.styleSheets[0].cssRules[7].style.color = cor_Fonte_Submenu_NaoAtiva;
document.styleSheets[0].cssRules[9].style.backgroundColor = cor_Submenu_NaoAtiva;       
document.styleSheets[0].cssRules[10].style.color = cor_Fonte_Submenu_NaoAtiva;;
}
else  
{
// Regras CSS apenas para o Internet Explorer
document.styleSheets[0].rules[2].style.backgroundColor = cor_Menu_NaoAtiva; 
document.styleSheets[0].rules[4].style.color = cor_Fonte_Menu_NaoAtiva;    
document.styleSheets[0].rules[5].style.backgroundColor = cor_Submenu_NaoAtiva;    
document.styleSheets[0].rules[7].style.color = cor_Fonte_Submenu_NaoAtiva;
document.styleSheets[0].rules[9].style.backgroundColor = cor_Submenu_NaoAtiva;       
document.styleSheets[0].rules[10].style.color = cor_Fonte_Submenu_NaoAtiva;;
}*/
var navItems = document.getElementById("menu_dropdown").getElementsByTagName("li");  // Armazena o conte�do de todas as tags "li" do id "menu_dropdown"
var links = document.getElementById("menu_dropdown").getElementsByTagName("a");  // Armazena o conte�do de todas as tags "a" do id "menu_dropdown"

for (var i=0; i< navItems.length; i++) {  // Repetição que percorre todos o items do menu e muda as propriedades da CSS
if(navItems[i].className == "submenu") {

if(navItems[i].getElementsByTagName('ul')[0] != null) {
// Controla a exibi�ao dos menus verticais e altera a cor de fundo dos mesmos
navItems[i].onmouseover=function() {
this.getElementsByTagName('ul')[0].style.display="block";
}

navItems[i].onmouseout=function() {
this.getElementsByTagName('ul')[0].style.display="none";
}
// Alterar a cor da fonte da classe submenu

} // fim if menu
else{

// Alterar a cor da fonte da classe item
links[i].onmouseover=function() {
this.style.color = cor_Fonte_Submenu_Ativa;
}
links[i].onmouseout=function() {
this.style.color = cor_Fonte_Submenu_NaoAtiva;
}
}
}

if(navItems[i].className == "submenu_item"){
if(navItems[i].getElementsByTagName('ul')[0] != null) {
// Controla a exibi�ao dos menus verticais e altera a cor de fundo dos mesmos
navItems[i].onmouseover=function() {
this.getElementsByTagName('ul')[0].style.display="block";
this.style.backgroundColor = cor_item_Ativa;
}
navItems[i].onmouseout=function() {
this.getElementsByTagName('ul')[0].style.display="none";
this.style.backgroundColor = cor_item_NaoAtiva;
}
// Alterar a cor da fonte da classe submenu
links[i].onmouseover=function() {
this.style.color = cor_Fonte_Menu_Ativa;
}
links[i].onmouseout=function() {
this.style.color = cor_Fonte_Menu_NaoAtiva;
}			
} // fim if menu
}

if(navItems[i].className == "item" ) {
// Alterar a cor de fundo da classe item
navItems[i].onmouseover=function() {
this.style.backgroundColor = cor_item_Ativa;
}
navItems[i].onmouseout=function() {
this.style.backgroundColor = cor_item_NaoAtiva;
}
// Alterar a cor da fonte da classe item
links[i].onmouseover=function() {
this.style.color = cor_Fonte_Submenu_Ativa;
}
links[i].onmouseout=function() {
this.style.color = cor_Fonte_Submenu_NaoAtiva;
}		  
} // fim if item
} 
} // fim funcao 

/* 
Fun�ao que recebe o c�digo do tema a ser utilizado pela fun�ao menuDropDown() e retorna
as cores de fundo da barra de menus, dos submenus e das fontes. 
*/
function temas() {
cor_Menu_Ativa = '#fcfcd1';
cor_Menu_NaoAtiva = '#ffff00';
cor_Fonte_Menu_Ativa = '#000000';
cor_Fonte_Menu_NaoAtiva = '#000000';
cor_Submenu_Ativa = '#fcfcd1';
cor_Submenu_NaoAtiva = '#ffff00';
cor_Fonte_Submenu_Ativa = ' ';
cor_Fonte_Submenu_NaoAtiva = ' ';
cor_item_Ativa = ' ';
cor_item_NaoAtiva = ' ';
}

/*
function temas() {
		   cor_Menu_Ativa = '#fcfcd1';
		   cor_Menu_NaoAtiva = '#ffff00';
		   cor_Fonte_Menu_Ativa = '#000000';
		   cor_Fonte_Menu_NaoAtiva = '#000000';
		   cor_Submenu_Ativa = '#fcfcd1';
		   cor_Submenu_NaoAtiva = '#ffff00';
		   cor_Fonte_Submenu_Ativa = '#000000';
		   cor_Fonte_Submenu_NaoAtiva = '#000000';
		   cor_item_Ativa = '#ffff00';
		   cor_item_NaoAtiva = '#fcfcd1';
}*/


/***********************************************
* Pausing up-down scroller- � Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

function pausescroller(content, divId, divClass, delay){
this.content=content //message array content
this.tickerid=divId //ID of ticker div to display information
this.delay=delay //Delay between msg change, in miliseconds.
this.mouseoverBol=0 //Boolean to indicate whether mouse is currently over scroller (and pause it if it is)
this.hiddendivpointer=1 //index of message array for hidden div
document.write('<div id="'+divId+'" class="'+divClass+'" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'+divId+'1">'+content[0]+'</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'+divId+'2">'+content[1]+'</div></div>')
var scrollerinstance=this
if (window.addEventListener) //run onload in DOM2 browsers
window.addEventListener("load", function(){
scrollerinstance.initialize()
}, false)
else if (window.attachEvent) //run onload in IE5.5+
window.attachEvent("onload", function(){
scrollerinstance.initialize()
})
else if (document.getElementById) //if legacy DOM browsers, just start scroller after 0.5 sec
setTimeout(function(){
scrollerinstance.initialize()
}, 500)
}

// -------------------------------------------------------------------
// initialize()- Initialize scroller method.
// -Get div objects, set initial positions, start up down animation
// -------------------------------------------------------------------

pausescroller.prototype.initialize=function(){
this.tickerdiv=document.getElementById(this.tickerid)
this.visiblediv=document.getElementById(this.tickerid+"1")
this.hiddendiv=document.getElementById(this.tickerid+"2")
this.visibledivtop=parseInt(pausescroller.getCSSpadding(this.tickerdiv))
//set width of inner DIVs to outer DIV's width minus padding (padding assumed to be top padding x 2)
this.visiblediv.style.width=this.hiddendiv.style.width=this.tickerdiv.offsetWidth-(this.visibledivtop*2)+"px"
this.getinline(this.visiblediv, this.hiddendiv)
this.hiddendiv.style.visibility="visible"
var scrollerinstance=this
document.getElementById(this.tickerid).onmouseover=function(){
scrollerinstance.mouseoverBol=1
}
document.getElementById(this.tickerid).onmouseout=function(){
scrollerinstance.mouseoverBol=0
}
if (window.attachEvent) //Clean up loose references in IE
window.attachEvent("onunload", function(){
scrollerinstance.tickerdiv.onmouseover=scrollerinstance.tickerdiv.onmouseout=null
})
setTimeout(function(){
scrollerinstance.animateup()
}, this.delay)
}


// -------------------------------------------------------------------
// animateup()- Move the two inner divs of the scroller up and in sync
// -------------------------------------------------------------------

pausescroller.prototype.animateup=function(){
var scrollerinstance=this
if (parseInt(this.hiddendiv.style.top)>(this.visibledivtop+5)){
this.visiblediv.style.top=parseInt(this.visiblediv.style.top)-5+"px"
this.hiddendiv.style.top=parseInt(this.hiddendiv.style.top)-5+"px"
setTimeout(function(){
scrollerinstance.animateup()
}, 50)
}
else{
this.getinline(this.hiddendiv, this.visiblediv)
this.swapdivs()
setTimeout(function(){
scrollerinstance.setmessage()
}, this.delay)
}
}

// -------------------------------------------------------------------
// swapdivs()- Swap between which is the visible and which is the hidden div
// -------------------------------------------------------------------

pausescroller.prototype.swapdivs=function(){
var tempcontainer=this.visiblediv
this.visiblediv=this.hiddendiv
this.hiddendiv=tempcontainer
}

pausescroller.prototype.getinline=function(div1, div2){
div1.style.top=this.visibledivtop+"px"
div2.style.top=Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)+"px"
}

// -------------------------------------------------------------------
// setmessage()- Populate the hidden div with the next message before it's visible
// -------------------------------------------------------------------

pausescroller.prototype.setmessage=function(){
var scrollerinstance=this
if (this.mouseoverBol==1) //if mouse is currently over scoller, do nothing (pause it)
setTimeout(function(){
scrollerinstance.setmessage()
}, 100)
else{
var i=this.hiddendivpointer
var ceiling=this.content.length
this.hiddendivpointer=(i+1>ceiling-1)? 0 : i+1
this.hiddendiv.innerHTML=this.content[this.hiddendivpointer]
this.animateup()
}
}

pausescroller.getCSSpadding=function(tickerobj){ //get CSS padding value, if any
if (tickerobj.currentStyle)
return tickerobj.currentStyle["paddingTop"]
else if (window.getComputedStyle) //if DOM2
return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")
else
return 0
}
