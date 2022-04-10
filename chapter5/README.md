## Strings (type follows TypeScript format)
- Concatenate: `.`
- `strlen(var: string)`
- `strtolower(var: string)`, `strtoupper(var: string)` (immutable functions)
- `trim(var: string, symbol: string)`
- `substr(var: string, start: number, end?: number)`
- `strtotime(var: string): number | false`
- `date(var: string, time?: typeof strtotime(var: string)): string`

Good practice to manually set timezone

- `date.timezone='Europe/Helsinki'` inside php.ini
- `date_default_timezone_set='Europe/Helsinki'` at the start of php script

## Arrays
### Initialization
- Initialized by `array()`
- Simple array is called indexed array.
- Associative array can be created.
- These can be combined.
### Display
- Use `var_dump()` or `print_r()`
### Adding
- `$array[]=...`
- `$array['abc']=...`
### Removing
- `array_splice(var: Array<any>, start: number, howMany?: number)`
### Commonly used funcs
- `count(var: Array<any>)`: Length of array
- `array_search(value: any, var: Array<any>): number | false`
- `in_array(value: any, var: Array<any>): true | false`
- `array_merge(...var: Array<any>): Array<any>`
