#FontAwesome Shortcodes
This project is a PerchCMS add-on app that enables FontAwesome shortcodes in the CMS text fields.
 

## Installation
1. Add cognetif_fontawesome to `addons/apps/` folder
2. Add `cognetif_fontawesome` to  `apps.php` file
3. If using ckeditor, add: `"PERCH_LOGINPATH/addons/apps/cognetif_fontawesome/ckeditor.js"` to `addons/plugins/editors/ckeditor/_config.json`



## Usage:

In any html text field add : `[cms:cfa user]` will render: `<i class="fa fa-user"></i>` to the region markup.

Extra classes can be added as additional arguments to the shortcode:  `[cms:cfa user fa-fw fa-spin]` will render `<i class="fa fa-user fa-fw fa-spin"></i>`

To specify a FontAwesome style preference, define the following constant in the order of your choosing:
```
COGNETIF_FONTAWESOME_PRECEDENCE="regular,light,solid"
```
The above is the default precedence.  Note that "brands" is prepended to the list automatically.


## Update Icons:

If you need to update the icon source json file, there is a generation script in the `/util` folder.


## License
This project is free, open source, and GPL friendly. You can use it for commercial projects, open source projects, or really almost whatever you want.

## Issues
Create a GitLab Issue: https://gitlab.com/cognetif-open-source/perchcms/fontawesome-shortcodes/issues

## Developper

Cognetif : Jordin Brown <jbrown@cognetif.com>