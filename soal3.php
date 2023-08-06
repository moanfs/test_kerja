<?php
echo "text : ";
$input_text = fopen("php://stdin", "r");
$input = trim(fgets($input_text));

function hitung_huruf($input)
{
    $letterCounts = array();
    $input = str_replace(' ', '', $input);
    for ($i = 0; $i < strlen($input); $i++) {
        $letter = $input[$i];
        if (!isset($letterCounts[$letter])) {
            $letterCounts[$letter] = 0;
        }
        $letterCounts[$letter]++;
    }

    $result = array();
    foreach ($letterCounts as $letter => $count) {
        if (ctype_upper($letter)) {
            $result[$letter] = $count;
            $lowercaseLetter = strtolower($letter);
            if (!isset($result[$lowercaseLetter])) {
                $result[$lowercaseLetter] = 0;
                // return $result;
            } else {
                $result[$lowercaseLetter] = 0;
            }
            // } else {
            //     $result[$letter] = $count;
            //     $uppercaseLetter = strtoupper($letter);
            //     if (!isset($result[$uppercaseLetter])) {
            //         $result[$uppercaseLetter] = 0;
            //     }
        }
    }
    return $result;
    ksort($result);
}
$result = hitung_huruf($input);
print_r($result);
