## Exceptions
- An exception is an object in PHP which can be used to modify logic flows.
- When an exception is not caught, fatal errors prevents
the continutation of scripts from being exucuted.
- use `try...catch...finally`
- Custom exception is possible, but after the handler is called, the script
is terminated. (use `set_exception_handler(name: string)`)
## Errors
- 4 types of errors: notices, warnings, syntax errors and fatal errors.
- 2 settings: `error_reporting` and `display_errors`
- `error_reporting: E_ERROR | E_ALL`
- `display_errors: On | Off`
- Modify `php.ini`/`httpd.conf`/`.htaccess`
- `set_error_handler()`
- `register_shutdown_function()`
- `error_get_last()`
- `ini_get('display_errors)`, `init_set('display_errors', '1|0')`
- `error_log($message)`
