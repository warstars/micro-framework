$(document).ready(function() {

$("a[rel='mnu']").click(function() {
  $("a[rel='stat']").parent().removeClass('content_mnu_active');
  $(this).parent().addClass('content_mnu_active');
  $("#change_menu_block").fadeIn(400);
});
$("a[rel='stat']").click(function () {
  $("a[rel='mnu']").parent().removeClass('content_mnu_active');
  $(this).parent().addClass('content_mnu_active');
  $("#change_menu_block").fadeOut(400);
});

});
