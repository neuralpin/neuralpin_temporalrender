# Description:
PHP helper for php template system.


## How to use

```php
use Neuralpin\temporalRender\htmlRender;

$html_full = new htmlRender('test.php', [
    'title' => 'Lorem ipsum dolor',
    'menu' => new htmlRender('test_menu.php', [
        'links' =>[
            'inicio' => '#',
            'about' => '#about',
            'contact' => '#contact',
        ]
    ]),
]);

echo $html_full;
```