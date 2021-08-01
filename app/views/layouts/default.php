<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?= PATH ?>/public/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->getMeta(); ?>
    <link rel="stylesheet" type="text/css" href="<?= PATH ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= PATH ?>/public/css/style.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <a href="http://major-design.ru/test/#fullstack" class="logo">
                <svg id="icon-logo_mono" viewBox="0 0 175.5 56" width="100%" height="100%">
                    <path class="cls-1" d="M0 0v56h60V0zm43.6 40.8h-6v-6.3l.6-11.7h-.1l-6.1 18h-4l-6.1-17.9h-.1l.6 11.5v6.4h-6V15.2h7.8l5.7 17.9h.1l5.8-17.9h7.8z" fill="#007bff"></path>
                </svg>
            </a>
        </div>
    </header>

    <?= $content; ?>

</body>

<script src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="<?= PATH ?>/public/js/main.js"></script>

</html>