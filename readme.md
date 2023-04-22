# Description:
PHP helper for php template system.
[Github Repo](https://github.com/neuralpin/neuralpin_temporalrender)

## How to use

content of test.php file
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php echo $menu; ?>
    <h1><?php echo $title; ?></h1>
</body>
</html>
```

content of test_menu.php file
```php
<nav>
    <?php foreach ($links as $text => $link): ?>
    <a href="<?php echo $link ?>"><?php echo $text ?></a>
    <?php endforeach; ?>
</nav>
```

code for main.php file
```php
use Neuralpin\temporalRender\htmlRender;

$html_full = new htmlRender('test.php', [
    'title' => 'Lorem ipsum dolor',
    'menu' => new htmlRender('test_menu.php', [
        'links' =>[
            'index' => '#',
            'about' => '#about',
            'contact' => '#contact',
        ]
    ]),
]);

echo $html_full;
```

HTML result for main.php file
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem ipsum dolor</title>
</head>
<body>
    <nav>
        <a href="#">inicio</a>
        <a href="#about">about</a>
        <a href="#contact">contact</a>
    </nav>    <h1>Lorem ipsum dolor</h1>
</body>
</html>
```