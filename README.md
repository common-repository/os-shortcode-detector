[![Build Status](https://travis-ci.org/essensx/wp-os-detect.svg?branch=master)](https://travis-ci.org/essensx/wp-os-detect)

# Wordpress Shortcode OS Detector Plugin
A Wordpress plugin that allows you to use shortcodes to detect the operating system of the user.

## Requirements
- PHP from 5.3
- WordPress from 4.0

## Installation

1. Move project to plugins directory
2. Go to WordPress admin panel
3. Go to plugins section
4. Enable OS Shortcode Detect plugin
5. Enjoy!

## Usage

Use ```os_detect``` shortcode to detect the OS of the page visitor.`

#### Available parameters:

```platforms``` - For what OS to show/hide content. Defaults to all OS. <br />
e.g. ```["os_detect platforms="Windows,Linux"]Text[/os_detect]```

```type``` - To show/hide action for selected platforms. Defaults to show. <br />
e.g. ```["os_detect type="hide"]Text[/os_detect]```


----------

#### Plugin supports these operating systems:
 - Windows
 - WindowsPhone
 - OSX
 - iOS
 - Android
 - ChromeOS
 - Linux
 - SymbOS
 - Nokia
 - BlackBerry
 - FreeBSD
 - OpenBSD
 - NetBSD
 - OpenSolaris
 - SunOS
 - OS2
 - BeOS
 - Unknown
    

----------

#### Example Usage:

```[os_detect platforms="Windows,Linux,OSX" type="hide"]Text[/os_detect]``` <br />
Does not show "Text" on Windows, Linux, OSX operating platforms.


```[os_detect platforms="ChromeOS" type="show"]Text[/os_detect]``` <br />
Show "Text" on ChromeOS operating platforms.

----------

## Thanks

This plugin utilizes php-browser-detector library https://github.com/sinergi/php-browser-detector.

