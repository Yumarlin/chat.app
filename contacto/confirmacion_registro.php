<?php if (isset($_GET["error"])): ?>
<p>
No se pudo registrar el contacto
<a href="/home/registro.php">Intentar nuevamente</a>
</p>
<?php else: ?>

<p>
Se ha registrado correctamente 
<a href="/home/login.php">Iniciar session</a>
</p>

<?php endif; ?>
