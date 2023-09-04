<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .home-sections {
            display: flex;
            justify-content: space-between;
            padding: 0 5%;
        }
    </style>
</head>

<body>
    <?php
    echo "<h3>hello world</h3>";
    ?>
    <main class="home-sections">
        <section>
            <?php
            echo "<p>Study >> Basic</p>";
            ?>
            <ul>
                <li>
                    <a href='./Study/Basic/string.php' target='_blank'>string.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/variable.php' target='_blank'>variable.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/constant.php' target='_blank'>constant.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/numbers.php' target='_blank'>numbers.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/math.php' target='_blank'>math.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/conditions.php' target='_blank'>conditions.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/loops.php' target='_blank'>loops.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/function.php' target='_blank'>function.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/objects.php' target='_blank'>objects.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/Array.php' target='_blank'>Array.php</a>
                </li>
                <li>
                    <a href='./Study/Basic/SuperGlobals.php' target='_blank'>SuperGlobals.php</a>
                </li>
            </ul>
        </section>
        <section>
            <?php
            echo "<p>Practice >></p>";
            ?>
            <ul>
                <li>
                    <a href="./Practice/FormValidation.php">Form Validation</a>
                </li>
            </ul>
        </section>
    </main>
</body>

</html>