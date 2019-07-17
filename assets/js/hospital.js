
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

function duty_time(duties){
	if(duties[0]['mon_s']){
            duty_time[0] = 'Monday:&nbsp&nbsp' +duties[0]['mon_s'] +' - '+duties[0]['mon_e'] ;
        }else{
            duty_time[0] = '';
        }
        if(duties[0]['tue_s']){
            duty_time[1] = 'Tueday:&nbsp&nbsp'+duties[0]['tue_s'] +' - '+duties[0]['tue_e'] ;
        }else{
            duty_time[1] = '';
        }
        if(duties[0]['wed_s']){
            duty_time[2] = 'Wednesday:&nbsp&nbsp'+duties[0]['wed_s'] +' - '+duties[0]['wed_e'] ;
        }else{
            duty_time[2] = '';
        }
        if(duties[0]['thu_s']){
            duty_time[3] = 'Thursday:&nbsp&nbsp'+duties[0]['thu_s'] +' - '+duties[0]['thu_e'] ;
        }else{
            duty_time[3] = '';
        }
        if(duties[0]['fri_s']){
            duty_time[4] = 'Friday:&nbsp&nbsp'+duties[0]['fri_s'] +' - '+duties[0]['fri_e'] ;
        }else{
            duty_time[4] = '';
        }
        if(duties[0]['sat_s']){
             duty_time[5] = 'Saturday:&nbsp&nbsp'+duties[0]['sat_s'] +' - '+duties[0]['sat_e'] ;
        }else{
            duty_time[5] = '';
        }
        if(duties[0]['sun_s']){
            duty_time[6] = 'Sun:&nbsp&nbsp'+duties[0]['sun_s'] +' - '+duties[0]['sun_e'] ;
        }else{
            duty_time[6] = '';
        }
        return duty_time;
}