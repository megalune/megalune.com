/* return to previous screen */
function goBack() {
    window.history.back();
}
/* work that menu magic */
function openMenu(m){
	$("footer ul").slideUp(100);
	$("#submenu_"+m).slideToggle(300);
	$("main").fadeTo(100, 0.2);
	$("#bottom-circles").fadeTo(100, 0.2);
}
$("main").click(function() {
	$("footer ul").slideUp(100);
	$("main").fadeTo(250, 1);
	$("#bottom-circles").fadeTo(100, 1);
});
/* work that menu magic */
function toggleFilter(){
	$("#filter_drawer").slideToggle(300);
	$('#filter_icon').html() == "more_horiz" ? $('#filter_icon').html('keyboard_arrow_down') : $('#filter_icon').html('more_horiz');
}
/* move from 1 plogglebit to 2 */
function plogglebit(){
	$("#filter_drawer").slideToggle(300);
	$('#filter_icon').html() == "more_horiz" ? $('#filter_icon').html('keyboard_arrow_down') : $('#filter_icon').html('more_horiz');
}
/* z-index swapping
$("#focal, #supplemental, #supplemental-no-selection").click(function() {
	if($(window).width() < 1240){
		$("#supplemental, #supplemental-no-selection").css('z-index', '3');
		$("#focal, #supplemental, #supplemental-no-selection").css('opacity', '0.25');
		$(this).css('z-index', '1000');
		$(this).css('opacity', '1');
	}
});*/