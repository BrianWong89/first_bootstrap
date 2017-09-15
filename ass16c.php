<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 14/9/2017
 * Time: 3:49 PM
 */
$post = [
    'action' => 'listActions',
];

$ch = curl_init('www.alphis.net/spellcasting-mana-shield.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

$response_array = json_decode($response, true);

$healthPoints = 100;
$manaPoints = 100;
$invulnerability = false;

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Spell</th><th>Current HP</th><th>Current MP</th>\r\n</tr>\r\n";

foreach ($response_array as $spell) {
    //print_r($spell);
    //Check if damage spell AND invulnerable
    if ($spell['type'] == "mana-shield") {
        $invulnerability = true;
    }
    //This will trigger when the bubble shield blocks for you
    if ($spell['type'] == "damage-spell" && $invulnerability == true) {
        $invulnerability = false;
        //Let's echo out the row to show that the damage spell was negated
        echo "<tr>\r\n";
        echo "<td>" . $spell['type'] . "</td>\r\n";
        echo "<td>" . $healthPoints . "</td>\r\n";
        echo "<td>" . $manaPoints . "</td>\r\n";
        echo "</tr>\r\n";
        continue;
    }
    if ($spell['type'] == "damage-spell") {
        $healthPoints += $spell['hp'];
    }
    if ($spell['type'] == "heal-spell") {
        $healthPoints += $spell['hp'];
        $manaPoints += $spell['mana'];
    }
    if ($spell['type'] == "fireball") {
        $manaPoints += $spell['mana'];
    }
    echo "<tr>\r\n";
    echo "<td>" . $spell['type'] . "</td>\r\n";
    echo "<td>" . $healthPoints . "</td>\r\n";
    echo "<td>" . $manaPoints . "</td>\r\n";

    if ($healthPoints <= 0) {
        echo "You have died instantly.";
        break;
    }
    echo "</tr>\r\n";
}

echo "</table>";

?>