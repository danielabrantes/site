<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/common/common.php';
Init::getInstance(producao);
//Init::gzip();
//Init::setCache();
header("content-type: text/css; charset: UTF-8");
?>
* {
margin:0px;
padding:0px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
-khtml-border-radius: 10px;
border-radius: 10px;
}
img {
border: 0px;
padding:0px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
-khtml-border-radius: 10px;
border-radius: 10px;
}
body{
font-family:Verdana, Geneva, sans-serif;
font-size:12px;
background-color:#ffffcf;
color:#000;
}
.wrapper{
width:990px;
height:55px;
margin-left:auto;
margin-right:auto;
max-width:990px;
min-width:800px;
}
.header{
background:#ffffcf url(../../imagens/estrutura/barra_amarela_2.jpg) repeat-x;
}
.header_in{
width:990px;
margin-left:auto;
margin-right:auto;
background-color:#FFF;
}
.content_header{
width:100%;
background-color: #ffff00;
}
.content_header_campanha{
width:990px;
height:24px;
margin-left:auto;
margin-right:auto;
border: #ffff00 solid;
border-width:1px;
border-top-color:#FFF;
border-bottom-color:#FFF;
background-color:#FFF;
max-width:990px;
min-width:800px;
}
.content_conteudo{
width:100%;
background:#ffffcf url(../../imagens/estrutura/barra_amarela_2.jpg) repeat-x;
}
.content_conteudo_in{
width:990px;
height:350px;
background-color:#FFF;
}
.footer{
width:100%;
background-color: #ffffcf;
}
.footer_in{
width:970px;
height:100px;
margin-left:auto;
margin-right:auto;
max-width:990px;
min-width:800px;
}
.wrapper_left{
width:160px;
float:left;
}

.wrapper_center{
width:284px;
height:40px;
float:left;
}

.wrapper_right{
width:180px;
float:left;
}

.wrapper_bottom{
width:26px;
height:40px;
float:left;
}

.wrapper_division{
height:20px;
}

.wrapper_text_titles{
font-size:11px;
text-transform:capitalize;
font-weight:bold;
}

.wrapper_combobox{
width:125px;
height:20px;
color:#000;
font-size:12px;
}

.wrapper_textbox{
width:160px;
height:17px;
color:#000;
text-transform:lowercase;
font-size:12px;
}

a.wrapper_link {
color:#000;
text-decoration:none;
}

a.wrapper_link:hover {
color:#999;
}

.wrapper_link{
float:right;
font-size:9px;
padding-top:10px;
}
.header_foto{
width:970px;
height:220px;
margin: 10px auto;
}
.header_menu{
width:960px;
height:40px;
margin-left:auto;
margin-right:auto;
background:url(../../imagens/estrutura/fundo_links.png) no-repeat;
font-size:13px;
font-weight:bold;
}
.header_content{
width:327px;
height:180px;
float:right;
}
.header_logotipo{
float:left;
padding-top:28px;
}
.header_content_division_tytle{
width:275px;
height:28px;
float:right;
margin-top:20px;
}
.header_content_division_taxas{
width:275px;
height:116px;
float:right;
}
.header_content_division_news{
width:320px;
height:26px;
float: left;
}

.header_content_taxa_tytle{
font-size:16px;
color:#ffff00;
text-transform:lowercase;
}

.header_content_taxa_tytle_in{
font-size:20px;
color:#ffffff;
text-transform:uppercase;
}

.header_content_division_taxas_in{
width:180px;
height:30px;
float:left;
padding-top:16px;
}

.header_content_division_in_center{
width:15px;
height:30px;
float:left;
padding-top:6px;
}

.header_content_text_taxas{
font-size:12px;
color:#FFF;
text-transform:capitalize;
}

.header_content_text_taxas_in{
font-size:20px;
color:#FFF;
text-transform:capitalize;
padding-left:23px;
}

.header_content_seta{
float:right;
}

.header_content_division_news_in{
width:120px;
height:20px;
float:left;
padding-top:2px;
}

.header_content_division_news_in_in{
width:167px;
height:20px;
float:left;
}

.header_content_division_news_in_buttom{
width:18px;
height:20px;
float:right;
}

.header_textbox{
width:165px;
height:17px;
color:#666666;
text-transform:lowercase;
font-size:12px;
}
.content_header_cam{
width:970px;
height:22px;
margin: 0 auto;
}
.content_header_cam_in{
width:325px;
height:17px;
float:right;
padding-top:3px;
}
a.content_header_link {
color:#000;
text-decoration:none;
}
a.content_header_link:hover {
color:#999;
}
.seta {
border: 0;
background:url(../../imagens/estrutura/seta.png) no-repeat;
background-position:top;
display:block;
width:22px;
height:25px;
}
.seta:hover {
text-decoration:none;
background:url(../../imagens/estrutura/seta_cinza.jpg) no-repeat;
background-position:top;
width:22px;
height:25px;
}
.footer_link{
height:15px;
padding-top:10px;
text-align:center;
}
a.footer_text{
color:#999;
font-size:11px;
text-decoration:none;
}
.risco{
color:#999;
}
.footer_texto{
color:#CCC;
font-size:9px;
text-align:center;
margin-top:5px;
margin-bottom:10px;
height:15px;
}
.content_content_conteudo{
width:970px;
margin: 5px auto;
}
.content_conteudo_division{
width:300px;
height:250px;
float:left;
background:url(../../imagens/remessas/fundo_conteudo.jpg) no-repeat;
}
.content_conteudo_division_link{
height:220px;
display:block;
text-decoration:none;
}

.content_conteudo_division_link:hover{
text-decoration:none
}

.content_conteudo_division_center{
width:370px;
height:250px;
float:left;
}
a.imagem{
text-decoration:none;
color: #fff;
width: 155px;max-width: 155px;min-width: 155px;
}
a.texto{
text-decoration:none;
color: #000;
}
.content_promocao{
width:100px;
height:50px;
float:left;
margin-top: 30%;
margin-left: 10px;
}

.content_promocao_texr{
font-size:15px;
color:#000;
text-transform:capitalize;
font-weight:bold;
text-align: left;
}

.content_promocao_foto{
width:176px;
height:220px;
float:left;
margin-left:7px;
margin-top: 5%;
color:#fcfcd6;
}
.content_promocao_foto img{
width:155px;
}
.content_footer{
width:970px;
height:90px;
float:left;
}
.footer_division{
width: 300px;
height: 75px;
float: left;
}
.footer_division1{
width: 280px;
height: 90px;
float: left;
}
.footer_division_center{
width: 380px;
height: 75px;
float: left;
}
.content_footer_banco_uk{
width:122px;
float:left;
height:60px;
background:url(../../imagens/bancos/banco_uk.jpg) no-repeat;
background-position:right;
}

.content_footer_banco_pt{
width:122px;
float:left;
height:60px;
background:url(../../imagens/bancos/banco_pt.jpg) no-repeat;
background-position:center;
}

.content_footer_banco_es{
width:122px;
float:left;
height:60px;
background:url(../../imagens/bancos/banco_es.jpg) no-repeat;
background-position:left;
}

#pscroller1{
width:155px;
height:218px;
border: 0px;
background-color: white; }

#pscroller2{
width:330px;
height:78px;
border: 0px;
background-color: white; }

.content_center1{
width:330px;
height:170px;
/*margin-top: 5%;*/
margin-left: auto;
margin-right: auto;
}

.content_center{
width:330px;
height:50px;
margin-top: 5%;
margin-left: auto;
margin-right: auto;
}

.content_center_title_text{
font-size:15px;
text-align:justify;
line-height: 130%;
color:#000;
}

.content_center_text{
font-size:10px;
text-align:justify;
}

.content_center_text_in{
font-size:10px;
font-weight:bold;
float:right;
text-align:justify;
}

.content_conteudo_in_in{
width:990px;
margin-left:auto;
margin-right:auto;
border: #ffff00 solid;
border-width:2px;
border-top-color:#FFF;
background-color:#FFF;
}

.content_content_conteudo{
width:970px;
margin-top:5px;
margin-left:auto;
margin-right:auto;

}

.content_title{
font-size:14px;
text-transform:uppercase;
color:#4870b7;
}

.content_title_IN{
font-size:11px;
text-transform:uppercase;
color:#000;
font-weight:bolder;
line-height:30px;
}

.content_title_in_in{
font-size:11px;
text-transform:uppercase;
color:#000;
font-weight:bolder;
line-height:15px;
}

.content_texto{
font-size:11px;
color:#000;
font-style:normal;
text-align:justify;
line-height:16px;
}

.content_seta{
width:15px;
height:16px;
}

.content_pontos{
background-image:url(../../imagens/estrutura/pontos.jpg);
background-repeat:no-repeat;
background-position:top;
}

.content_fotos{
width: 65px;
height: 67px;
padding-left: 10px;
padding-right: 5px;
}

.content_lista{
margin-left:40px;
}

.content_link{
font-size: 11px;
color:#666666;

}

.content_link:hover{
font-size: 11px;
color:#000;
text-decoration:none;}

.bancos_imagem{
width: 194px;
height: 35px;
}
.tabela{
border: 0;
width: 850px;
font-family:Verdana, Geneva, sans-serif;
font-size:11px;
color:#666;
}
.cor{
color: #4870b7;
text-transform:capitalize;
}
.coluna_in{
width: 100px;
height: 45px;
text-align: left;
}

.coluna{
width: 250px;
height: 45px;
}

.coluna_in_in{
width: 600px;
height: 45px;
}

.combobox{
width:110px;
font-size:13px;
color:#000;
}

.erros{
font-size: 10px;
color: red;
}

#preload-slideshow{
position: absolute;
left: 33%;
width:33%;
top:0px;
padding: 0px;
border: 0px;
z-index:1;
}

#preload-slideshow .close{
position: absolute;
z-index:2;    
}



.mensagem{
text-align:center;
font-size: 1.3em;
font-weight: 600;
}

.remessa{
width: 201px;
text-align: left;
border: 0;
}

.remessa_in{
width: 10px;
border: 0;
}
.bold{
text-transform: capitalize;
font-weight: bold;
}
.footnote{
font-weight: bold;
font-size: 80%;
}
img { border: 0; }
/*
Regra 1 - Classe que define as propriedades da barra horizontal
*/
ul.menubar{
padding-top:8px;
padding-left: 10px;
}
/*
Regra 2 - Classe que define o formato e a posi�ao dos submenus (um ao lado do outro)
*/

ul.menubar .submenu{
list-style: none;
float:left;
}
/*
Regra 3 - Classe que define a posi�ao e a exibi�ao dos menus verticais (inicialmente eles nao sao exibidos)
*/
ul.menubar ul.menu{
display: none;
position: absolute;
}
/*
Regra 4 - Classe que define a aparencia do link da barra horizontal
*/
ul.menubar a{
display:block;
text-decoration: none;
padding:5px 11px 5px 11px;
}

/*
Regra 5 - Classe que define o tamanho e a cor do menu vertical
*/
ul.menu, ul.menu ul{
width: 150px;
/* background-color:#fcfcd1;*/
}

/*
Regra 6 - Classe que define o posicionamento dos itens do menu vertical relativos ao submenu
*/
ul.menu li{
position: relative;
list-style:none;
}
/*
Regra 7 - Classe que define a aparencia dos links dos itens do menu vertical
*/
ul.menu li a{
display: block;
text-decoration: none;
/* border: 1px solid #ccc;*/
font-size:11px;
padding: 5px 10px 5px 5px;
}

/*
Regra 8 - Classe que define o posicionamento do menu vertical
*/
ul.menu ul{
position: absolute;
display: none;
left: 149px; /* Definir 1px menor que o tamannho do menu */
top: 0px;
}
/*
Regra 9 - Classe que define o tamanho e a posi�ao do 3o n�vel de menus
*/
ul.menu li.submenu {
width: 150px;
position: relative;
list-style:none;
float:none;
/*z-index: 1000;*/ /* IE7 Bug */
}
/*
Regra 10 - Classe que define a aparencia dos links do 3o n�vel de menus
*/
ul.menu li.submenu a {
display: block;
text-decoration: none;
/*border: thin solid  #ccc;*/
padding: 5px 10px 5px 5px;
}

/* Fixar IE. Invis�vel para IE Mac \*/
* html ul.menu li { float: left; height: 1%; } /* Regra 11 */
* html ul.menu li a { height: 1%; } /* Regra 12 */
* html ul.menu li.submenu { float: none; height: 1%; } /* Regra 13 */
* html ul.menu li.submenu a { height: 1%; } /* Regra 14 */
/* Fim */

/*
Regra 15 - Classe que torna os sub-menus invis�veis inicialmente
*/
ul.menu li.submenu li.submenu_item ul { display: none; }
/*
Regra 16 - Classe que insere a imagem da seta para a direita no menu vertical
*/
ul.menu li.submenu_item {
background-color: transparent;
background-image:url(../../imagens/estrutura/seta_dir.gif);
background-repeat: no-repeat;
background-position: 93% 50%;
}

ul.menubar a:hover{
text-decoration:underline ;
color: #000;
}
.icons{
	padding-left:0px;
	text-align:center;
	margin-top:15px;
	margin-bottom:0px;
	margin-left:0px;
	margin-right: 0px;

}
.iconmaistexto{
	margin:0px 37px;
	text-align:center;
	float: left;
}
.icontexto{
}
.icon{
border: 0px;
width: 42px;
height: 42px;
vertical-align: middle;
margin: 0px;
}
.texto{
font-size:100%;
color:black;
font-style:normal;
text-align:justify;
font-family:Consolas;
margin:1%;
padding:1%;
}

.titulo{
font-size:120%;
color:black;
font-style:normal;
text-align:justify;
font-weight: bold;
margin:1%;
padding:1%;
}
.subtitulo{
font-size:110%;
color:black;
font-style:normal;
text-align:justify;
margin-left:1%;
margin-right:1%;
padding-left:1%;
padding-right:1%;
}
.textoLoja, .textoConta{
font-size:100%;
color:black;
font-style:normal;
text-align:justify;
font-family:Consolas;
}
.contas{
width:100%;
border-color: #D5D5D5;
border-style: solid;
border-width: 1px;
}
.conta{
width:20%;
float:left;
}
.clear{
clear:both;
}
.left {
	float: left;
	width: 50%;
}

.right {
	float: right;
	width: 50%;
}

.center {
	text-align: center;
	margin: auto;
}
.leftConta {
	float: left;
	width: 20%;
}
.rightConta {
	float: right;
	width: 80%;
}