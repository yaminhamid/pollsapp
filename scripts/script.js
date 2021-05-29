$(document).ready(function(){
  
  fetch_poll_data();

  function fetch_poll_data()
  {
    $.ajax({
      url:"./app/fetch_poll_data.php",
      method:"POST",
      success:function(data)
      {
        $('#poll_result').html(data);
      }
    });
  }
  
  $('#poll_form').on('submit', function(event){
    console.log('Button Pressed')
    event.preventDefault();
    var poll_option = '';
    $('.poll_option').each(function(){
      if($(this).prop("checked"))
      {
        poll_option = $(this).val();
      }
    });
    if(poll_option != '')
    {
      $('#poll_button').attr('disabled', 'disabled');
      var form_data = $(this).serialize();
      $.ajax({
        url:"./app/poll.php",
        method:"POST",
        data:form_data,
        success:function()
        {
          $('#poll_form')[0].reset();
          $('#poll_button').attr('disabled', false);
          fetch_poll_data();
          alert("Poll Submitted Successfully");
        }
      });
    }
    else
    {
      alert("Please Select Option");
    }
  });
  
  
  
});  

//Function to display the chart data

function displayChart(rowCount) {
  console.log("Display chart function2 executed" + rowCount);
  console.log(Math.max(...rowCount));
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Miguel de Cerventes', 'Charles Dickens', 'JRR Tolkien', 'Antoine de Saint Exuper'],
        datasets: [{
            label: '# of Votes',
            data: rowCount,
            backgroundColor: ['#fd7c78', '#70dafc', '#fed085', '#b9e88b', '#82a5fc'],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1,
        }]
    },
    options: { 
      plugins: {
        legend: {
          
          labels: {
              // This more specific font property overrides the global property
              padding: 30,
              color: 'white',
              font: {
                  size: 16,
              },
          },
        position : 'bottom',

       },
          // title:{
          //   display: true,
          //  // fontSize:50,
          //   text:"Polling Result",
          //       font: {
          //         size: 50,
          //         Color:'#FFFFFF'
          //       },
             
          // },
      },
    },

});

}


$(function() {
  $( "#button" ).click(function() {
    $( "#button" ).addClass( "onclic", 250, validate);
  });

  function validate() {
    setTimeout(function() {
      $( "#button" ).removeClass( "onclic" );
      $( "#button" ).addClass( "validate", 450, callback );
    }, 2250 );
  }
    function callback() {
      setTimeout(function() {
        $( "#button" ).removeClass( "validate" );
      }, 1250 );
    }
  });