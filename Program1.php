<?php

echo "<h2> Program to find count</h2>";

$file = "prg1.php";
$doc = fopen($file, 'r');
$output   = fread($doc, filesize("prg1.php"));

//no.of lines in file
$Total_lines = count(file($file));
echo "The number of lines in '".$file. "' is " .$Total_lines;
echo "<br/>";

//no.of special chracters
$spch = array("@","#","$","%","&","*");
$length = strlen($output);
$counter  = 0;
for ($i = 0; $i < $length; $i++) 
{
	if (array_search($output[$i], $spch)) 
	{
            $counter++;
        }
}
echo "The number of special characters in '".$file. "' is " .$counter;
echo"<br/>";



//no.of characters
$Total_chars = iconv_strlen($output);
echo "The number of characters in '".$file. "' is " .$Total_chars;
echo "<br/>";

//no.of vowels
$vowel_array = array("a","e","i","o","u","A","E","I","O","U");
$length = strlen($output);
$counter  = 0;
for ($i = 0; $i < $length; $i++) 
{
	if (array_search($output[$i], $vowel_array)) 
	{
            $counter++;
        }
}
echo "The number of vowels in '".$file. "' is " .$counter;

echo "<br/>";




//no.of consonant
for ($i = 0; $i < $length; $i++) 
{
	if (!array_search($output[$i], $vowel_array)) 
	{
            $counter++;
        }
}
echo "The number of consonants in '".$file. "' is " .$counter;

echo "<br/>";

//no.of digits
$digits = array(1,2,3,4,5,6,7,8,9,0);
$length = strlen($output);
$counter  = 0;
for ($i = 0; $i < $length; $i++) 
{
	if (array_search($output[$i], $digits)) 
	{
            $counter++;
        }
}
echo "The number of digits in '".$file. "' is " .$counter;
echo"<br/>";


//no.of words
$Total_words = str_word_count(file_get_contents("prg1.php"));
echo "The number of words in '".$file. "' is " .$Total_words;
echo "<br/>";



//size of file
$size = filesize($file);
echo "The number of size of file in '".$file. "' is " .$size;
echo"<br/>";



fclose($doc);
?>

