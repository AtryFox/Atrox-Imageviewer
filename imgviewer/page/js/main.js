function updateCode() {
    var includeLinkChecked = $('#includeLink').is(":checked");
    var link = document.URL.split("?")[0];
    var img = $('#img').attr('src');

    var html = "<img src=\"" + img + "\">";
    var bbcode = "[img]" + img + "[/img]";

    if (includeLinkChecked) {
        html = "<a href=\"" + link + "\">" + html + "</a>";
        bbcode = "[URL=" + link + "]" + bbcode + "[/URL]";
    }

    $("#htmlCode").text(html);
    $("#bbCode").text(bbcode);
}

function showTooltip(id, text) {
    $(id).tooltip({title: text, placement: 'top', trigger: 'manuel'});
    $(id).tooltip('show');
    setTimeout(function () {
        $(id).tooltip('hide');
    }, 1000);
}

var htmlClip = new Clipboard('#copyHtml');
var bbcodeClip = new Clipboard('#copyBbcode');

htmlClip.on('success', function(e) {
    showTooltip('#copyHtml', 'Copied to clipboard!');
    e.clearSelection();
});

htmlClip.on('error', function(e) {
    showTooltip('#copyHtml', 'Press ctrl+c to copy.');
});

bbcodeClip.on('success', function(e) {
    showTooltip('#copyBbcode', 'Copied to clipboard!');
    e.clearSelection();
});

bbcodeClip.on('error', function(e) {
    showTooltip('#copyBbcode', 'Press ctrl+c to copy.');
});


