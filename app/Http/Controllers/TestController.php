<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
 public function encrypt()
 {
  function data_encrypt($data = null)
  {

   /**  Todo's
    * 1. Declare a variable $ouput and set it's value to empty string
    * 2. Convert the input parameter ($data) to lower case and also split the string into array
    * 3. List out the encryption characters in form of key-value pairs
    * 4. Loop through the array of spllited string
    * 5. Get the next character string
    * 6. Test if the current character in the iteration is the same with the next character
    * 7. If true then test if the character is in the encryption list
    * 8. If the character is in the encryption list then get the value of the key
    * 9. Otherwise do not encrypt
    * 10. Convert to Uppercase and concat to variable $ouput
    * 11. Skip next loop
    * 12. If Step 6 is false then execute step 7 and 8 only
    * 13. return variable $ouput
    */

   $output = '';

   $search_arr = str_split(strtolower($data));
//    dd($search_arr);

   $search = ["a" => "e", "o" => "u", "p" => "b", "t" => "d", "s" => "c", "j" => "g", "m" => "n", "e" => "a", "u" => "o", "b" => "p", "d" => "t", "c" => "s", "g" => "j", "n" => "m"];

   for ($i = 0; $i < count($search_arr); $i++) {

    /* Test if current char and next is same */

    $next_char = !empty($search_arr[($i + 1)]) ? $search_arr[($i + 1)] : '';

    //  dd($next_char);

    if ($search_arr[$i] === $next_char) {

     /* Test if char is in the encryption list */

     $pick = !empty($search[$search_arr[$i]]) ? $search[$search_arr[$i]] : $search_arr[$i];

     $output = $output . strtoupper($pick);

     $i++; // skip next loop

    } else {

     /* Test if char is in the data encryption list */

     if (isset($search[$search_arr[$i]])) {

      $output = $output . $search[$search_arr[$i]];
     } else {

      $output = $output . $search_arr[$i];
     }

    }

   }

   return $output;
  }

  return dd(encrypt('Hello World'));

 }

 public function decrypt()
 {
  /**  Todo's
   * 1. Declare a variable $ouput and set it's value to empty string
   * 2. Convert the input parameter ($data) to lower case and also split the string into array
   * 3. List out the encryption characters in form of key-value pairs
   * 4. Loop through the array of spllited string
   * 5.
   */
  function data_decrypt($data = null)
  {

   $output = '';

   $search_arr = str_split($data);

   $search = ["a" => "e", "o" => "u", "p" => "b", "t" => "d", "s" => "c", "j" => "g", "m" => "n", "e" => "a", "u" => "o", "b" => "p", "d" => "t", "c" => "s", "g" => "j", "n" => "m"];

   for ($i = 0; $i < count($search_arr); $i++) {

    if (strtoupper($search_arr[$i]) == true) {

     $search_arr[$i] = strtolower($search_arr[$i]);

     $select = !empty($search[$search_arr[$i]]) ? $search[$search_arr[$i]] : $search_arr[$i];

     $ouput = $output . $select . $select;
    } else {

     if (isset($search[$search_arr[$i]])) {

      $output = $output . $search[$search_arr[$i]];
     } else {

      $output = $output . $search_arr[$i];

     }

    }

   }

   return $ouput;
  }

 }

}