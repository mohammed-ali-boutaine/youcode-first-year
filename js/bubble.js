/*
Explanation :

We loop through the array multiple times.
In each pass, we compare two numbers next to each other (arr[j] and arr[j + 1]).
If the left one is bigger, we swap them.
This way, the biggest number "bubbles up" to the end of the array with each pass.
We repeat this until the whole array is sorted.

*/
function bubbleSort(arr) {
  let n = arr.length;

  for (let i = 0; i < n - 1; i++) {
    for (let j = 0; j < n - i - 1; j++) {
      if (arr[j] > arr[j + 1]) {
        // Swap arr[j] and arr[j + 1]
        let temp = arr[j];
        arr[j] = arr[j + 1];
        arr[j + 1] = temp;
      }
    }
  }

  return arr;
}
