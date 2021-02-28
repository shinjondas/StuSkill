<html>
    <body>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>alert("Check your results!");</script>
      <div id="piechart" style="margin-left:35%;"></div>
      <script>
        $(".domform").hide();
      </script>

        <?php include 'domainres.php';?>
        <?php
        $pieData = array(
            array('Designer', $designer),
            array('Developer', $developer), 
            array('Data Analyst', $dataanalyst), 
            array('Data Security', $datasecurity),
            array('Competitive Coding', $CC), 
            );
            ?>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Domain', 'Result'],
              ['Designer', <?php echo $designer ?>],
              ['Developer', <?php echo $developer?>],
              ['Data Analyst', <?php echo $dataanalyst ?>],
              ['Data Security', <?php echo $datasecurity ?>],
              ['Competitive Coding', <?php echo $CC ?>]
            ]);
            
              var options = {titleTextStyle:{color:'#FFF',fontName:'Lato',fontSize:'15'}, width:550, height:400,backgroundColor:{fill: '#FFFFFF',
          fillOpacity: 0.01},color:'#FFF',legend:{textStyle: {color: '#FFF', fontSize: 12}}};
            
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
              chart.draw(data, options);
            }
            </script>
        
    </body>
</html>