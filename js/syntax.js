// Basic variable declarations
let name = "John"; // mutable variable
const age = 25; // immutable variable
var oldWay = "deprecated"; // old way, avoid using var

// Data types
let string = "Hello";
let number = 42;
let boolean = true;
let nullValue = null;
let undefinedValue;
let array = [1, 2, 3];
let object = { key: "value" };

// Template literals
const greeting = `Hello ${name}, you are ${age} years old`;

// If statements
if (age >= 18) {
     console.log("Adult");
} else if (age >= 13) {
     console.log("Teenager");
} else {
     console.log("Child");
}

// Loops
// For loop
for (let i = 0; i < array.length; i++) {
     console.log(array[i]);
}

// For...of loop (for arrays)
for (const item of array) {
     console.log(item);
}

// While loop
let counter = 0;
while (counter < 3) {
     console.log(counter);
     counter++;
}

// Do...while loop
let i = 0;
do {
     console.log(i);
     i++;
} while (i < 3);

// Async/Await
async function fetchData() {
     try {
          const result = await promiseExample;
          return result;
     } catch (error) {
          console.error(error);
     }
}

// ES6 Arrow functions
const add = (a, b) => a + b;
const multiply = (a, b) => {
     return a * b;
};