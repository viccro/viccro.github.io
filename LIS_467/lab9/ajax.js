const proxyUrl = "https://immense-waters-04792.herokuapp.com/";
const url = 'https://history.muffinlabs.com/date';

var t0 = performance.now();
//Hit the Today in History API to get a list of events

$( document ).ready(function() {

      $.ajax({
          url: proxyUrl + url,
          contentType: "application/json",
          dataType: 'json',
          success: function(result){
            console.log(result)
            const eventsRaw = result.data;
            for (dateEventId in eventsRaw.Events){
                event = eventsRaw.Events[dateEventId]
                let li = document.createElement('li'),
                span = document.createElement('span'),
                ul = document.getElementById('events');
        
                span.innerHTML = `${event.year}: ${event.text}`;
                li.appendChild(span);
                ul.appendChild(li);  
            }
            var t1 = performance.now();
            console.log("XML HTTP call took " + (t1 - t0) + " milliseconds.");
          }
    });
  });