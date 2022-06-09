{extends file="Main.tpl"}

{block name=whitey}

<div class="bottom-margin">
<form action="{$conf->action_root}MusicSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
        	<div class="pure-control-group">
            <label for="ID">Album_id</label>
            <input id="Album_id" type="text" placeholder="Album_id" name="Album_id" value="{$form->Album_id}">
        </div>
		<div class="pure-control-group">
            <label for="Title">imię</label>
            <input id="Title" type="text" placeholder="Nazwa" name="Title" value="{$form->Title}">
        </div>
		<div class="pure-control-group">
            <label for="Performer_id">ID Wykonawcy</label>
            <input id="Performer_id" type="text" placeholder="ID Wykonawcy" name="Performer_id" value="{$form->Performer_id}">
        </div>
		<div class="pure-control-group">
            <label for="Genre">Gatunek</label>
            <input id="Genre" type="text" placeholder="Gatunek" name="Genre" value="{$form->Genre}">
        </div>
        	<div class="pure-control-group">
            <label for="Price">Cena</label>
            <input id="Price" type="text" placeholder="Cena" name="Price" value="{$form->Price}">
        </div>
            <div class="pure-control-group">
            <label for="Tracks">Utwory</label>
            <input id="Tracks" type="text" placeholder="Utwory" name="Tracks" value="{$form->Tracks}">
        </div>


		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}ShowDb">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="Album_id" value="{$form->Album_id}">
</form>	
</div>

{/block}
