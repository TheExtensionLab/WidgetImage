# TheExtensionLab_WidgetImage

**TheExtensionLab_WidgetImage** this extension adds a widget helper_block that developers can utilize to add a image choose/uploader to the widget interface
This extension is often a dependency of our other extensions.

Example Use
-----------
In your modules widget.xml file simply add the helper block below to the field you want to be an image selector.

```
  <featured_image>
      <visible>1</visible>
      <required>0</required>
      <label>CMS Image</label>
      <type>label</type>
      <helper_block>
          <type>theextensionlab_widgetimage/adminhtml_widget_image_chooser</type>
          <data>
              <button translate="open">
                  <open>Select Image...</open>
              </button>
          </data>
      </helper_block>
      <sort_order>10</sort_order>
  </featured_image>
```

Uninstallation
--------------
To uninstall this file simple remove all files, a list of which can be found in the modman file.

Developer
--------------
James Anelay - TheExtensionLab

[http://www.theextensionlab.com](http://www.theextensionlab.com)

[@JamesAnelay](https://twitter.com/jamesanelay) - [@TheExtensionLab](https://twitter.com/TheExtensionLab)

License
-------
OSL-3.0

Copyright
---------
(c) 2015 TheExtensionLab
