# bachelor.io

## Setup Dependencies
- [Wordpress](www.wordpress.org) 4.4.2 or higher 
  - [Woocommerce](www.woothemes.com/woocommerce/) 2.5.2 or higher
    - Dummy data ([Source](https://docs.woothemes.com/document/importing-woocommerce-dummy-data/)):
      - login to wp-admin
      - go to Tools -> import and select "wordpress" (install it if necessary)
      - select the file "dummy-data.xml" from \wp-content\plugins\woocommerce\dummy-data\
      - download the attachments too!
  - [Storefront](https://www.woothemes.com/storefront/) theme.

## Setup Child Theme (this repo)
- clone in \wp-content\themes\ folder
- activate it from administration!

## Setup GulpJS
- Install node and npm (google it!)
- Install gulp-cli globally (npm install --global gulp-cli)
- Install the dependencies by running "npm install"
- Run the "gulp watch" command and that's it!
 
## Documentation
- [Woocommerce and Storefront](https://docs.woothemes.com/)
- [Wordpress Child Themes](https://codex.wordpress.org/Child_Themes)
- [GulpJS docs](https://github.com/gulpjs/gulp/tree/master/docs)
