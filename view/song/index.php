<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Artiest</th>
			<th>Titel</th>
			<th>Url</th>
		</tr>
		
		<?php foreach ($songs as $song) {
			echo "<tr>";
			echo "<td>" . $song['song_id'] . "</td>";
			echo "<td>" . $song['song_artist'] . "</td>";
			echo "<td>" . $song['song_name'] . "</td>";
			echo "<td>" . $song['song_url'] . "</td>";
			echo "</tr>";
		}
		?>
	</table>
</div>