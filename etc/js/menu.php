<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/common/Init.php';
//Init::getInstance(producao);
Init::gzip();
Init::setCache();
header("content-type: text/javascript; charset: UTF-8");
?>
function menuDropDown() {
	moz = !(document.all);
	nav = navigator.appName;
	temas();
	var navItems = document.getElementById("menu_dropdown")
			.getElementsByTagName("li");
	var links = document.getElementById("menu_dropdown").getElementsByTagName(
			"a");
	for ( var i = 0; i < navItems.length; i++) {
		if (navItems[i].className == "submenu") {

			if (navItems[i].getElementsByTagName('ul')[0] != null) {
				navItems[i].onmouseover = function() {
					this.getElementsByTagName('ul')[0].style.display = "block";
				}

				navItems[i].onmouseout = function() {
					this.getElementsByTagName('ul')[0].style.display = "none";
				}

			} else {
				links[i].onmouseover = function() {
					this.style.color = cor_Fonte_Submenu_Ativa;
				}
				links[i].onmouseout = function() {
					this.style.color = cor_Fonte_Submenu_NaoAtiva;
				}
			}
		}

		if (navItems[i].className == "submenu_item") {
			if (navItems[i].getElementsByTagName('ul')[0] != null) {
				navItems[i].onmouseover = function() {
					this.getElementsByTagName('ul')[0].style.display = "block";
					this.style.backgroundColor = cor_item_Ativa;
				}
				navItems[i].onmouseout = function() {
					this.getElementsByTagName('ul')[0].style.display = "none";
					this.style.backgroundColor = cor_item_NaoAtiva;
				}
				links[i].onmouseover = function() {
					this.style.color = cor_Fonte_Menu_Ativa;
				}
				links[i].onmouseout = function() {
					this.style.color = cor_Fonte_Menu_NaoAtiva;
				}
			}
		}

		if (navItems[i].className == "item") {
			navItems[i].onmouseover = function() {
				this.style.backgroundColor = cor_item_Ativa;
			}
			navItems[i].onmouseout = function() {
				this.style.backgroundColor = cor_item_NaoAtiva;
			}
			links[i].onmouseover = function() {
				this.style.color = cor_Fonte_Submenu_Ativa;
			}
			links[i].onmouseout = function() {
				this.style.color = cor_Fonte_Submenu_NaoAtiva;
			}
		}
	}
}
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
function pausescroller(content, divId, divClass, delay) {
	this.content = content
	this.tickerid = divId
	this.delay = delay
	this.mouseoverBol = 0

	this.hiddendivpointer = 1
	document
			.write('<div id="'
					+ divId
					+ '" class="'
					+ divClass
					+ '" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'
					+ divId
					+ '1">'
					+ content[0]
					+ '</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'
					+ divId + '2">' + content[1] + '</div></div>')
	var scrollerinstance = this
	if (window.addEventListener)
		window.addEventListener("load", function() {
			scrollerinstance.initialize()
		}, false)
	else if (window.attachEvent)
		window.attachEvent("onload", function() {
			scrollerinstance.initialize()
		})
	else if (document.getElementById)
		setTimeout(function() {
			scrollerinstance.initialize()
		}, 500)
}
pausescroller.prototype.initialize = function() {
	this.tickerdiv = document.getElementById(this.tickerid)
	this.visiblediv = document.getElementById(this.tickerid + "1")
	this.hiddendiv = document.getElementById(this.tickerid + "2")
	this.visibledivtop = parseInt(pausescroller.getCSSpadding(this.tickerdiv))
	this.visiblediv.style.width = this.hiddendiv.style.width = this.tickerdiv.offsetWidth
			- (this.visibledivtop * 2) + "px"
	this.getinline(this.visiblediv, this.hiddendiv)
	this.hiddendiv.style.visibility = "visible"
	var scrollerinstance = this
	document.getElementById(this.tickerid).onmouseover = function() {
		scrollerinstance.mouseoverBol = 1
	}
	document.getElementById(this.tickerid).onmouseout = function() {
		scrollerinstance.mouseoverBol = 0
	}
	if (window.attachEvent)
		window
				.attachEvent(
						"onunload",
						function() {
							scrollerinstance.tickerdiv.onmouseover = scrollerinstance.tickerdiv.onmouseout = null
						})
	setTimeout(function() {
		scrollerinstance.animateup()
	}, this.delay)
}
pausescroller.prototype.animateup = function() {
	var scrollerinstance = this
	if (parseInt(this.hiddendiv.style.top) > (this.visibledivtop + 5)) {
		this.visiblediv.style.top = parseInt(this.visiblediv.style.top) - 5
				+ "px"
		this.hiddendiv.style.top = parseInt(this.hiddendiv.style.top) - 5
				+ "px"
		setTimeout(function() {
			scrollerinstance.animateup()
		}, 50)
	} else {
		this.getinline(this.hiddendiv, this.visiblediv)
		this.swapdivs()
		setTimeout(function() {
			scrollerinstance.setmessage()
		}, this.delay)
	}
}
pausescroller.prototype.swapdivs = function() {
	var tempcontainer = this.visiblediv
	this.visiblediv = this.hiddendiv
	this.hiddendiv = tempcontainer
}
pausescroller.prototype.getinline = function(div1, div2) {
	div1.style.top = this.visibledivtop + "px"
	div2.style.top = Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)
			+ "px"
}
pausescroller.prototype.setmessage = function() {
	var scrollerinstance = this
	if (this.mouseoverBol == 1)
		setTimeout(function() {
			scrollerinstance.setmessage()
		}, 100)
	else {
		var i = this.hiddendivpointer
		var ceiling = this.content.length
		this.hiddendivpointer = (i + 1 > ceiling - 1) ? 0 : i + 1
		this.hiddendiv.innerHTML = this.content[this.hiddendivpointer]
		this.animateup()
	}
}
pausescroller.getCSSpadding = function(tickerobj) {
	if (tickerobj.currentStyle)
		return tickerobj.currentStyle["paddingTop"]
	else if (window.getComputedStyle)
		return window.getComputedStyle(tickerobj, "").getPropertyValue(
				"padding-top")
	else
		return 0
}