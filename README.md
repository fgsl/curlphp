# curlphp

A shortcut to curl thinked about APIs

## Use

### Linux distributions

If php is installed in `/usr/bin`, you can run direclty

```bash
curlphp.phar [URL] [DATA] [TOKEN] [METHOD]
```

`DATA`, `TOKEN` and `METHOD` are optional, but if must be passed in this order.

If you don't pass URL, the command prints a guideline text.

Alternatively, you can run

```bash
php curlphp.phar [URL] [DATA] [TOKEN] [METHOD]
```

or create a symlink to your php in `/usr/bin`.

You can move curlphp.phar to /usr/bin as curlphp, so you can run it as a command:

```bash
curlphp [URL] [DATA] [TOKEN] [METHOD]
```

### Windows

if php.exe is declared in PATH environment variable, you can run it so:

```bash
php.exe curlphp.phar [URL] [DATA] [TOKEN] [METHOD]
```

You can create a .BAT file that contains this call.
