RSGallery2 Single Image Display plugin
This plugin will replace {rsg2_singledisplay: imageid, size, caption, format, clearfloat} in articles with the corresponding RSGallery2 image.

    imageid: Backend > Components > RSGallery2 > Items: use the number from the ID column (required).
    size: thumb, display or original (optional, default is display).
    caption: true (use the item desciption as a caption) or false (no caption) (optional, default is false).
    format: text-align style property (optional)
    clearfloat: both, left, right or false: When not set to false this inserts a div CSS element after the image with clear property both, left or right (optional, default is false)


When the given image id does not exist, or the image or gallery is unpublished, the plugin will show nothing unless the option Debug is turned on. When the user is not allowed to access the gallery where the item belongs to, nothing will show unless the options Debug is turned on.

Examples:
{rsg2_singledisplay:9999,thumb,true,left;float:left, left}
{rsg2_singledisplay:2,display,false,right, float:right, both}
{rsg2_singledisplay:42}.

Plugin Options
Different 'popup' options are available: no popup, use of Link and Link Text (which are parameters of the item), normal popup, Joomla modal and Highslide.

Important note on the Highslide effect:
Highslide JS is an image, media and gallery viewer written in JavaScript (see http://highslide.com). The Highslide JS for Joomla plugin (available at http://joomlanook.com) exposes all of the flexibility of Highslide JS through a clear and concise configuration screen.
To use the Highslide effect with this RSGallery2 Single Image Display plugin you need to have the Highslide JS for Joomla plugin installed and enabled!
NOTE: If you intend to use Highslide JS on a commercial website you MUST purchase a license from the author of Highslide JS. Please go to http://highslide.com/ for more details.

Links
http://www.rsgallery2.org for information on RSGallery2 and this RSGallery2 Single Image Display Plugin.
http://highslide.com/ for information on Highslide JS and how to obtain a license for use on commercial websites.
http://joomlanook.com/ for information on the Highslide JS for Joomla plugin.