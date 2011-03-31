{extends file='pagina.tpl'}
{block name='pagina'}
{include file='banner.tpl'}
<div class="content_conteudo" >
    <div class="content_conteudo_in">
        <div class="content_content_conteudo" >
        {include file='esquerda.tpl'}
        {include file='centro.tpl'}
        {include file='direita.tpl'}
        {include file='conteudofooter.tpl'}
        </div>
    </div>
</div>
{/block}
