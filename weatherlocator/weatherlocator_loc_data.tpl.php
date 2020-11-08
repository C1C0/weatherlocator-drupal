<?php

/**
 * Vytvára obsah so zvolenymi miestami na sledovanie.
 * - $locations
 *   Pole obsahujuce udaje: 
 *   ['nazov mesta'] = [
 *         'temperature' => num,
 *         'weather' => string,
 *         'icon' => 'string'
 *        ]
 */
?>

<table>
    <thead>
        <th>Location</th>
        <th>Temp.</th>
        <th>Weather</th>
        <th>Icon</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?php foreach ($locations as $location => $value) { ?>
            <tr id="<?php print render($value['id']) ?>">
                <td><?php print render($location); ?></td>
                <td><?php print render($value['temperature']); ?></td>
                <td><?php print render($value['weather']); ?></td>
                <td><img src="<?php print render($value['icon']); ?>" alt="" style="width:70px"></td>
                <td style="text-align: center;"><a href="<?php print $_SERVER['REQUEST_URI'].'/'.$value['id'].'/delete'; ?>">X</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>