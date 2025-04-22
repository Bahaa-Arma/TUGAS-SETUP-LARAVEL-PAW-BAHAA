<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <table border="1">
            <thead>
                <th>Model</th>
                <th>Brand</th>
                <th>Price</th>
            </thead>
            <tbody>
                <?php foreach ($cars as $car) { ?>
                    <tr>
                        <td>{{$car->model}}</td>
                        <td>{{$car->brand}}</td>
                        <td>{{$car->price}}</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>