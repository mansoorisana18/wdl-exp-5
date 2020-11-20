<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/css2.css">
</head>
<body>
    <?php include_once('header2.php'); ?>
    <main>
        <?php include_once('menu.php'); ?>
        <div class="wrapper">
            <div class="heading">
                <p><?php echo $profile['edu-title']; ?></p>
            </div>
            <div class="academic-cards">
                <?php foreach($profile['academic-card'] as $one_card){ ?>
                <div class="card-zoom">
                    <img src="./images/<?php echo $one_card['image']; ?>" alt="SSC Logo">
                    <p><?php echo $one_card['std']; ?></p>
                    <p><?php echo $one_card['board']; ?></p>
                    <p><?php echo $one_card['institute']; ?></p>
                    <p><?php echo $one_card['year']; ?></p>
                    <h6><?php echo $one_card['percent']; ?><h6>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="side-bar-wrap">
            <div class="side-bar">
                <?php include_once('side-bar.php'); ?>
            </div>
        </div>
    </main>
    <script src="./js/main.js"></script>
    <script>
        document.getElementById("edu").classList.add('current');
        document.getElementById("ed").classList.add('current');
    </script> 
</body>
</html>