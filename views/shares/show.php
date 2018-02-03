<div style="width: 100%">
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<a class="btn btn-primary btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Dodaj</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="card" style="width: 100%; margin-top:5% background-color: #f8f8f8 !important;">
			<div  class="card-header" ><h2 class="text-center"><?php echo $item['title']; ?></h2><!-- TYTUŁ -->
				<div class="card-header" style="background-color: #f8f8f8 !important;"><img style="max-width: 100%" src="<?php
					echo $item['image']; ?>">  <!-- OBRAZEK -->
				</div>
			</div>
			<small style="background-color: #f8f8f8 !important;" class="text-right"><?php echo $item['create_date']; ?></small> <!-- DATA_DODANIA -->
			<div class="card-block" style="padding: 5%; background-color: #f8f8f8 !important;"> <!--TRESC -->
				<p class="card-text" >
				<?php 
					echo $item['body']; 
				?></p> 
				 <?php if(isset($_SESSION['is_logged_in'])) : ?>
				<a class="float-right btn btn-outline-primary" href="<?php echo ROOT_PATH; ?>shares/edit/<?php echo $item['id'];?>">Edytuj</a>
				<?php endif; ?>
				<a class="float-right btn btn-outline-default" href="<?php echo $item['link']; ?>" target="_blank">Sprawdź</a>
 			</div>
		</div>
	<?php endforeach; ?>
</div>