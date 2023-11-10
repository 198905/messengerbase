<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=databasemessages;charset=utf8', 
    'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
$stmtGet='SELECT DISTINCT * FROM `messagestable` ORDER BY id ASC LIMIT 500000';
$queryGet = $bdd->query($stmtGet);
$messages = $queryGet->fetchAll();
foreach ($messages as $msg) { ?>
    
<?php if ($msg['pseudo']===$_SESSION['name']){ ?>
    <div class="messageFieldUser">
        <p id="nameSessionUser">
            <?= $msg['pseudo'] ?>
        </p>
        <p id="message">
            <?= $msg['msg'] ?>
            
        </p>
    </div>
    <?php }else if ($msg['pseudo']!==$_SESSION['name']){ ?>
        <div class="messageFieldUser2">
            <p id="nameSessionUser2">
                <?= $msg['pseudo'] ?>
            </p>
            <p id="message">
                <?= $msg['msg'] ?>
            </p>
        </div>
        <?php }}
