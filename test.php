<?php
	function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$n = 1;


while ($n < 16) {
// $n = sprintf("%02d", $n);
$url1 = "http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%20";
$url2 = ""; // a
$url3 = "/index.html";
$url = $url1 . $n . $url2 . $url3;

$subject_gif1 = 'ebooks/second/hindi/Chapter ';
$subject_gif2 = '.pdf.gif';

$fullstring = file_get_contents($url);
$parsed = get_string_between($fullstring, "IMGFiles : 'docs/", '_{page}.jpg');
$final_URL =  $url1 . $n . $url2 . '/docs/' . $parsed; 

$gif = $subject_gif1 . $n . $subject_gif2;

//$unit = "Unit-" . $n;
$unit = "Unit-" . $n;
echo '<pre>';
echo '				array(
						"' . $final_URL . '",
						"' . $gif . '",
						"' . $unit . '",
				),
';
$n++;
}
echo '</pre>';
/*
	http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%201/docs/Chapter%201.pdf
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/1a/docs/1a.pdf",
						"ebooks/first/english/unit-1.gif",
						"Unit-1"
				),
*/
?>

