# var_dump()
- Displays structured information such as the type and value of the given variable.

# print_r()
- Prints the value stored in the variable in a human-readable format.

## error reporting
- If any PHP errors are occurring but not being displayed.
```
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

## output buffering:
- It's help you to capture any output before sending an execution to the browser.
```
ob_start(); // Start output buffering

// ... your PHP code here

ob_end_flush(); // Flush the buffer and output content
```