<?php

//INFO

?>

<table>

    <thead>
        <th>Submitted at:</th>
        <th>Firstname</th>
        <th>Surname</th>
        <th>City</th>
        <th>Street</th>
        <th>Number</th>
        <th>Postal Code</th>
        <th>IBAN</th>
    </thead>

    <tbody>
        <?php foreach ($nodes as $nid => $node) { ?>
            <tr>
                <td>
                    <?php print (l(t($node['date_submitted']), 'node/'.$nid)); ?>
                </td>
                <td><?php print render($node['firstname']) ?></td>
                <td><?php print render($node['surname']) ?></td>
                <td><?php print render($node['city']) ?></td>
                <td><?php print render($node['street']) ?></td>
                <td><?php print render($node['number']) ?></td>
                <td><?php print render($node['pc']) ?></td>
                <td><?php print render($node['iban']) ?></td>
            </tr>
        <?php } ?>
    </tbody>

</table>