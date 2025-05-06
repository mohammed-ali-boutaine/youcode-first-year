/*
Explanation:

Go through the array one item at a time.
If you find the target, return its index.
If you reach the end and don’t find it, return -1.

*/

function linearSearch(arr, target) {
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] === target) {
      return i; // found at index i
    }
  }
  return -1; // not found
}
