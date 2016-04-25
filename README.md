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
