<?php

/**
 * Obsah vlozeny do blocku
 * - $location
 *   Pole obsahujuce udaje: 
 *   ['nazov mesta'] = [
 *         'temperature' => num,
 *         'weather' => string,
 *         'icon' => 'string'
 *        ]
 */

?>


<div class="card">
    <?php foreach ($location as $locationName => $value) { ?>
        <h3><?php print render($locationName) . ", " . render($value['temperature']) . "°C"; ?></h3>
        <hr>
        <p><?php print render($value['weather']) ;?></p>
        <img src="<?php print render($value['icon']) ;?>" alt="">
    <?php } ?>
</div>