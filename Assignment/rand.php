<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random quotation change</title>
    <style>
        blockquote {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 2px dashed #000;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        a {
            background-color: #4c49d0;
            color: #fff;
            font-size: 16px;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
        }

        a:hover {
            background-color: #bdb2ff;
            color: #000;
        }
    </style>
</head>

<body>
    <?php
    // Array of data
    $quotes1 = "<blockquote>
                    সফল মানুষেরা কাজ করে যায়। তারা ভুল করে, ভুল শোধরায় – কিন্তু কখনও হাল ছাড়ে না
                    <br/>
                    <small>- কনরাড হিলটন<small>
                </blockquote>";
    $quotes2 = "<blockquote>
                    নিজের প্রতি বিশ্বাস রাখো! নিজের যোগ্যতার ওপর ভরসা রাখো! নিজের শক্তির ওপর বিনয়ী কিন্তু যথেষ্ঠ আস্থা ছাড়া তুমি সফল বা সুখী হতে পারবে না
                    <br/>
                <small>- নরম্যান ভিনসেন্ট পীল<small>
                </blockquote>";
    $quotes3 = "<blockquote>
                    পানির গভীরতা নাকের কাছে উঠে আসার আগেই সাঁতার শিখে নাও
                    <br/>
                <small>- ড্যানিশ প্রবাদ<small>
                </blockquote>";
    $quotes4 = "<blockquote>
                নেকড়ের পালের সাথে বসবাস করো, তুমি বিড়াল হলেও একদিন গর্জন করতে শিখবে
                <br/>
            <small>- ড্যানিশ প্রবাদ<small>
            </blockquote>";
    $quotes5 = "<blockquote>
                অতীত নিয়ে সবসময়ে পড়ে থাকলে তোমার এক চোখ অন্ধ; অতীতকে ভুলে গেলে তোমার দুই চোখই অন্ধ
                <br/>
            <small>- রাশিয়ান প্রবাদ<small>
            </blockquote>";

    $data = array(
        $quotes1,
        $quotes2,
        $quotes3,
        $quotes4,
        $quotes5
    );

    // Get a random index from the array
    $randomIndex = array_rand($data);

    // Display the data corresponding to the random index
    echo "$data[$randomIndex] <br/> <a href='?'>Refresh</a>";
    ?>
</body>

</html>