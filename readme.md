# Grok

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

v1 in m after reinstall

## Installation

Via Composer


``` bash
composer require eleganttechnologies/grok

php artisan vendor:publish --provider="ElegantTechnologies\Grok\GrokServiceProvider"
```

[ ] Add the following line to your routes/web.php file...... oh, there must be a more laravel-ish way
``` php
{{-- in 'routes/web.php' --}}
require_once(base_path('vendor/eleganttechnologies/grok/src/routes/web.php'));
```

[ ] Add a link in the grok pages (wherever is appropriate for your site). In a fresh install of jetstream, you
would problably add it next to the 'Dashboard' link at the top.
``` html
{{-- in 'resources/views/navigation-dropdown.blade.php' --}}

<x-jet-nav-link href="/grok" :active="request()->routeIs('grok*')">
    Grok
</x-jet-nav-link>
``` 

Install (since I don't know Laravel smart enough)
---
[ ] Copy css and js to our public. (or make work via laravel when you are smarter)
``` bash
cp packages/eleganttechnologies/grok/public/css/prism.css public/css
cp packages/eleganttechnologies/grok/public/js/prism.js public/js
```

Load the css and js.  
[ ] Add this to 'resources/views/layouts/app.blade.php'
``` html

<!-- In <head> -->
<head>
    ...
    <!-- Code highlighting 1 of 2-->
    <link href="/css/prism.css" rel="stylesheet" />
</head>

<body>
    ...
    <!-- Code highlighting 2 of 2 -->
    <script src="/js/prism.js"></script>
</body>

```

## Usage

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email jj.github@rohrer.org instead of using the issue tracker.

## Credits

- [JJ Rohrer][link-author]
- [All Contributors][link-contributors]

## License

mit. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/eleganttechnologies/grok.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/eleganttechnologies/grok.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/eleganttechnologies/grok/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/eleganttechnologies/grok
[link-downloads]: https://packagist.org/packages/eleganttechnologies/grok
[link-travis]: https://travis-ci.org/eleganttechnologies/grok
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/eleganttechnologies
[link-contributors]: ../../contributors
