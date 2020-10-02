<ul class="gridder">
	<?php
	for ($i=0; $i < count($datos) ; $i++):
		$d=explode("||", $datos[$i]);

		?>
		<li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'.$i?>">
			<img class="imagen" src="<?php echo $d[0] ?>">
		</li>

		<?php
	endfor;
	?>	
</ul>

<?php 
	for ($i=0; $i < count($datos); $i++):
		$d=explode("||", $datos[$i]);
?>

<div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content">
	<div class="row">
		<div class="col-sm-6">
			<br><br><br>
			<img class="imagen" src="<?php echo $d[0]?>" class="img-responsive" />
		</div>
		<div>
			<h2 class="tinta3"><br><?php echo $d[1]; ?></h2>
			<p class="tinta4"><?php echo $d[2]; ?></p>
		</div>
	</div>
</div>

<?php 
	endfor;
?>