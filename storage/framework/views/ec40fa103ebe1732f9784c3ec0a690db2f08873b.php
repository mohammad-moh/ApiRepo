<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="col-6">
            <h1>Republic of North Macedonia</h1>
            <h2><?php echo e($today); ?></h2>

            <h3 style="background-color: blue; color: white;">Confirmed Cases:
                <?php echo e($confirmedCovidCasesUntilToday->Cases); ?></h3>
            <h3 style="background-color: green; color: white;">Recovered Cases:
                <?php echo e($recoveredCovidCasesUntilToday->Cases); ?></h3>
            <h3 style="background-color: black; color: white;">Deaths: <?php echo e($deadCovidCasesUntilToday->Cases); ?></h3>
        </div>
    </div>

</body>

</html><?php /**PATH /Applications/MAMP/htdocs/lara_pro/resources/views/index.blade.php ENDPATH**/ ?>