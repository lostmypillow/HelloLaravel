<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    <title>Hello PHP</title>


    <style>
        body {
            font-family: 'NeueHaasGroteskText Pro Regular', Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
<main class="container-fluid">
    <nav>
        <ul>
            <li> <?= "$greeting Wendy"; ?></li>
        </ul>
    </nav>
    <h2>
        <?= $message ?>
    </h2>
    <h2>Recommended Shows</h2>

    <ul>

        <?php foreach ($IndShows as $show): ?>
            <li>
                <?= $show ?>™
            </li>

        <?php endforeach; ?>

        <?php ?>
    </ul>


    <ul>
        <?php foreach ($showsDict as $show): ?>
            <li>

                <a href="<?= $show['purchaseUrl'] ?>">
                    <?= $show['name']; ?> (<?= $show['releaseYear'] ?>)
                </a>


            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Pike shows:</h3>
    <ul>

        <?php foreach ($showsDict as $show): ?>
            <?php if ($show['mainChar'] === 'Christopher Pike'): ?>
                <li>

                    <a href="<?= $show['purchaseUrl'] ?>">
                        <?= $show['name']; ?> (<?= $show['releaseYear'] ?>)
                    </a>


                </li>
            <?php endif; ?>
        <?php endforeach; ?>

    </ul>
    </ul>

    <h3>Shows after 2018</h3>
    <ul>
        <?php foreach ($filteredShows as $show): ?>
            <li>

                <a href="<?= $show['purchaseUrl'] ?>">
                    <?= $show['name']; ?> (<?= $show['releaseYear'] ?>)
                </a>


            </li>
        <?php endforeach; ?>

    </ul>


</main>


</body>

</html>