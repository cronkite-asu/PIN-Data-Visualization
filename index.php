<!DOCTYPE html>
<html>
<head>
  <title>Hello Bubble Chart</title>
  <meta charset="utf-8">

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,600,200italic,600italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <script src="http://phuonghuynh.github.io/js/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="http://phuonghuynh.github.io/js/bower_components/d3/d3.min.js"></script>
  <script src="http://phuonghuynh.github.io/js/bower_components/d3-transform/src/d3-transform.js"></script>
  <script src="http://phuonghuynh.github.io/js/bower_components/cafej/src/extarray.js"></script>
  <script src="http://phuonghuynh.github.io/js/bower_components/cafej/src/misc.js"></script>
  <script src="http://phuonghuynh.github.io/js/bower_components/cafej/src/micro-observer.js"></script>
  <script src="http://phuonghuynh.github.io/js/bower_components/microplugin/src/microplugin.js"></script>
  <script src="http://phuonghuynh.github.io/js/bower_components/bubble-chart/src/bubble-chart.js"></script>
  <script src="central-click.js"></script>
  <script src="http://phuonghuynh.github.io/js/bower_components/bubble-chart/src/plugins/lines/lines.js"></script>
  <script src="index.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">
        $.get( "getOptionsForQuestion.php", {quuid:"695cbe053eca", uuid:"5422e15635b6"}).done(function( data ) {
        // alert( "Data Loaded: " + data );
    });
  </script>  
  <style>
    .bubbleChart {
      min-width: 100px;
      max-width: 700px;
      height: 700px;
      margin: 0 auto;
    }
    .bubbleChart svg{
      background: #000000;
    }
  </style>
</head>
<body style="background: #000000">
<div class="bubbleChart"/>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"  id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="modalContent">
    
    </div>
  </div>
</div>
</body>
</html>