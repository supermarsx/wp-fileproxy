# wp-fileproxy

wp-fileproxy is a simple php file that acts as a reverse proxy to gather remote files on demand to a local server file system. This can be plugged into a Wordpress installation to block access to unauthorized users and can be customized to work with or without wordpress easily.

This script requires PHP, cURL and appropriate write permissions.

Possible use case: a user wants to display pdf files from a remote server on demand via pdf.js with a wordpress frontend. With minimal customization this script can be plugged to wp and pdf.js linked to this script making pdf easily accessible and readable right on the browser.

## Quick Start

1. Add `wp-fileproxy.php` to your Wordpress installation or custom script folder.

2. Configure and customize `$cfg[]` inside `wp-fileproxy.php` to your requirements.

3. Add additional processing steps as required, such as escaping strings, putting additional parameters, etc.

4. Proxify all your special resources and enjoy.

## Mini QA

Q. Does this work with other CMS besides Wordpress?

A. Yes but further customization will be required.

Q. Is there any other methods of achieving this without curl?

A. Yes, theres plenty of alternatives on the internet.

## License

Distributed under MIT License. See `license.md` for more information.