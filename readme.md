# SCAPEGOAT

* Author: [Peter Amende](http://zutrinken.com/)
* License: GNU General Public License v2 or later

## About

* Made for the [Piratenpartei Berlin](http://berlin.piratenpartei.de/)
* Slider and 404 image by [Ben de Biel](http://www.bendebiel.com/)
* Font "PoliticsHeadBold" by [Fred Bordfeld](http://kaklotter.de/)
* Font "Awesome" by [Dave Gandy](http://fontawesome.io/)


## How to

* Slider Image Size ```1440x486```
* Post Image Size ```720x243```
* first of all, you have to insert some informations about yourself in your profile-section
* use custom menues and insert the start-page to the main-menu, if you want to display the home icon in your header menu
* use widgets for the sidebar and footer. The footer looks best with 4 Widgets with approximately equal heights. Don't use menu widgets in the footer, there is a separate footer-menu
* Firefox on Windows don't load the fonts of the theme. To fix that, you have to insert this on top of your **.htaccess**:
```<FilesMatch "\.(ttf|otf|eot|woff|svg)$">Header set Access-Control-Allow-Origin "*"</FilesMatch>```

## Shortcodes

### Columns

It's possible to create two, thre or four columned blocks. Colums are alway closed by a ````[divider]````` which clears the floating. The basic syntax of a three clolumned block is like:

	[three_columns_one]
	 first column content here...
	[/three_columns_one]
	[three_columns_one]
	 second column content here...
	[/three_columns_one]
	[three_columns_one_last]
	 third column content here...
	[/three_columns_one_last]
	[divider]

As the example above you can build other columned blocks with the following paramenters:

* ````[two_columns_one][two_columns_one_last]````

* ````[three_columns_one][three_columns_one][three_columns_one_last]````
* ````[three_columns_one][three_columns_two_last]````
* ````[three_columns_two][three_columns_one_last]````

* ````[four_columns_one][four_columns_one][four_columns_one][four_columns_one_last]````
* ````[four_columns_one][four_columns_one][four_columns_two_last]````
* ````[four_columns_one][four_columns_two][four_columns_one_last]````
* ````[four_columns_two][four_columns_one][four_columns_one_last]````
* ````[four_columns_one][four_columns_three_last]````
* ````[four_columns_three][four_columns_one_last]````

### Buttons

A default button is rectangled, orange and has a normal size. It only contains an attribute for your url "link-attribute" ````[button link="http://yourdomain.com"]Text[/button]````. You can extend this shortcode by the following attributes:

* Rounded button ````[button link="http://yourdomain.com" form="round"]Text[/button]````
* Cloloured button ````[button link="http://yourdomain.com" color="blue"]Text[/button]````. Possible colours: "blue, lightgrey, grey, darkgrey, red, green"
* Small or large button ````[button link="http://yourdomain.com" size="large"]Text[/button]````. Possible sizes: "xsmall, small, large, xlarge"

