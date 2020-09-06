# One Act Records to Rowboat Music Compatibility Scripts

This is a set of compability scripts that aim to preserve existing URLs for a site transitioning from One Act Records to Rowboat Music.

In particular:

* `https://example.com/?r=[release]` and `https://example.com/release.php?r=[release]` are redirected to `https://example.com/release/[release]/`
* `https://example.com/release.php` is redirected to `https://example.com/` (in One Act Records this is a 404 error but this has been changed to align with the WIP Archive extension, in which `https://example.com/wipa/wips.php` redirects to `https://example.com/wipa/` with no release name)

## Usage

These scripts require a PHP-enabled Web server (which you probably have if you were using One Act Records).

Add the PHP scripts to the `static` directory of your Hugo site so they will be deployed alongside the other files.

### Index Configuration

You will need to configure your Web server to recognize both `index.php` and `index.html` as the index page, giving priority to `index.php`.

If you are using Apache, this can be done with the included `.htaccess` file. Add it to the `static` directory along with the PHP scripts (or add the lines to an existing `.htaccess` file).

If you are using a different Web server, please consult its documentation for setting the directory index.

## License

These scripts are available under the MIT License. Refer to `LICENSE.txt` for details.
