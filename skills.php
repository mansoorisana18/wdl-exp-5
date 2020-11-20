<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/css2.css">
</head>
<body>
    <?php include_once('header2.php'); ?>  
    <main>
        <?php include_once('menu.php'); ?>
        <div class="wrapper">
            <div class="skills"> 
                <div class="skill-card">
                    <div class="heading">
                        <p><?php echo $profile['skill-title']; ?></p>
                    </div>
                    <table>
                        <tr>
                            <td><?php echo $skills[0]; ?></td>
                            <td class="bar c"></td>
                        </tr>
                        <tr>
                            <td><?php echo $skills[1]; ?></td>
                            <td class="bar cp"></td>
                        </tr>
                        <tr>
                            <td><?php echo $skills[2]; ?></td>
                            <td class="bar java"></td>
                        </tr>
                        <tr>
                            <td><?php echo $skills[3]; ?></td>
                            <td class="bar py"></td>
                        </tr>
                        <tr>
                            <td><?php echo $skills[4]; ?></td>
                            <td class="bar h"></td>
                        </tr>
                        <tr>
                            <td><?php echo $skills[5]; ?></td>
                            <td class="bar j"></td>
                        </tr>
                    </table>
                </div>
                <div class="p-skill-card">
                    <div class="heading">
                        <p><?php echo $profile['per-title']; ?></p>
                    </div>
                    <table>
                        <tr>
                            <td><?php echo $p_skills[0]; ?></td>
                            <td class="bar py"></td>
                        </tr>
                        <tr>
                            <td><?php echo $p_skills[1]; ?></td>
                            <td class="bar c" ></td>
                        </tr>
                        <tr>
                            <td><?php echo $p_skills[2]; ?></td>
                            <td class="bar c"></td>
                        </tr>
                        <tr> 
                            <td><?php echo $p_skills[3]; ?></td>
                            <td class="bar cp"></td>
                        </tr>
                        <tr>
                            <td><?php echo $p_skills[4]; ?></td>
                            <td class="bar c"></td>
                        </tr>
                        <tr>
                            <td><?php echo $p_skills[5]; ?></td>
                            <td class="bar java"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="traits">
                <div class="heading">
                    <p class="personal"><?php echo $profile['traits']; ?></p>
                </div>
                <div class="bullets">
                    <?php foreach($profile['traits_buls'] as $one_bul){ ?>
                    <p><?php echo $one_bul; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="side-bar-wrap sidebar-skills">
            <div class="side-bar">
                <?php include_once('side-bar.php'); ?>
            </div>
        </div>
    </main> 
    <script src="./js/main.js"></script>
    <script>
        document.getElementById("skill").classList.add('current');
        document.getElementById("ski").classList.add('current');
    </script>
</body>
</html>