
function upDates() {  
    const celticList = $('#celtic');
    const celticFirstList = $('#celtic li:nth-child(1)');
    let thirdDate = "July 22";
    celticList.append('<li>'+thirdDate+'</li>');
    celticFirstList.remove();
  }
    
  $('#submit').click(function() {
      //don't refresh page
      event.preventDefault();
      upDates();
  });
  
  
                    