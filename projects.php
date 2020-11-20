<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/css2.css">
</head>
<body>
    <?php include_once('header2.php'); ?>  
    <main>
        <?php include_once('menu.php'); ?>
        <div class="pro-wrap">
            <div class="heading pro-heading">
                <p><?php echo $profile['proj-title']; ?></p>
            </div>
            <div class="mini">
            <table>
                <?php foreach($profile['mini-proj'] as $one_mini){ ?>
                <tr class="twitter emojis food">    
                    <td class="pro-card">
                        <p><?php echo $one_mini['name']; ?></p>
                        <div class="download">
                            <img src="./images/<?php echo $one_mini['image']; ?>" alt="Download icon">
                            <a href="<?php echo $one_mini['link']; ?>" target="_blank">DOWNLOAD</a>
                        </div>
                    </td>
                    <td>
                        <img class="pro-logo" src="./images/<?php echo $one_mini['logo']; ?>" alt="Python Logo">
                    </td>
                </tr>
                <?php } ?>    
            </table> 
            </div>    
        </div>                     
        <div class="side-bar-wrap pro-side-wrap">
            <div class="side-bar">
                <?php include_once('side-bar.php'); ?>
            </div>
        </div>
    </main>
    <script src="./js/main.js"></script>
    <script>
        document.getElementById("project").classList.add('current');
        document.getElementById("proj").classList.add('current');
    </script> 
</body>
</html>