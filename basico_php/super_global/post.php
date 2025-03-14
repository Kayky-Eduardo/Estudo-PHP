$_POST contém uma array de variaveis recebidas via HTTP POST.
Existem duas formas principais de mandar variáveis via http metodo POST,
por html forms e javascript pedidos https


<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SERVER']?>"></form>
</body>
</html>
<?php

?>