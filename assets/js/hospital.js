
/*Date Picker*/
$('#dob').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd',
  todayHighlight: true
})

$(document).ready(function () {
  setTimeout(function () {
    $('#successMessage').fadeOut('slow');
  }, 10000);
});
