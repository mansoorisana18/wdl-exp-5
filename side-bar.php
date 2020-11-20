<?php include_once('config.php'); ?>

<div class="name">
    <h1><?php echo $profile['full-name']; ?></h1>
    <h3><?php echo $profile['designation']; ?></h3>
    <h2><?php echo $profile['cllg']; ?></h2>
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