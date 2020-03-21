{BuildListScript}
<section class="mosaic wrap">
	{BuildList}
	{list_of_buildings}
	<article class="mosaic spaceBetween">
		<a href="game.php?page=infos&gid={i}">
			<img border="0" src="{dpath}elements/{i}.gif" align="top" width="120" height="120">
		</a>
		<p class=extended>
			<a href="game.php?page=infos&gid={i}">{n}</a>{nivel}<br>
			{descriptions}<br>
			{price}
			{time}
		</p>
		<button>{click}<button>
	</article>
	{/list_of_buildings}
</section>