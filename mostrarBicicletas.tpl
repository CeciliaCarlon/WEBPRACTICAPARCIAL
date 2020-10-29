<ul>
    {foreach from=$bicicletas item=bicicleta}
        <li>{$bicicleta->marca}</li>
        <li>{$bicicleta->rodado}</li>
        <li>{$bicicleta->precio}</li>
        {if $bicicleta->categoria=="retro"}
            <li><img src="images/panda.png" alt="pandita"></li>
        {/if}
    {/foreach}
</ul>