{extends file="main.tpl"}
{block name=whitey}

<h1>Albumy</h1>
<table class="pure-table pure-table-bordered" align="center">
<thead>
    <tr align="center">
        <td>Id</td>
        <td>Title</td>
        <td>Performer_id</td>
        <td>Genre</td>
        <td>Price</td>
        <td>Tracks</td>
        <td>Opcje</td>
    </tr>
</thead>
<tbody>
{foreach $Album as $wiersz}
    
    <tr>
        <td> {$wiersz["Album_id"]}</td>
        <td> {$wiersz["Title"]}</td>
        <td> {$wiersz["Performer_id"]}</td>
        <td> {$wiersz["Genre"]}</td>
        <td> {$wiersz["Price"]}</td>
        <td> {$wiersz["Tracks"]}</td>
        <td>
            <a class="button-small pure-button button-secondary" href="{$conf->action_url}AlbumEdit/{$wiersz['Album_id']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning"
			  onclick="confirmLink('{$conf->action_url}AlbumDelete/{$wiersz['Album_id']}','Czy na pewno usunąć rekord ?')">Usuń</a>
        </td>

    </tr>

{/foreach}
</tbody>
</table>
{/block}

ta

{block name=row}
<table class="pure-table pure-table-bordered" align="center">
<thead>
    <tr align="center">
        <td>Performer_id</td>
        <td>Name</td>
        <td>Opcje</td>
    </tr>
</thead>
<tbody>
{foreach $Performer as $wiersz2}
    <tr>
        <td> {$wiersz2["Performer_id"]}</td>
        <td> {$wiersz2["Name"]}</td>
                <td>
            <a class="button-small pure-button button-secondary" href="{$conf->action_url}AlbumEdit/{$wiersz2['Performer_id']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning"
			  onclick="confirmLink('{$conf->action_url}AlbumDelete/{$wiersz2['Name']}','Czy na pewno usunąć rekord ?')">Usuń</a>
        </td>
    </tr>


{/foreach}
</tbody>
</table>
{/block}


