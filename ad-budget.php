

<!doctype html>
<html>
 <body>


  <form id="form1" name="form1" method="post">
    Average CPC: <input type="text" name="cpc" id="cpc"><br>
    Click-Through Rate: <input type="text" name="ctr" id="ctr"><br>
    Conversion Rate: <input type="text" name="cr" id="cr"><br>
    Lead-to-Conversion Rate: <input type="text" name="lcr" id="lcr"><br>
    Monthly Goal: <input type="text" name="goal" id="goal"><br> 
    Avg. Value of Sale: <input type="text" name="avgSale" id="avgSale"><br>
    <input type='button' value='click' id='but'>
    <div id='response'></div>
  </form>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#but').click(function(){
    $cpc = isset($_POST['cpc']) ?  $_POST['cpc'] : 0;
    $ctr = isset($_POST['ctr']) ?  $_POST['ctr'] : 0;
    $cr = isset($_POST['cr']) ?  $_POST['cr'] : 0;
    $lcr = isset($_POST['lcr']) ?  $_POST['lcr'] : 0;
    $goal = isset($_POST['goal']) ?  $_POST['goal'] : 0;
    $avgSale = isset($_POST['avgSale']) ?  $_POST['avgSale'] : 0;

    $salesNeeded = $goal / $avgSale;

    $.ajax({
      type: 'post',
      data: dataString,
      success: function(response){
        $('#response').text('Output: ' + $salesNeeded);
      }
    });
    
 
  });
 });
 </script>
 </body>
</html>