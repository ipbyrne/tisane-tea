setInterval(function() {
var timeline = $('#twitter-widget-1').contents().find('body').find('.timeline');
	timeline.find('.u-photo.avatar').remove();
	timeline.find('.header').remove();
	timeline.find('.u-url.permalink.customisable-highlight').remove();
	timeline.find('.header.h-card.p-author').remove();
	timeline.find('.footer.customisable-border').remove();
	timeline.find('.retweet-credit').remove();
	timeline.find('.e-entry-title').css('font-size', "15px");
	timeline.find('.e-entry-title').css('font-family', "'Roboto', sans-serif");
	timeline.find('.e-entry-title').css('color', '#4e424e');
	timeline.find('.e-entry-title').css('padding', '15px 0');
	timeline.find('.e-entry-title').css('display', 'block');
	timeline.find('.e-entry-title').css('border-bottom', '1px #e1e1e1 solid');
	timeline.find('.e-entry-title').css('line-height', '20px');
}, 100);