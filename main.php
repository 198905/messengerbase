
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script>
       
    </script>
    <title>Docnumet</title>
</head>
<body>
    <div class="display">
        <?php if (empty($_SESSION['name'])) { ?>
        <div class="modal">
            <p>Pseudo:</p>
            <form action="" method="post" class="form">
                <textarea name="pseudo" class="modalText"></textarea>
                <button type="submit" class="buttonModal">Valider</button>
            </form>
            <?= $erreur ?>
        </div>
        <?php } ?>

        <?php if ($id!=='') { ?>
        <div class="messages">
        </div>

        <div class="messagesType">
            <form  method="post"  id="form" name="message">
                <h1><br>:_</h1>
                <input type="text" name="message" class="messageC">
                <input type="submit" value="Envoyer" class="messageEnvoyer" style="display:none;">
            </form>
            <div class="MicroAndFiles">
                <div class="micro">
                    *
                </div>
                <div class="files">
                    
                </div>
            </div>
            <form action="" method="post">
                <button type="submit" name="sessionD">Deconnexion</button>
            </form>
        </div>
        <?php 
        } ?>
    </div>    
    <script src='js.js'></script>
</body>
</html>