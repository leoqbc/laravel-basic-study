<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= view()->yieldContent('titulo', 'TODO-System') ?></title>
        <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?= url() ?>/css/pure-min.css">
        <link rel="stylesheet" type="text/css" href="<?= url() ?>/css/style.css">
    </head>
    <body>
        <main role="main">	
            <?= view('template.menu')->render() ?>
            <div class="pure-g-r">
                <div class="pure-u-1-5"></div>
                <div class="pure-u-3-5">
                    <?= view()->yieldContent('content') ?>
                </div>
                <div class="pure-u-1-5"></div>
            </div>
        </main>
    </body>
</html>