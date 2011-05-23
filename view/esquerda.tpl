<div class="content_conteudo_division">
	<a href="teleremessa.php" class="content_conteudo_division_link" title="Tele Remessas">
        {nocache}
            <img src="imagens/remessas/remessas{$language}.png" alt='imagem' />
        {/nocache}
        </a>
	
        <div id="bonecos">
            
            {if $language='pt'}
            {literal}
            <script>
                    var b=document.getElementById("bonecos");
                    b.innerHTML=bonecospt();
            </script>
            {/literal}
            {/if}
            
            {if $language='en'}
            {literal}
            <script>
                    var b=document.getElementById("bonecos");
                    b.innerHTML=bonecosen();
            </script>
            {/literal}
            {/if}
            {if $language='es'}
            {literal}
            <script>
                    var b=document.getElementById("bonecos");
                    b.innerHTML=bonecoses();
            </script>
            {/literal}
            {/if}
            
        </div>
</div>
