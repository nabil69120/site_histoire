<div class="row">
    <div class="col">
        <h2>Récemment ajoutés</h2>
    </div>
</div>
<div class="row" id="couvertures">
    <?php  for($i=0;$i<$nb_couvertures;$i++): ?>
    <div class="col-3">
		<a href="test.html">
			<div class="couverture">
				<div class="couverture_img_effet_opacity">
					<div class="couverture_img" style="background-image: url('assets/img/couverture/<?php echo $couverture_index[$i]->getImageUrl(); ?>');" ></div><br/>
				</div>
			<p class="couverture_title" style="text-align: center;"><?php echo $couverture_index[$i]->getTitle(); ?></p>
			</div>
		</a>
    </div>
    <?php endfor; ?>
</div>
