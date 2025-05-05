<?php
require_once "product.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">brand</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
                <th scope="col">price after discount</th>
                <th scope="col">final price</th>
            </tr>
        </thead>
        <?php foreach ($products as $pro) : ?>
            <tbody>
                <tr>
                    <td><?= $pro->name ?></td>
                    <td><?= $pro->price ?></td>
                    <td><?= $pro->brand ?></td>
                    <td><?= $pro->description ?></td>
                    <td><img src="<?= $pro->image ?>" alt="<?= $pro->image ?>" width="80"></td>
                    <td><?= $pro->price_after_discount(10) ?></td>
                    <td><?= $pro->final_price() ?></td>
                </tr>

            </tbody>
        <?php endforeach ?>
    </table>
</body>

</html>