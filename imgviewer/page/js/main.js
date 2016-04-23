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