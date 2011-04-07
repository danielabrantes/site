<div class='header_foto' style='background:url("imagens/banner/banner.jpg") no-repeat; border: 1px #000'>
    <div class="header_menu">{include file='menu.tpl'}</div>
    <div class="header_content">
        <div class="header_content_division_tytle">
            <span class="header_content_taxa_tytle">taxas de câmbio</span>
            <span class="header_content_taxa_tytle_in">brasil</span>
        </div>
        <div class="header_content_division_taxas">{nocache}{include file='TaxaCambioBrasil.tpl'}{/nocache}</div>
        <div class="header_content_division_news">{include file='formulario_news.tpl'}</div>
    </div>
    <div class="header_content" >
        <a  href="index.php">
            <img src="imagens/estrutura/logo.png" class="header_logotipo" title="Home" alt='imagem'/>
        </a>
    </div>
</div>