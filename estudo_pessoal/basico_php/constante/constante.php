<?php
# A constante se cria assim: define(name, value) ou const meucarro == "Volvo"
# A diferença dos dois:
# const cannot be created inside another block scope,
# like inside a function or inside an if statement.
# define can be created inside another block scope.

# Dá para criar uma array com uma constante
define("Carro", [
    "BMW",
    "toyota"
]);

echo "echo no primeiro indíce da array: " . Carro[0] . "<br>";

# é global, ou seja, pode ser usado dentro de uma função
function teste() {
    echo "Função chamando o segundo indíce: " . Carro[1] . "<br>";
}

teste();

/* Constantes mágicas

__CLASS__	If used inside a class, the class name is returned.	
__DIR__	The directory of the file.	
__FILE__	The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	The current line number.	
__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned.	
ClassName::class	Returns the name of the specified class and the name of the namespace, if any.
*/
?>