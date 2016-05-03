Atrox Imageviewer
=================

The Atrox Imageviewer (**AIv**) displays your screenshots or images on a nice and clean page. In combination with e.g. [Monosnap](https://www.monosnap.com/) or [ShareX](https://getsharex.com/), you can use it as your own imageuploader service.


## Requirements ##
* Apache 2
* mod_rewrite
* PHP 5.6

## Installation ##
1. Upload the directory `imgviewer/` with all it's files and folders to your webspace.
2. Open up `imgviewer/index.php` in your browser. Your server now creates a `.htaccess` file with all that's needed.
3. Done! You can now start uploading images into the main directory.


## Using ##
All images have to be uploaded into the main directory (e.g. `/imgviewer/`) of the AIv. If you now open up an image in this directory w/o its file extension, the AIv will appear. If you open up the same image w/ file extension, it will be displayed in the usual way.


## Features ##
- [x] Display images of various types 
- [x] Automatic setup
- [x] Download and embed image
- [ ] Automatic update checker
- [ ] Better mobile support
- [ ] Zoomable images


## Configuration ##
A configuration is not necessarily required. If you still want to change the default values, just copy or move `/imgviewer/page/config_default.php` to `/imgviewer/page/config.php` and edit the values.

| Setting       | Description |
|---------------|---------------|
| `$title`      | Title, which is displayed in the navigationbar and in the title of your browser |
| `$dateformat` | The date format used in the AIv ([supports all php parameters](http://php.net/manual/de/function.date.php#refsect1-function.date-parameters)) |
| `$format`     | Array with all image types that should be displayed by the AIv     |
| `$headerlink` | Link that is used in the header of AIv |

## Tips ##
#### Force HTTPS ####
If you want to force the use of HTTPS, you can just a the following lines to the **beginning** (not to the end!) of your `.htaccess` file.
```
RewriteEngine On
RewriteCond %{SERVER_PORT} YOUR_HTTP_PORT
RewriteRule ^(.*)$ https://YOUR_DOMAIN_NAME/$1 [R,L]
```
Replace `YOUR_HTTP_PORT` with your HTTP port (default: 80) and `YOUR_DOMAIN_NAME` with your domain, e.g. _yourdomain.tld_. This rule will rewrite all requests from `YOUR_DOMAIN_NAME:YOUR_HTTP_PORT` to `https://YOUR_DOMAIN_NAME`.