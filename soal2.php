<?php
echo "text : ";
$input_text = fopen("php://stdin", "r");
$text = trim(fgets($input_text));
echo "Pattern : ";
$input_pattern = fopen("php://stdin", "r");
$pattern = trim(fgets($input_pattern));

function pattern_count($text, $pattern)
{
    $textlength = strlen($text);
    $patternlength = strlen($pattern);
    if ($patternlength === 0) {
        return 0;
    }
    $count = 0;
    $a = 0;

    if ($a < $textlength) {
        $b = 0;
        while ($b < $patternlength && $a + $b < $textlength && $text[$a + $b] === $pattern[$b]) {
            $b++;
        }

        if ($b === $patternlength) {
            $count++;
            $a += $patternlength;
        } else {
            $a++;
        }
    }

    return $count;
}

$result = pattern_count($text, $pattern);
echo "Jumlah pattren '$pattern' dalam teks '$text' adalah: $result";
