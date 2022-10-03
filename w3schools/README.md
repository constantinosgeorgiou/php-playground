# [PHP Introduction](https://www.w3schools.com/php/php_intro.asp)

## Variables

- Starts with `$`
- Must be alphanumberic (A-z, 0-9, and _ )
- Case-sensitive

## Scope

All global variables are stored in `$GLOBALS['<variable>']`

To use global variable in function use the `global` keyword.

```php
<?php
$x = 5;
function test() {
    global x;
    echo $x;
}
test();
?>
```

Use the `static` keyword to keep local variables.

```php
function test() {
    static $x = 0;
    echo $x;
    $x++;
}
test();
test();
test();
```
