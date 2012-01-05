$(document).ready(function() {
// setting the video hide and show, setting the current video link
	$('div.video').hide();
	$('div.v1').show();
	$('div.video').height(245);
	$('div.menu ul li a').css('cursor', 'pointer');
	$('div.menu ul li.v1 a').addClass('current');
	$('ul.video li a').css('cursor', 'pointer');
// setting the tabs in the sidebar hide and show, setting the current tab
	$('div.tabbed div').hide();
	$('div.t1').show();
	$('div.tabbed ul.tabs li.t1 a').addClass('tab-current');
// VIDEOS 
	$('div.menu ul li a.v1').click(function(){
	$('div.video').hide();
	$('div.v1').show();
	$('div.menu ul li a').removeClass('current');
	$('div.menu ul li.v1 a').addClass('current');
	});
	$('div.menu ul li a.v2').click(function(){
	$('div.video').hide();
	$('div.v2').show();
	$('div.menu ul li a').removeClass('current');
	$('div.menu ul li.v2 a').addClass('current');
	});
	$('div.menu ul li a.v3').click(function(){
	$('div.video').hide();
	$('div.v3').show();
	$('div.menu ul li a').removeClass('current');
	$('div.menu ul li.v3 a').addClass('current');
	});
	$('div.menu ul li a.v4').click(function(){
	$('div.video').hide();
	$('div.v4').show();
	$('div.menu ul li a').removeClass('current');
	$('div.menu ul li.v4 a').addClass('current');
	});
	$('div.menu ul li a.v5').click(function(){
	$('div.video').hide();
	$('div.v5').show();
	$('div.menu ul li a').removeClass('current');
	$('div.menu ul li.v5 a').addClass('current');
	});
// SIDEBAR TABS
	$('div.tabbed ul li a.t1').click(function(){
	$('div.tabbed div').hide();
	$('div.t1').show();
	$('div.tabbed ul.tabs li a').removeClass('tab-current');
	$('div.tabbed ul.tabs li.t1 a').addClass('tab-current');
	});
	$('div.tabbed ul li a.t2').click(function(){
	$('div.tabbed div').hide();
	$('div.t2').show();
	$('div.tabbed ul.tabs li a').removeClass('tab-current');
	$('div.tabbed ul.tabs li.t2 a').addClass('tab-current');
	});
	$('div.tabbed ul li a.t3').click(function(){
	$('div.tabbed div').hide();
	$('div.t3').show();
	$('div.tabbed ul.tabs li a').removeClass('tab-current');
	$('div.tabbed ul.tabs li.t3 a').addClass('tab-current');
	});
	$('div.tabbed ul li a.t4').click(function(){
	$('div.tabbed div').hide();
	$('div.t4').show();
	$('div.tabbed ul.tabs li a').removeClass('tab-current');
	$('div.tabbed ul.tabs li.t4 a').addClass('tab-current');
	});
	$('div.tabbed ul li a.t5').click(function(){
	$('div.tabbed div').hide();
	$('div.t4').show();
	$('div.tabbed ul.tabs li a').removeClass('tab-current');
	$('div.tabbed ul.tabs li.t5 a').addClass('tab-current');
	});
	$('div.tabbed ul li a.t6').click(function(){
	$('div.tabbed div').hide();
	$('div.t4').show();
	$('div.tabbed ul.tabs li a').removeClass('tab-current');
	$('div.tabbed ul.tabs li.t6 a').addClass('tab-current');
	});
});