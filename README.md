# phpDocumentor phar distribution.

This package allows users to install phpDocumentor via composer.
Using the distributed phar's from the [phpDocumentor main repo](https://github.com/phpDocumentor/phpDocumentor).
This package only provides an installer.
New tags are created when a new version of phpDocumentor is released.
If you want to use a bleeding edge version of phpDocumentor please consult the main repo.

## Usage

Add phpdocumentor to your project.

```
composer require --dev phpdocumentor/shim:^3
```

phpDocumentor phar will be downloaded and adding into your projects `bin` directory.
Which is `vendor/bin` by default.

From now, you can follow the normal flow to use phpDocumentor.
For more information about using phpDocumentor please read our [docs](https://docs.phpdoc.org/latest).

## Report issues

If you have any issues using phpDocumentor please report bugs in the [main repo](https://github.com/phpDocumentor/phpDocumentor/issues)

