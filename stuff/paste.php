<?php
$USERARRAY= array("God", "Kosuke", "Jimmy");
$HASHARRAY = array("d600474b1b8e50d3633c91c0cf1efc454b79c9624a43fd7de441ee71745726ab", "b2efa0c461ed7748a1ea14db54ab9fe01550a27aa16688d65e628ff869d3459f", "be9ab1e9a728bb53334897dbb6f874d07a723fd636dc3da9bd4c67c95dc8310e",);
$Y = hash('sha256', xor_this($_POST["pword"]));
$C = count($USERARRAY);
$count = $C - 1;
if ($_POST["truename"] == "Kosuke" || $_POST["truename"] == "Jimmy" ) { 
    die();
}
for ($x = 0; $x <= $count; $x++) {
  if ($HASHARRAY[$x] == $Y)
  {if($USERARRAY[$x] == $_POST["truename"])
{paste();}}
}
function paste()
{
  date_default_timezone_set('Asia/Taipei');
  $txt = htmlspecialchars($_POST["msg"],ENT_QUOTES);
  file_put_contents("data.html",date("l h:i:sa")." | ".$_POST["truename"].":". $txt."\n", FILE_APPEND);
  file_put_contents("data.html","<br>"."\n", FILE_APPEND);
}
function xor_this($string) {

    // Let's define our key here
    $key = ('Doe');

    // Our plaintext/ciphertext
    $text = $string;

    // Our output text
    $outText = '';

    // Iterate through each character
    for($i=0; $i<strlen($text); )
    {
        for($j=0; ($j<strlen($key) && $i<strlen($text)); $j++,$i++)
        {
            $outText .= $text{$i} ^ $key{$j};
            //echo 'i=' . $i . ', ' . 'j=' . $j . ', ' . $outText{$i} . '<br />'; // For debugging
        }
    }
    return $outText;
}
?>
