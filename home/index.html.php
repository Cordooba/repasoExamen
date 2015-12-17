<?php  ?>
<div class="container">

      <form action="" method="POST" class="form-signin">
        <h2 class="form-signin-heading">Iniciar Sessión</h2>
        <label for="inputEmail" class="sr-only">Nombre de Usuario :</label>
        <?php if ( empty($error) ) : ?>
        <div class="form-group">
        	<input type="text" name="ussers" class="form-control" placeholder="Usser">
    	</div>
    	<?php else : ?>
    	<div class="form-group has-error">
  			<input type="text" class="form-control" name="ussers" placeholder="Usser">
    	</div>
    	<?php endif; ?>	
        <label for="inputPassword" class="sr-only">Password :</label>
        <?php if ( empty($error) ) : ?>
        <div class="form-group">	
        	<input type="password" name="pswd" class="form-control" placeholder="Password">
        </div>
        <?php else : ?>
        <div class="form-group has-error">
  			<input type="password" class="form-control" name="pswd" placeholder="Password">
    	</div>
    	<?php endif; ?>	
        <button class="btn btn-lg btn-primary btn-block" type="submit">Confirmar</button>
      </form>

</div> <!-- /container -->