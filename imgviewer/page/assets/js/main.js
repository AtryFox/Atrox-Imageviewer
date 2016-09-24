$.fn.extend({
    showTooltip: function(text, placement) {
        placement = placement || 'top';

        this.attr('data-original-title', text);
        this.tooltip({title: text, placement: placement, trigger: 'manuel'});
        this.tooltip('show');

        var element = this;

        setTimeout(function () {
            element.tooltip('hide');
        }, 1000);
    }
});

var htmlClip = new Clipboard('#copyHtml');
var bbcodeClip = new Clipboard('#copyBbcode');

$('.options').on('click', function () {
    var includeLinkChecked = $('#includeLink').is(':checked');
    var link = document.URL.split('?')[0];
    var img = $('#img').attr('src');

    var html = '<img src="' + img + '">';
    var bbcode = '[img]' + img + '[/img]';

    if (includeLinkChecked) {
        html = '<a href="' + link + '">' + html + '</a>';
        bbcode = '[URL=' + link + ']' + bbcode + '[/URL]';
    }

    $('#htmlCode').text(html);
    $('#bbCode').text(bbcode);
});

htmlClip.on('success', function(e) {
    $('#copyHtml').showTooltip('Copied to clipboard!');
    e.clearSelection();
});

htmlClip.on('error', function() {
    $('#copyHtml').showTooltip('Press ctrl+c to copy.');
});

bbcodeClip.on('success', function(e) {
    $('#copyBbcode').showTooltip('Copied to clipboard!');
    e.clearSelection();
});

bbcodeClip.on('error', function() {
    $('#copyBbcode').showTooltip("Press ctrl+c to copy.")
});


