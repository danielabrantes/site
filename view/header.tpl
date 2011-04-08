<!DOCTYPE html>
{if isset({$cache}) and {$cache} eq 1}
<html manifest="/cache.manifest">{else}
    <html>
{/if}
        <head>
            <meta charset='utf-8' />
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
            <title>MoneyOne - Remessas e Câmbios</title> {if !isset($login)}
            <link rel='stylesheet' type='text/css' href='etc/css/css.php' />
{*<link rel='stylesheet' type='text/css' href='etc/css/border-radius.htc' />*}
{*para internet explorere anteriores*}
            <script charset="utf-8" type="text/javascript" src='etc/js/menu.php'></script>

            <script type="text/javascript"> 
                {literal}
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
                /*
                var bonecoie="<div><a href='http://www.moneyexpress.pt/livezilla/chat.php' target='_blank' >
                        <img id='manel' style='border:0px;width: 75px;height: 100px;' src='imagens/manel.png' onmouseover='estica('manel');' onmouseout='encolhe('manel');'>
                        <img id='texto' style='border:0px;width: 140px;height: 100px;' src='imagens/texto.png' onmouseover='estica('texto');' onmouseout='encolhe('texto');'>
                        <img id='maria' style='border:0px;width: 75px;height: 100px;' src='imagens/maria.png' onmouseover='estica('maria');' onmouseout='encolhe('maria');'>
                        </a>
                        </div>";
                var boneconotie="<div><a href='http://www.moneyexpress.pt/livezilla/chat.php' target='_blank' >
                        <img id='manel' style='border:0px;width: 75px;height: 100px;' src='imagens/manel.png' onmouseover='estica('manel');' onmouseout='encolhe('manel');'>
                        <img id='texto' style='border:0px;width: 140px;height: 100px;' src='imagens/texto.png' onmouseover='estica('texto');' onmouseout='encolhe('texto');'>
                        <img id='maria' style='border:0px;width: 75px;height: 100px;' src='imagens/maria.png' onmouseover='estica('maria');' onmouseout='encolhe('maria');'>
                        </a>
                        </div>";
                            
                
            */
                var notie="<div><a href='http://www.moneyexpress.pt/livezilla/chat.php' target='_blank' ><img id='manel' style='border:0px;width: 75px;height: 100px;' src='imagens/manel.png'><img id='texto' style='border:0px;width: 140px;height: 100px;' src='imagens/texto.png'><img id='maria' style='border:0px;width: 75px;height: 100px;' src='imagens/maria.png'></a></div>";
                var ie='<div><a href="http://www.moneyexpress.pt/livezilla/chat.php" target="_blank" ><img id="manel" style="border:0px;width: 75px;height: 100px;" src="imagens/manel.png" onmouseover=estica("manel") onmouseout=encolhe("manel")><img id="texto" style="border:0px;width: 140px;height: 100px;" src="imagens/texto.png" onmouseover=estica("texto") onmouseout=encolhe("texto")><img id="maria" style="border:0px;width: 75px;height: 100px;" src="imagens/maria.png" onmouseover=estica("maria") onmouseout=encolhe("maria")></a></div>';
                var versao=getInternetExplorerVersion();
                    //com a versão 9 o css3 é suportado
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
            destaque[2]='<p class="content_center_title_text">Na MoneyOne estamos sempre prontos a atendê-lo, descubra qual loja fica mais próxima de você.<br/><a href="lojas.php" class="content_center_text" style="color:#000; float:right;">Nossas lojas</a>';
            destaque[3]='<p class="content_center_title_text">Promoção relâmpago: faça a sua remessa e ganhe uma capa de passaporte especial.<br/>';
            setTimeout("document.getElementById('preload-slideshow').style.display = 'none';",30000);
        //google analytics
                        var _gaq = _gaq || [];
                        _gaq.push(['_setAccount', 'UA-22071807-1']);
                        _gaq.push(['_trackPageview']);
                        (function() {
                            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                            })();

             {/literal}
            </script>
        </head>
        <body onload='menuDropDown();'>
	{else}
            <link href='css/main.css' rel='stylesheet' type='text/css' />


        </head>
    <body>{/if}