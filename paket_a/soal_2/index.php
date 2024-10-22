<?php

function item($num, $color = null)
{
    $item = ["number" => $num];
    if ($color) {
        $item["color"] = $color;
    }
    return $item;
}

function createData()
{
    $strings = "123456789";
    $data = [];
    for ($i = 0; $i < 9; $i++) {
        for ($j = 8; $j >= 0; $j--) {
            if ($j > $i) {
                if ($j == ($i + 1)) {
                    $data[$i][] = item($strings[$j], 'blue');
                } else {
                    $data[$i][] = item($strings[$j]);
                }
            } else {
                if ($i - $j == 0) {
                    $data[$i][] = item($strings[$j - $j], 'red');
                } else {
                    $data[$i][] = item($strings[$i - $j]);
                }
            }
        }
    }
    return $data;
}

// Prepare data
$data = createData();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal No 2</title>
</head>

<body>

    <?php foreach ($data as $dat) : ?>
        <?php foreach ($dat as $item) : ?>
            <?php if (isset($item['color'])) : ?>
                <span style="color: <?= $item['color'] ?>"><?= $item['number'] ?></span>
            <?php else : ?>
                <span><?= $item['number'] ?></span>
            <?php endif; ?>
        <?php endforeach; ?>
        <br>
    <?php endforeach; ?>

</body>

</html>