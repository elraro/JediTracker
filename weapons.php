<?php

/**
 * Shows all active bits
 *
 * @param int $flag
 * @return array
 */
function bits($flag)
{
    $setBits = array();
    for ($i = 0; $i <= 31; $i++) {
        if ($flag & (1 << $i)) {
            $setBits[] = (1 << $i);
        }
    }

    // Sort array to order the bits
    sort($setBits);

    return $setBits;
}

echo "<pre>";
var_dump(bits(524287));
echo "</pre>";

?>