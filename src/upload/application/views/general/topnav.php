<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<div id='header_top' style="width: 100%;"><center>
	<nav class="mosaic wrap">
		<div class="mosaic extended" style="padding-bottom: 10px;">
			<img src="{dpath}planets/small/s_{image}.jpg" height="50" width="50" />
			<select size="1" onChange="eval('location=\'' + this.options[this.selectedIndex].value + '\'');" style="width: 100%;">
				{planetlist}
            </select>
		</div>
		
		<div class="mosaic veryExtended" style="min-width: 600px;">
			<!-- Metal -->
			<div class="sequential centered">
				<img border="0" src="{dpath}resources/metal.gif" width="42" height="22" />
				<i><b><font color="#ffffff">{Metal}</font></b></i>
				<font >{metal}</font>
			</div>
			
			<!-- Cristal -->
			<div class="sequential centered">
				<img border="0" src="{dpath}resources/crystal.gif" width="42" height="22" />
				<i><b><font color="#ffffff">{Crystal}</font></b></i>
				<font >{crystal}</font>
			</div>
		
			<!-- Deuterium -->
			<div class="sequential centered">
				<img border="0" src="{dpath}resources/deuterium.gif" width="42" height="22" />
				<i><b><font color="#ffffff">{Deuterium}</font></b></i>
				<font >{deuterium}</font>
			</div>
			
			<!-- Dark matter -->
			<div class="sequential centered">
				<img border="0" src="{dpath}resources/darkmatter.jpg" width="42" height="22" title="Dark Matter" />
				<i><b><font color="#ffffff">{Darkmatter}</font></b></i>
				<font color="#FFFFFF">{darkmatter}</font>
			</div>
			
			<!-- Energy-->
			<div class="sequential centered">
				<img border="0" src="{dpath}resources/energy.gif" width="42" height="22" />
				<i><b><font color="#ffffff">{Energy}</font></b></i>
				{energy}
			</div>
		</div>
	</nav>
    {show_umod_notice}
</div>
