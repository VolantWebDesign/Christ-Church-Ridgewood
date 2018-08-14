//celtic service udpates
let yearEighteen = ['August 19', 'September 16', 'October 21', 'November 18', 'December 16'];
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
let today = new Date();
let todayDate = today.getDate();
let todayMonth = months[today.getMonth()];
//$('#today').append(today.getDate());
//$('#today').html = (today.getDate());
//TODO: next line in jQuery, object literal
//document.getElementById("today").innerHTML = todayMonth+" "+todayDate;

if((todayMonth+" "+todayDate) === yearEighteen[0]) {
  upDates();
}

function upDates() {  
  const celticList = $('#celtic');
  const celticFirstList = $('#celtic li:nth-child(1)');
  if (!yearEighteen[3]) { 
    return; 
  };
  let newDate = yearEighteen[3];
  celticList.append('<li>'+newDate+'</li>');
  celticFirstList.remove();
  yearEighteen.splice(0,1);
}
  



                  