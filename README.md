# Megamenu Template Part

In this tutorial you'll lear how to add custom markup, styles and scripts to a block-based WordPress theme. Case: add your own mega menu.

First we'll create the mega menu as normal HTML with styles and a script. When everything works we'll remove the things from the code, that WP added beforehand. Make sure that the order is:

* I) CSS
* II) HTML
* III) JavaScript

You can see a demonstration of the mega menu [here](https://thoth.dk/index.php/2024/01/17/mega-menu-2/)

## A) In an ordinary editor 

* Create the mega menu in HTML
* CSS: hide and style the mega menu
* JavaScript: use an event to show and hide the mega menu
* See: `megaMenu.html`

## B) WordPress Markup (WPML)

Remove the unessecary parts of the HTML. Then add the code for images and menu part. Do the layout work in Gutenberg, but copy the code from the editor.

* See: wordpress-markup.html

### WPML sample

The WPML is a comment with JSON that will define the settings of the blocks. Here is the markup for a menu with the reference 62:

~~~~
 <!-- wp:navigation 
    {
        "ref":62,
            "overlayMenu":"never",
            "layout": {
                "type":"flex",
                "justifyContent":"center",
                "orientation":"vertical"
                }
    } 
/-->
~~~~

### Create Your WPML by Gutenberg

You don't have to remember all these more or less weird JSON settings, just do the work in Gutenberg and copy the markup from the blocks.

Now you can copy this WPML to your HTML, and in this case a WP menu will appear where you put it in the mega menu.

## C) Create a template part 

Now you can create a template part. Go to Dashboard > Appearance > Editor > Patterns and create a headder template part. Then copy the content of `wordpress-markup.html` to the template part. 

Save your new header.

Then you can add the new header to all relevant templates. And then you'll have a theme with a mega menu.

## But Why do all this?

The mega menu demonstrates that you can add your own HTML, CSS and JavaScript to any part of your WordPress solution. If for some reason you cannot create something, that you know how to do with conventional code - you can do it!