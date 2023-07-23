<?php 
// 1. strlen() - letter count for a string
echo strlen("Hello world!"); // outputs 12

// str_word_count() - word count for a string
echo str_word_count("Hello world!"); // outputs 2

// strrev() - reverse a string
echo strrev("Hello world!"); // outputs !dlrow olleH

// strpos() - If a match is found(by 2nd parameter), the function returns the character position of the first match. If no match is found, it will return FALSE.
echo strpos("Hello world!", "world"); // outputs 6

?>