/*
Explanation:
Only works on sorted arrays.
Keep cutting the array in half:
     If the middle element is your target, return it.
     If the middle is smaller, search the right half.
     If it’s bigger, search the left half.
If you can't find the target, return -1.
*/

function binarySearch(arr, target) {
     let left = 0;
     let right = arr.length - 1;
   
     while (left <= right) {
       let mid = Math.floor((left + right) / 2);
   
       if (arr[mid] === target) {
         return mid; // found
       }
   
       if (arr[mid] < target) {
         left = mid + 1; // search in the right half
       } else {
         right = mid - 1; // search in the left half
       }
     }
   
     return -1; // not found
   }
   