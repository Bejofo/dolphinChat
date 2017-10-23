<html>
<body>
<?php
$USERARRAY= array("God", "Kosuke", "Jimmy");
$HASHARRAY = array("d600474b1b8e50d3633c91c0cf1efc454b79c9624a43fd7de441ee71745726ab", "b2efa0c461ed7748a1ea14db54ab9fe01550a27aa16688d65e628ff869d3459f", "be9ab1e9a728bb53334897dbb6f874d07a723fd636dc3da9bd4c67c95dc8310e",);
$Y = hash('sha256', $_POST["P"]);
$XOR = xor_this($_POST["P"]);
$C = count($USERARRAY);
$count = $C - 1;
for ($x = 0; $x <= $count; $x++) {
  if ($Y == $HASHARRAY[$x] )
  {
   $ConfirmedUser=$USERARRAY[$x];
    if ($_POST["U"] != $ConfirmedUser)
{}else{$In=1;}
  }
}
if (isset($In)) {
echo 'You are logged in as '.$ConfirmedUser;
echo '<br>';
echo '<style>';
echo 'input[type=button], input[type=submit], input[type=reset] {';
echo 'background-color: #4CAF50;';
echo 'border: none;';
echo 'color: white;';
echo 'padding: 16px 32px;';
echo 'text-decoration: none;';
echo 'margin: 4px 2px;';
echo 'cursor: pointer;';
echo 'width: 100%;';
echo '}';
echo 'input[type=text] {';
echo 'width: 100%;';
echo 'padding: 12px 20px;';
echo 'margin: 8px 0;';
echo 'box-sizing: border-box;';
echo 'border: 3px solid #ccc;';
echo '-webkit-transition: 0.5s;';
echo 'transition: 0.5s;';
echo 'outline: none;';
echo 'width: 100%;';
echo '}';
echo '';
echo 'input[type=text]:focus {';
echo 'border: 3px solid #555;';
echo '}';
echo '';
echo '</style>';
echo '<iframe name="votar" style="display:none;"></iframe>';
echo '<iframe src="data.html#end" height="70%" width="100%"></iframe>';
echo '<form action="paste.php" autocomplete="off" method="post" target="votar"';
echo 'onsubmit="this.submit(); this.reset(); return false;">';
echo '<input type="Text" name="msg" maxlength="60">';
echo '<input type="submit" value="Send">';
echo '<input type="hidden" name="truename" value="'.$ConfirmedUser.'">';
echo '<input type="hidden" name="pword" value="'.$XOR.'">';
echo '</form>';
}
else
{
echo '<img src="';
echo 'https://i.imgflip.com/1dxet4.jpg" alt="WRONG!" style="width:1500px;height:720px;">';
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
</body>
</html>
