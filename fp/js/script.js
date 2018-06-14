(function($){
$(document).ready(function(){

$("#cssmenu").menumaker({
    title: "Menu",
    breakpoint: 768,
    format: "multitoggle"
});

$("#cssmenu").prepend("<div id='menu-line'></div>");

var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

$("#cssmenu > ul > li").each(function() {
  if ($(this).hasClass('active')) {
    activeElement = $(this);
    foundActive = true;
  }
});

if (foundActive === false) {
  activeElement = $("#cssmenu > ul > li").first();
}

//lineWidth = activeElement.width();

defaultWidth = lineWidth = 960;
defaultPosition = linePosition = 0;

//defaultPosition = linePosition = activeElement.position().left;

menuLine.css("width", lineWidth);
menuLine.css("left", linePosition);

//alert('lineWidth: ' + lineWidth);

$("#cssmenu > ul > li").hover(function() {
  activeElement = $(this);
  lineWidth = activeElement.width();
  linePosition = activeElement.position().left;
  menuLine.css("width", lineWidth);
  menuLine.css("left", linePosition);
}, function() {
  menuLine.css("left", defaultPosition);
  
  if(defaultWidth >= 960)
  {//disallow defautWidth from getting bigger than 960px
  	defaultWidth = 960;
  }
  
  menuLine.css("width", defaultWidth);
});

});
})(jQuery);
