<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/css1.css">
</head>
<body>
    <?php include_once('header1.php'); ?>    
    <main>
        <?php include_once('menu.php'); ?>
        <div class="name">
            <h1><?php echo $profile['full-name']; ?></h1>
            <h3><?php echo $profile['designation']; ?></h3>
            <h2><?php echo $profile['cllg']; ?></h2>
        </div>
        <div class="pic">
            <img src="./images/Profile Pic.png" alt="My image">
        </div>
        <div class="about">
            <p><?php echo $profile['about']; ?></p>
        </div>
        <div class="contact">
            <table>
                <?php foreach($profile['contact'] as $one_contact){ ?>
                <tr>
                    <td><img src="./images/<?php echo $one_contact['image']; ?>" alt=""></td>
                    <td><?php echo $one_contact['text']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </main> 
    <script src="./js/main.js"></script>
    <script>
        document.getElementById("home").classList.add('current');
        document.getElementById("hom").classList.add('current');
    </script>
</body>
</html>