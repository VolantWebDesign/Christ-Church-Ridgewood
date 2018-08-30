//celtic service udpates
let yearEighteen = ['September 16', 'October 21', 'November 18', 'December 16'];
let dayAfterEighteen = ['September 17', 'October 22', 'November 19', 'December 17']
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
let today = new Date();
let todayDate = today.getDate();
let todayMonth = months[today.getMonth()];


if((todayMonth+" "+todayDate) === yearEighteen[0]) {
  tonight();
}
if((todayMonth+" "+todayDate) === dayAfterEighteen[0]) {
  after();
}

//on date of service, change li:1 to say "Tonight!"
function tonight() {  
  const celticFirstList = $('#celtic li:nth-child(1)');
  celticFirstList.text('Tonight!');
}

function after() {  
  const celticList = $('#celtic');
  const celticFirstList = $('#celtic li:nth-child(1)');
  if (!yearEighteen[3]) { 
    celticFirstList.remove(); 
  } else {
    let newDate = yearEighteen[3];
    celticList.append('<li>'+newDate+'</li>');
    celticFirstList.remove();
  }
  yearEighteen.splice(0,1);
  dayAfterEighteen.splice(0,1);
}
  



                  