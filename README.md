# polylang-revslider
Polylang integration for [Slider Revolution](http://revolution.themepunch.com/) for WordPress

Slider Revolution has WPML support but lacks native Polylang support. Since 
Polylang has basic WPML compatibility we can fake that WPML is loaded and 
Slider Revolution will enable all translation related functions which will get
emulated by the Polylang WPML compatibility. Translating sliders is then 
possible without WPML.

Just add this code snippet to your themes functions.php or use the 
[Code Snippets](http://wordpress.org/plugins/code-snippets/) plugin. 

After enabling the code you can follow the 
[WPML Revolution Slider tutorial](https://wpml.org/documentation/plugins-compatibility/creating-multilingual-sliders-with-revolution-slider-and-wpml/) 
on how to translate sliders.
