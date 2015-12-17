<?php  

	session_start();

?>
<p>Hola, <strong><?=$_SESSION['usser']['ussers']?></strong></p>
<div class="container">
	<div class="col-lg-4">
		<form action="?newFilm" method="POST">
			<div class="form-group">
    			<label for="film">Película :</label>
    			<input type="text" class="form-control" name="film">
  			</div>
			<div class="form-group">
				<label for="film">Descripción de la película :</label>
    			<input type="text" class="form-control" name="descripcion">
			</div>
			<div class="form-group">
				<label for="film">Director :</label>
    			<input type="text" class="form-control" name="author">
			</div>
			<button type="submit" class="btn btn-primary">Añadir</button>
		</form>
	</div>
	<div class="col-lg-8">
                <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Pelicula</th>
                            <th>Autor</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if ( isset($films) ) :?>
                    <?php foreach($films as $film): ?>
                        <tr>
                            <td><?=$film['film']?></td>
                            <td><?=$film['author']?></td>
                            <td>
								<form action="?edit" method="POST">
									<input type="hidden" name="id" value="<?=$film['id_film']?>">
                            		<button type="submit" class="glyphicon glyphicon-pencil"></i>
                            	</form>
                            </td>
                            <td>
                           		<form action="?delete" method="POST">
									<input type="hidden" name="id" value="<?=$film['id_film']?>">
                            		<button type="submit" class="glyphicon glyphicon-trash"></i>
                            	</form>	
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                	<?php else: ?>
						<p>Sin peliculas...</p>
                	<?php endif; ?>	
            	</div>
	</div> <!-- .row -->
</div>