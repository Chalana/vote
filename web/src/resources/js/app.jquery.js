/**
 * Created by Chalana Madusanka
 */
$('document').ready(function() {
	var bodyEl = $('body'),
    navToggleBtn = bodyEl.find('.nav-toggle-btn');
            
    navToggleBtn.on('click', function(e) {
    bodyEl.toggleClass('active-nav');
    e.preventDefault();
	});

});

