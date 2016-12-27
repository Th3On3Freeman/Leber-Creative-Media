$(function () {
$('.mobileDropdown').selectpicker({
    container: 'body'   
});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    $('.mobileDropdown').selectpicker('mobile');
}
});