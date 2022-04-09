## Basic PHP tasks
- displaying outputs to users
- duplicating codes across multiple pages
- redirecting users

No `?>` if there's only PHP codes to prevent unwanted whitespace issue at EOF => Warning `Headers already sent" warning issue when modifying response headers.

## Duplicating codes
- `include` vs `require`: the latter stops the script and throws error.
- `include_once`
- `require_once`
