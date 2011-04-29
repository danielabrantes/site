function getInternetExplorerVersion()
// Returns the version of Internet Explorer or a -1
// (indicating the use of another browser).
                {
                var rv = -1; // Return value assumes failure.
                if (navigator.appName == 'Microsoft Internet Explorer')
                {
                var ua = navigator.userAgent;
                var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
                if (re.exec(ua) != null)
                  rv = parseFloat( RegExp.$1 );
              }
              return rv;
            }
            function sleep(milliseconds) {
                      var start = new Date().getTime();
                      for (var i = 0; i < 1e7; i++) {
                        if ((new Date().getTime() - start) > milliseconds){
                          break;
                        }
                      }
                    }
            function estica(id) {
                    document.getElementById(id).src='imagens/'+id+'2.png';
            }
            function encolhe(id){
                    document.getElementById(id).src='imagens/'+id+'.png';
            }
            
            function bonecos(){
                var notie="<div><a href='http://www.moneyexpress.pt/livezilla/chat.php' target='_blank'><img id='manel' style='border:0px;width: 75px;height: 100px;' src='imagens/manel.png'></div><div id='texto' class='texto' style='border:0px;width: 139px;height: 100px;'>Fale com o Manel ou com a Mônica e tira as suas dúvidas online</div><img id='maria' style='border:0px;width: 75px;height: 100px;' src='imagens/maria.png'></a></div>";
                var ie='<div><a href="http://www.moneyexpress.pt/livezilla/chat.php" target="_blank" ><img id="manel" style="border:0px;width: 75px;height: 100px;" src="imagens/manel.png" onmouseover=estica("manel") onmouseout=encolhe("manel")></div><div id="texto" class="texto" style="border:0px;width: 139px;height: 100px;">Fale com o Manel ou com a Mônica e tira as suas dúvidas online</div><img id="maria" style="border:0px;width: 75px;height: 100px;" src="imagens/maria.png" onmouseover=estica("maria") onmouseout=encolhe("maria")></a></div>';
                var versao=getInternetExplorerVersion();
                    // com a versão 9 o css3 é suportado
                if(versao == -1 || versao == 9)
                {return notie;} 
                else{return ie;}
            }
            
                
            var pausecontent=new Array();
            pausecontent[1]='<a href="promocao6.php" alt="blank" title="Saber mais" class="imagem"><img sytle="width=155px;" src="imagens/Net_pass.jpg" alt="imagem"/></a>';
            pausecontent[3]='<a href="promocao2.php" alt="blank" title="Saber mais" class="imagem"><img sytle="width=155px;" src="imagens/promocao2.jpg" alt="imagem"/></a>';
            pausecontent[4]='<a href="promocao3.php" alt="blank" title="Saber mais" class="imagem"><img sytle="width=155px;" src="imagens/net_abril_gde.jpg" alt="imagem"/></a>';
            pausecontent[5]='<a href="promocao1.php" alt="blank" title="Saber mais" class="imagem"><img sytle="width=155px;" src="imagens/cartao_telefone.jpg" alt="imagem"/></a>';
            var destaque=new Array();
            destaque[0]='<p class="content_center_title_text">Rapidez, segurança e taxas grátis no envio do seu dinheiro.<br/>';
            destaque[1]='<p class="content_center_title_text">Até 48h a sua remessa é depositada. Se optar pelo modo urgente, seu dinheiro chega no mesmo dia.<br/>';
            destaque[2]='<p class="content_center_title_text">Na MoneyOne estamos sempre prontos a atendê-lo, descubra qual loja fica mais próxima de você';
            destaque[3]='<p class="content_center_title_text">Promoção relâmpago: faça a sua remessa e ganhe uma capa de passaporte especial.<br/>';
            setTimeout("document.getElementById('preload-slideshow').style.display = 'none';",30000);
        // google analytics
                        var _gaq = _gaq || [];
                        _gaq.push(['_setAccount', 'UA-22071807-1']);
                        _gaq.push(['_trackPageview']);
                        (function() {
                            var ga = document.createElement('script');ga.type = 'text/javascript';ga.async = true;
                            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                            var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga, s);
                            })();


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
    document.write('<div id="'
        + divId
        + '" class="'
        + divClass
        + '" style="position: relative; overflow: hidden">\n\<div class="innerDiv" style="position:absolute;top:0px;left:0px; width: 100%" id="'
        + divId
        + '1">'
        + content[0]
        + '</div><div class="innerDiv" style="position:absolute;top:0px;left:0px; width: 100%; visibility: hidden" id="'
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