## PHP Superglobals
- Special only to PHP
- Interact with HTML forms and pass information from
one PHP script to another.
- `isset(var: any): bool` checks if a variable has been
set and non-NULL.
## Superglobals
- `$_GET` stores query string as an associative array (GET method)
- `$_POST` stores query string as an associative array (POST method)
- `$_SESSION` stores information across all pages on the server as an
associative array.
- `$_COOKIE` similar to `$_SESSION`, but stores info on browser.
## Sanitizing and Validation
- Use `filter_var(var: any, predefined const): any | false`
- Avoid XSS: `htmlspecialchars(var: string): string` => encode string
in HTML format.
## Session
- Use `session_start()`, `session_destroy()`
## Cookies
- If storing crucial/senstive information, **use** session instead.
- Use `setcookie()` at the beginning of the script, similar to
`header()`
