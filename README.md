# Vernacular

Vernacular is a library to make common WordPress tasks less painful.

## Installation

1. Download the [zip](https://github.com/nathancarnes/vernacular/archive/master.zip) or clone the repo into your WordPress directory.

2. Add a `require_once` statement into your `functions.php` file:

```php
require_once('vernacular/bootstrap.php');
```

## Classes

### DateTime

A class for common DateTime functions.

- `is_in_future($datetime)` -- *boolean*
- `is_in_past($datetime)` -- *boolean*
- `today` -- *date*
- `group_array_by_month_and_year($array)` -- *array*

### Loop

A class for looping posts.

- `random_posts($count, $post_type)` -- Loops random posts
- `recent_posts($count, $post_type)` -- Gets recent posts
- `load($post)` -- Shorthand for the
  [`setup_postdata`](https://codex.wordpress.org/Function_Reference/setup_postdata) WordPress function
- `reset` -- Shorthand for the
  [`wp_reset_postdata`](http://codex.wordpress.org/Function_Reference/wp_reset_postdata) WordPress function

### Registrar

### Utilities

### Widget


## Contributing

1. Fork it

2. Create your feature branch (`git checkout -b my-new-feature`)

3. Commit your changes (`git commit -am 'Add some feature'`)

4. Push to the branch (`git push origin my-new-feature`)

5. Create new Pull Request
