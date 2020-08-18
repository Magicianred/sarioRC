# sarioRC

SarioRC (render components) is a microframework written in PHP that make super easy to write a PHP web app with a components base approach.

Example:

*server\components\hello.php*

```php
<h1> Hello <?= $data["name"] ?></h1>
```

*public\index.php*

```php
<body>
<?php
    require_once("../server/core/functions.php");

    render_component("hello", [
        "name" => "User"
    ])
?>
</body>
```

## Usage

1. Grab the latest version

2. Add your component to `/server/components/`

3. Render your component from your page with `render_component(string $title, array $data=[]);`

## History

- **v0.1**: first release, components support, component data injection, JSON data read/write, SCSS support, added .htaccess file for security