{extends file="Main.tpl"}

{block name=row}
{foreach $lista as $wiersz}
<div class="row">
	<div class="col-md-3 col-sm-6 highlight">
				
					
				
	</div>

                    
	<div class="col-md-3 col-sm-6 highlight">

	  <!-- <img src="{$wiersz["title"]}.png" alt="tu ma być zdj"> -->
	
	</div>
	<div class="col-md-3 col-sm-6 highlight">

	    {$wiersz["Title"]} by {$wiersz["Performer_id"]}<br>
        {$wiersz["Tracks"]}
	
	</div>
	<div class="col-md-3 col-sm-6 highlight">

		{if count($conf->roles)>0}
	    <button type="submit" class="pure-button pure-button-primary">Do Koszyka</button>
        {/if}
    </div>
</div>
{/foreach}
{/block}
