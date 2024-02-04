<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>



    <?php
    $people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
    $people = $people_obj["people"];
    ?>
    <div class="container">
        <?php $count = 0; ?>

        <?php foreach ($people as $row) { ?>
            <?php if ($count % 3 == 0) { ?>
                <div class="row">
                <?php } ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= $row["image"] ?>" style="width:50%">
                        <div class="container">
                            <h2><?= $row["name"] ?></h2>
                            <p class="title"><?= $row["education"] ?></p>
                            <p><?= $row["role"] ?></p>
                            <p><?= $row["email"] ?></p>
                            <p><?= $row["phone"] ?></p>
                        </div>
                    </div>
                </div>

                <?php
                if ($count % 3 == 2 || $count == count($people) - 1) { ?>
                </div>
            <?php } ?>
            <?php $count++; ?>

        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>