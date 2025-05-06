/*
Explanation :

Start from the beginning of the array.
Look through the rest of the array to find the smallest number.
When you find it, swap it with the current position.
Move to the next position and repeat the same steps.
In the end, the array will be sorted from smallest to largest.


*/

function selectionSort(arr) {
  let n = arr.length;

  for (let i = 0; i < n - 1; i++) {
    // Assume the current index has the smallest value
    let minIndex = i;

    // Look for the real smallest element in the rest of the array
    for (let j = i + 1; j < n; j++) {
      if (arr[j] < arr[minIndex]) {
        minIndex = j;
      }
    }

    // Swap using temp variable
    let temp = arr[i];
    arr[i] = arr[minIndex];
    arr[minIndex] = temp;
  }

  return arr;
}
