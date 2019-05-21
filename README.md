# instagram

Instagram Module for UliCMS 2019.2.8 and later

## Features

* When you create an image type page the image file will automatically getting posted at Instagram.
* The "Meta Description" field is used as picture caption for Instagram.

## Requirements

You need the [SimpleInstall v2 Packaging Tools](https://github.com/derUli/simpleinstall-v2) and the composer package manager.

The module is compatible with PHP 7.1 and later

## Howto install

1. ```open a terminal in the downloaded repository```
2. ```cd src/content/modules```
3. ```composer install```
4. ```cd ../../..```
5. ```mk-sin-package.py```
6. In UliCMS backend click "Package" > "Install Package" > "Upload package"
7. Select the generated *.sin file in dist/ folder and confirm the installation
8. Grant the "instagram_settings" permission to your user's group
9. "Package" > "instagram"
10. Enter your Instagram login data and save