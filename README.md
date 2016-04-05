# bachelor.io

## Setup Dependencies
- [Wordpress](www.wordpress.org) 4.4.2 or higher 
  - Setup sizes:
  	- go to wp-admin and under "settings" there's a "Media" page
  	- Change stuff to:
  		- Medium size: max width to 500 and max height to 670
  - [Woocommerce](www.woothemes.com/woocommerce/) 2.5.2 or higher
    - Dummy data ([Source](https://docs.woothemes.com/document/importing-woocommerce-dummy-data/)):
      - login to wp-admin
      - go to Tools -> import and select "wordpress" (install it if necessary)
      - select the file "dummy-data.xml" from \wp-content\plugins\woocommerce\dummy-data\
      - download the attachments too!

## Setup GruntJS
- Install node and npm (google it!)
- Install grunt-cli globally (npm install --global grunt-cli)
- Install the dependencies by running "npm install"
- Run the "grunt watch" command and that's it!
 
## Documentation
- [Woocommerce and Storefront (original)](https://docs.woothemes.com/)
- [GruntJS docs](http://gruntjs.com/getting-started)
