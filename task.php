<?php
// Function TASK
// TASK2
$name = "remove";

function reverse_string($str) {
    return strrev($str);
}

echo reverse_string($name);
echo "<br>";
//TASK3
function areAllCharactersLowercase($string): bool {
    return ctype_lower($string);
}

$inputString = "remove"; 
if (areAllCharactersLowercase($inputString)) {
    echo "All characters are lowercase.";
} else {
    echo "Not all characters are lowercase.";
}
echo "<br>";
//TASK4
$x=10;
$y=12;
function swap($a,$b)
{
    $temp=$a;
    $a=$b;
    $b=$temp;
}
swap($x,$y);
echo "x:$x,y:$y";
//TASK 6 i dont know 
$array1=array(2,4,7,4,8,4,5);
$array2=array_unique($array1);
$array2=array_values($array2);
foreach($array2 as $value)
{
    echo $value."<br>";
}
// FUNCTIONS TASKS FINISHED 
//logical statments
function isLeapYear($year) {
    // Check if the year is a leap year
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

// Sample input
$year = 2013;

if (isLeapYear($year)) {
    echo "This year is a leap year.";
} else {
    echo "This year is not a leap year.";
}
$temapture=27;
if($temapture<20)
{
    echo "it's winter";
}
else if ($temapture>20)
{
echo " it is summertime";
}


function calculateSum($firstInteger, $secondInteger) {
    if ($firstInteger === $secondInteger) {
        $result = ($firstInteger + $secondInteger) * 3;
        echo "($firstInteger + $secondInteger) * 3 = $result\n";
        echo "‘It is summertime!’\n";
    } else {
        $result = $firstInteger + $secondInteger;
        echo "Sum: $result\n";
    }
}

calculateSum(2, 2);

function checkSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    if ($sum === 30) {
        return $sum;
    } else {
        return 'false';
    }
}

echo checkSum(10, 10);

function isMultipleOfThree($number) {
    return $number > 0 && $number % 3 === 0 ? 'true' : 'false';
}

echo isMultipleOfThree(20);

function isInRange($number) {
    return ($number >= 20 && $number <= 50) ? 'true' : 'false';
}

echo isInRange(50);

function findLargest($numbers) {
    return max($numbers);
}

echo findLargest([1, 5, 9]);

function calculateElectricityBill($units) {
    if ($units <= 50) {
        return $units * 2.50;
    } elseif ($units <= 150) {
        return (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        return (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        return (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }
}

echo calculateElectricityBill(300);

function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'addition':
            return $num1 + $num2;
        case 'subtraction':
            return $num1 - $num2;
        case 'multiplication':
            return $num1 * $num2;
        case 'division':
            return $num2 != 0 ? $num1 / $num2 : 'Division by zero error';
        default:
            return 'Invalid operation';
    }
}

echo calculator(10, 5, 'addition');

function isEligibleToVote($age) {
    return $age >= 18 ? 'is eligible to vote' : 'is not eligible to vote';
}

echo isEligibleToVote(15);

function checkNumberSign($number) {
    if ($number > 0) {
        return 'Positive';
    } elseif ($number < 0) {
        return 'Negative';
    } else {
        return 'Zero';
    }
}

echo checkNumberSign(-60);

function calculateGrade($scores) {
    $average = array_sum($scores) / count($scores);
    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

echo calculateGrade([60, 86, 95, 63, 55, 74, 79, 62, 50]);
?>
<!-- finsihed logical tasks-->
<?php
// 1. Display numbers 1-10 with dashes
echo implode('-', range(1, 10)) . "\n";

// 2. Add all integers between 0 and 30
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo $total . "\n";

// 3. Generate the first pattern
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == $j) {
            echo chr(65 + $i) . ' ';
        } else {
            echo 'A ';
        }
    }
    echo "\n";
}

// 4. Generate the second pattern
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == $j) {
            echo ($i + 1) . ' ';
        } else {
            echo '1 ';
        }
    }
    echo "\n";
}

// 5. Generate the third pattern
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == $j) {
            echo ($i + 1) . ' ';
        } else {
            echo '0 ';
        }
    }
    echo "\n";
}

// 6. Calculate the factorial of a number
$n = 5;  // Sample input
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}
echo $factorial . "\n";

// 7. Calculate the Fibonacci sequence
$n = 10;  // Adjust n for the length of the sequence
$fib_sequence = [0, 1];
for ($i = 2; $i < $n; $i++) {
    $fib_sequence[] = $fib_sequence[$i - 1] + $fib_sequence[$i - 2];
}
echo implode(', ', $fib_sequence) . "\n";

// 8. Count characters 'c' in the text
$text = "Orange Coding Academy";
$count_c = substr_count(strtolower($text), 'c');
echo $count_c . "\n";

// 9. Create a multiplication table
echo "<table cellpadding='3px' cellspacing='0px'>\n";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>\n";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>$i * $j = " . ($i * $j) . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

// 10. FizzBuzz program
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
echo "\n";

// 11. Generate a Floyd triangle
$n = 5;  // Number of lines
$number = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number . " ";
        $number++;
    }
    echo "\n";
}
?>
<!-- finished loops -->
 <?php 
 // 1. String manipulations
 $string = "I am a full stack developer at orange coding academy.";
 echo strtoupper($string) . "\n"; // Uppercase
 echo strtolower($string) . "\n"; // Lowercase
 echo ucfirst($string) . "\n"; // First letter uppercase
 echo ucwords($string) . "\n"; // First letter of each word capitalized
 
 // 2. Convert numeric string to date format
 $numericString = '085119';
 $dateFormatted = substr($numericString, 0, 2) . ':' . substr($numericString, 2, 2) . ':' . substr($numericString, 4, 2);
 echo $dateFormatted . "\n";
 
 // 3. Check for specific word in sentence
 $sentence = 'I am a full stack developer at orange coding academy';
 $searchWord = 'Orange';
 if (stripos($sentence, $searchWord) !== false) {
     echo 'Word Found!' . "\n";
 }
 
 // 4. Extract filename from URL
 $url = 'www.orange.com/index.php';
 $filename = basename($url);
 echo $filename . "\n";
 
 // 5. Extract username from email address
 $email = 'info@orange.com';
 $username = explode('@', $email)[0];
 echo $username . "\n";
 
 // 6. Get last three characters of the string
 $lastThreeChars = substr($email, -3);
 echo $lastThreeChars . "\n";
 
 // 7. Generate random password
 $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
 $password = '';
 for ($i = 0; $i < 8; $i++) {
     $password .= $characters[random_int(0, strlen($characters) - 1)];
 }
 echo $password . "\n";
 
 // 8. Replace first word of the sentence
 $replacementWord = 'Our';
 $modifiedSentence = preg_replace('/^\S+/', $replacementWord, $sentence);
 echo $modifiedSentence . "\n";
 
 // 9. Find first character that is different between two strings
 $string1 = 'dragonball';
 $string2 = 'dragonboll';
 $position = -1;
 for ($i = 0; $i < min(strlen($string1), strlen($string2)); $i++) {
     if ($string1[$i] !== $string2[$i]) {
         $position = $i;
         break;
     }
 }
 if ($position !== -1) {
     echo "First difference between two strings at position " . ($position + 1) . ": \"" . $string1[$position] . "\" vs \"" . $string2[$position] . "\"\n";
 }
 
 // 10. Put a string in an array and var_dump it
 $stringToArray = "Twinkle, twinkle, little star.";
 $array = preg_split('/\s+/', $stringToArray);
 var_dump($array);
 
 // 11. Print next letter of inputted letter
 $char = 'a'; // Change to 'z' for second example
 $nextChar = ++$char === 'z' ? 'a' : $char;
 echo $nextChar . "\n";
 
 // 12. Insert a string at specified position
 $originalString = 'The brown fox';
 $insertString = 'quick';
 $insertPosition = 4; // Position after 'The'
 $newString = substr_replace($originalString, " $insertString", $insertPosition, 0);
 echo $newString . "\n";
 
 // 13. Get first word of a sentence
 $firstWord = explode(' ', $originalString)[0];
 echo $firstWord . "\n";
 
 // 14. Remove zeroes from a number
 $numberWithZeroes = '0000657022.24';
 $numberWithoutZeroes = ltrim($numberWithZeroes, '0');
 echo $numberWithoutZeroes . "\n";
 
 // 15. Remove part of a string
 $originalString2 = 'The quick brown fox jumps over the lazy dog';
 $removePart = 'fox';
 $modifiedString2 = str_replace($removePart, '', $originalString2);
 echo trim($modifiedString2) . "\n";
 
 // 16. Remove trailing dashes from a string
 $originalString3 = 'The quick brown fox jumps over the lazy dog---';
 $trimmedString = rtrim($originalString3, '-');
 echo $trimmedString . "\n";
 
 // 17. Remove special characters
 $specialString = '\"\1+2/3*2:2-3/4*3';
 $cleanedString = preg_replace('/[^0-9]/', ' ', $specialString);
 echo trim($cleanedString) . "\n";
 
 // 18. Select first 5 words
 $sampleString = 'The quick brown fox jumps over the lazy dog';
 $firstFiveWords = implode(' ', array_slice(explode(' ', $sampleString), 0, 5));
 echo $firstFiveWords . "\n";
 
 // 19. Remove commas from numeric string
 $numericStringWithCommas = '2,543.12';
 $cleanedNumericString = str_replace(',', '', $numericStringWithCommas);
 echo $cleanedNumericString . "\n";
 
 // 20. Print letters from 'a' to 'z'
 for ($letter = 'a'; $letter <= 'z'; $letter++) {
     echo $letter . ' ';
 }
 echo "\n";
 ?>
 