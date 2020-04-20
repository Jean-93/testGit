<?php if ($userIsConnected) { ?>
	<span class='text-white'>Vous êtes connecté.</span>
<?php 
}
else { ?>
	<a href="#" class="text-white">Cliquez ici pour vous connecter.</a>
<?php 
	}
?>
<?php if ($userIsConnected) : ?>
	<span class='text-white'>Vous êtes connecté.</span>
<?php 

else : ?>
	<a href="#" class="text-white">Cliquez ici pour vous connecter.</a>
<?php endif; ?>