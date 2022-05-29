{extends file="Main.tpl"}

{block name=row}

{foreach $lista as $wiersz}
<div class="row">
	<div class="col-md-3 col-sm-6 highlight">
				
					
				
	</div>

                    
	<div class="col-md-3 col-sm-6 highlight">

	  <!-- <img src="{$wiersz["title"]}.png" alt="tu ma być zdj"> -->
	
	</div>
	<div class="col-md-3 col-sm-6 highlight ">

	    {$wiersz["Title"]} <i style="font-size:12px">by {$wiersz["Name"]}</i><br>
		<br>
        <p style="font-size:11px"> {$wiersz["Tracks"]}</p>
	
	</div>
	<div class="center col-md-3 col-sm-6 highlight">

		{if count($conf->roles)>0}
		&nbsp &nbsp &nbsp &nbsp &nbsp{$wiersz["Price"]}zł<br>
		<button type="submit" class="pure-button pure-button-primary"> <br>Do Koszyka</button>
        {/if}
    </div>
</div>
<hr style="width:75%;height:1px;border-width:0;color:gray;background-color:gray">
{/foreach}
{/block}
-->