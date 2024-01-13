# wp-fileproxy

``` Descontinued, unsure if still works ```

wp-fileproxy is a simple php reverse proxy that allows to download remote files on demand to your local server filesystem. This can be used standalone or plugged into a Wordpress installation as user access control, it can also be customized to plug with additional pieces of software such as pdf.js.

This script requires PHP, cURL and appropriate write permissions.

Possible use case: a user wants to display pdf files from a remote server on demand via pdf.js with a wordpress frontend. With minimal customization this script can be plugged to wordpress and sequentially link pdf.js to this script making pdfs easily accessible and readable right on the browser without additional software.

## Quick Start

1. Add `wp-fileproxy.php` to your Wordpress installation or custom script folder.

2. Configure and customize `$cfg[]` inside `wp-fileproxy.php` to your requirements.

3. Add processing steps as required, such as string sanitization/escaping, additional parameters, etc.

4. Proxify all your special resources and enjoy.

## Mini QA

Q. Does this work with other CMS besides Wordpress?

A. Yes but you'll need to customize accordingly.

Q. Is there any other methods of achieving this without curl?

A. Yes, theres plenty of alternatives on the internet.

## License

Distributed under MIT License. See `license.md` for more information.
