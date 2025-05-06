<?php


###  Outputs text :
echo "Hello World"; // Outputs text
print "Hello World"; // Alternative output

### Variables and Data Types

$string = "Hello";       // String
$int = 42;               // Integer
$float = 3.14;           // Float
$bool = true;            // Boolean
$array = [1, 2, 3];      // Array
$null = null;            // Null


###  Operators

// Arithmetic: + - * / % **
// Comparison: == === != !== > < >= <=
// Logical:    && || ! and or xor
// Assignment: = += -= *= /= %= .=
// String concatenation: .


###  Control Structures

// If-else
if ($condition) {
     // code
} elseif ($otherCondition) {
     // code
} else {
     // code
}

// Switch
switch ($variable) {
     case 'value1':
          // code
          break;
     default:
          // code
}

// Loops
for ($i = 0; $i < 10; $i++) { /* code */
}
while ($condition) { /* code */
}
do { /* code */
} while ($condition);
foreach ($array as $value) { /* code */
}
foreach ($array as $key => $value) { /* code */
}


###  Functions

function sayHello($name = 'Guest')
{
     return "Hello, $name!";
}
echo sayHello('John'); // Hello, John!

// Variable functions
$func = 'sayHello';
echo $func('Jane'); // Hello, Jane!


###Type Declarations

function addNumbers(int $a, int $b): int
{
     return $a + $b;
}

// Union types (PHP 8.0+)
function processInput(int|string $input): void
{
     // code
}


// Null Coalescing Operator

$username = $_GET['user'] ?? 'guest';
