Perpage 0.8.23
=================
Override system settings with per-page settings.

## How to install an extension

[Download ZIP file](https://github.com/GiovanniSalmeri/yellow-perpage/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to override system settings

To override in a page the system setting of an extension, add a [page setting](https://github.com/annaesvensson/yellow-core#settings-page) with the same name at the top of a page.

## How to restrict per-page settings

If you don't want all system setting to be able to be overridden, then restrict per-page settings. You should do this for security reasons if several users can add or edit pages. Open file `system/extensions/yellow-system.ini`, change `PerpageRestriction: 1`, and write after `PerpageSettings:` a comma separated list of the system settings that you want to be overridable.

## Example

Content file with two settings which override the values set for [Toc](https://github.com/annaesvensson/yellow-toc) and [Gallery](https://github.com/annaesvensson/yellow-gallery):

    ---
    Title: Example page
    Description: Example for your website
    TocHeadingLevels: 2
    GalleryStyle: zoom
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

## Settings

The following setting can be configured in file `system/extensions/yellow-system.ini`:

`PerpageRestriction` = enable per-page settings restriction, 0 or 1  
`PerpageSettings` = a comma separated list of settings which may be overridden when restriction in enabled, e.g. `TocHeadingNumber, GalleryStyle`; you can also use wildcards, e.g. `Toc*`  

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/).
