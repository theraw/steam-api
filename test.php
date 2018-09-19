<?php
$KEY = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

    
require 'class.php';
$nc = new nc($KEY);

$user1 = $nc->Profile("76561198827879933");

// Print full output
echo "Full Output";
echo "<p></p>";
print_r($user1);

// Example 1
echo "<p></p>";
echo "Example 1";
echo "<p></p>";

$profileurl = $user1->{'players'}->{'player'}->{'profileurl'};
$nick = $user1->{'players'}->{'player'}->{'personaname'};

echo "Nick : <a href='$profileurl' target='_blank'>$nick</a>";

?>
