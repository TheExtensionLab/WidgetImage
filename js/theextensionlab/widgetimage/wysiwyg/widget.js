/**
 * @category    TheExtensionLab
 * @package     TheExtensionLab_WidgetImage
 * @copyright   Copyright (c) 2015 TheExtensionLab (http://www.theextensionlab.com)
 * @license     Open Software License (OSL 3.0)
 * @author      James Anelay @ TheExtensionLab <james@theextensionlab.com>
 */

Mediabrowser.prototype.getValueToInsertIntoWidget = function(event) {
    var div;

    $$('div.selected').each(function (e) {
        div = $(e.id);
    });

    if ($(div.id) == undefined) {
        return false;
    }

    var params = {filename:div.id, node:this.currentNode.id, store:this.storeId};

    params.as_is = 1;

    new Ajax.Request(this.onInsertUrl, {
        parameters: params,
        onSuccess: function(transport) {
            try {
                this.onAjaxSuccess(transport);
                if (this.getMediaBrowserOpener()) {
                    self.blur();
                }
                Windows.close('browser_window');
                event.setElementValue(transport.responseText);
                event.setElementLabel('Selected: '+transport.responseText);
                event.close();
                return transport.responseText;
            } catch (e) {
                alert(e.message);
            }
        }.bind(this)
    });
};
