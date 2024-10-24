<!DOCTYPE html>
<html lang="en">
<head>
    <title>the prisoner's dilemma</title>
    <meta charset="utf-8">
    <link href="<?php echo assets(); ?>/css.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <h2>And the results are in for the <a href="https://en.wikipedia.org/wiki/Prisoner's_dilemma" rel="noreferrer" target="_blank">Prisoner's Dilemma</a></h2>
    <h3>Here is the ranking</h3>
    <ul>
        <?php
        foreach ($players as $p){ ?>
            <li style="">
                <div><img src="https://api.multiavatar.com/<?php echo $p->getAvatar(); ?>.png"> <?php echo $p->getName(); ?> </div>
                <div><strong><?php echo $p->getScore(); ?> </strong></div>

            </li>
        <?php }

        ?>
    </ul>
    <h3>Each round's result</h3>
    <?php


    foreach ($players as $p){ ?>

        <h4><?php echo $p->getName(); ?> VS. </h4>
        <div class="results ">
            <?php
            foreach($p->getHistory() as $player => $h ) {
                echo '<div class="">'.$player.'</div>';
                ?>
                <table>
                    <tr>
                        <?php for($i=0; $i < count($h); $i++){ ?>
                            <th><?php echo $i; ?></th>
                        <?php  } ?>
                    </tr>
                    <tr>
                        <?php for($i=0; $i < count($h); $i++) {
                            echo '<td>' . $h[$i] . '</td>';
                        }
                        ?>
                    </tr>

                </table>
            <?php } ?>
        </div>

        <?php
    }
    ?>

</div>
</body>

</html>
