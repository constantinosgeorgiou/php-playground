
# WordPress

## [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/)

### [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/)

Use tabs

Add two blank lines between sections and one blank line between blocks in a section.

Each selector should be on its own line, ending in either a comma or an opening curly brace. Property-value pairs should be on their own line, with one tab of indentation and an ending semicolon.

Use lowercase and hyphens.

Comments should be formatted as PHPDoc.

### [HTML Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/html/)

Self-closing elements should be written like this: `<br />`

Use tabs.

### [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/)

Indentation with tabs.

Negation operator `!` should have a following space.

Always include extra spaces around elements and arguments:

```js
var i;

if ( condition ) {
    doSomething( 'with a string' );
} else if ( otherCondition ) {
    otherThing( {
        key: value,
        otherKey: otherValue
    } );
} else {
    somethingElse( true );
}

// Unlike jQuery, WordPress prefers a space after the ! negation operator.
// This is also done to conform to our PHP standards.
while ( ! condition ) {
    iterating++;
}

for ( i = 0; i < 100; i++ ) {
    object[ array[ i ] ] = someFn( i );
    $( '.container' ).val( array[ i ] );
}

try {
    // Expressions
} catch ( e ) {
    // Expressions
}
```

Preferred ways of checking the type of an object:

- String: typeof object === 'string'
- Number: typeof object === 'number'
- Boolean: typeof object === 'boolean'
- Object: typeof object === 'object' or _.isObject( object )
- Plain Object: jQuery.isPlainObject( object )
- Function: _.isFunction( object ) or jQuery.isFunction( object )
- Array: _.isArray( object ) or jQuery.isArray( object )
- Element: object.nodeType or _.isElement( object )
- null: object === null
- null or undefined: object == null
- undefined:
  - Global Variables: typeof variable === 'undefined'
  - Local Variables: variable === undefined
  - Properties: object.prop === undefined
  - Any of the above: _.isUndefined( object )

Object properties should be accessed via dot notation, unless the key is a variable or a string that would not be a valid identifier:

```js
prop = object.propertyName;
prop = object[ variableKey ];
prop = object['key-with-hyphens'];
```

### [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/)

[WordPress Coding Standards for PHP_CodeSniffer](https://github.com/WordPress/WordPress-Coding-Standards)

Always use full PHP tags.

Use single and double quotes when appropriate. If you’re not evaluating anything in the string, use single quotes.

Use require\[_once\] for unconditional includes.

``` php
require_once ABSPATH . 'file-name.php';
```

Naming conventions:

- Use lowercase letters and hyphens.
- Pascal case and underscores for classes, traits, interfaces, and enums.
- Uppercase for constants.
- files:
  - use lowercase letters and hyphens.
  - if class file, start name with `class-` then class name. Convert uppercase to lowercase. and underscores to hyphens.
  - if template file, end name with `template`.

Type casts must be lowercase and use short form: `(int)`, `(float)`, `(bool)`.

Include space around array index only if it is a variable.

PHP magic constants should be uppercase.

Classes:

- Visibility should always be declared.

Modifier order:

- For class declarations:
  - `abstract` or `final` modifier.
  - (optional) `readonly` modifier.
- For constant declarations:
  - `final` modifier.
  - visibility modifier.
- For property declarations:
  - visibility modifier.
  - (optional) `static` or `readonly` modifier.
  - (optional) `type` declaration.
- For method declarations:
  - (optional) `abstract` or `final` modifier.
  - visibility modifier.
  - (optional) `static` modifier.

Use `elseif` not `else if`.

Use Yoda conditions for `==`, `!=`, `===`, and `!==` comparisons:

```php
if ( true === $the_force ) {
    $victorious = you_will( $be );
}
```

Use pre-increment/decrement for stand-alone statements: `--$a;`.
