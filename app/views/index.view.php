

<?php require 'partials/head.php'; ?>        
    <ul>
	    <?php foreach ($users as $user): ?>
	    	<li> <?=$user->name; ?> </li>
		<?php endforeach ?>
	</ul>
    <h1>Coloque seu nome:</h1>
    <form method="POST" action="/names">
        <input type="" name="name">
        <button type="submit">Ok</button>
    </form>
<?php require 'partials/footer.php'; ?>