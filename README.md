# Megamenu Template Part

Steps:

## A) In an ordinary editor 

* Create the mega menu in HTML
* CSS: hide and style the mega menu
* JavaScript: use an event to show and hide the mega menu
* See: `megaMenu.html`

## B) WordPress Markup (WPML)

Remove the unessecary parts of the HTML. Then add the code for images and menu part. Do the layout work in Gutenberg, but copy the code from the editor.

* See: wordpress-markup.html

## WPML sample

The WPML is a comment with JSON that will define the settings of the blocks. Here is the markup for a menu with the reference 62:

~~~~
 <!-- wp:navigation 
    {
        "ref":62,
            "overlayMenu":"never",
            "layout": {
                "type":"flex",
                "justifyContent":"center",
                "orientation":"vertical"}
    } 
/-->
~~~~

You don't have to remember all these settings, just do the work in Gutenberg and copy the markup from the blocks.

Now you can copy this WPML to your HTML, and in this case a WP menu will appear where you put it in the mega menu.