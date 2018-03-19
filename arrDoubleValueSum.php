<?php
$a = [];

$a[] = array(
    'color' => 'Red',
    'taste' => '15',
    'shape' => '25',
    'name' => '35',
);
$a[] = array(
    'color' => 'Red',
    'taste' => '100',
    'shape' => '200',
    'name' => '250',
);
$a[] = array(
    'color' => 'Blue',
    'taste' => '150',
    'shape' => '270',
    'name' => '280',
);
?>

    <table border="1">
        <tr>
            <th>color</th>
            <th>taste</th>
            <th>shape</th>
            <th>name</th>
        </tr>
        <?php
        foreach ($a as $b) {
            ?>
        <tr>
            <td><?php echo $b['color']; ?></td>
            <td><?php echo $b['taste']; ?></td>
            <td><?php echo $b['shape']; ?></td>
            <td><?php echo $b['name']; ?></td>
        </tr>
    <?php } ?>
    </table>
