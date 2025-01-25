<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problems</title>
</head>

<body style="margin: 0px 100px 0px 100px;">
    <h1>All<h1>
            <hr>
            <?php

                $dir = opendir('./problems/');

                while (($file = readdir($dir)) !== false) {
                    echo str_contains($file, 'php') ? "<a href=https://github.com/Mahdyaralipor/leetCode/blob/main/problems/$file>" . str_replace('.php','',$file) . "</a>". "</br>" : '';
                }

                closedir($dir);
            ?>
</body>

</html>
