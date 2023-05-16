<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
google.load('visualization', '1', {packages:['wordtree']});
google.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['phrase'],
    ['car'],
    ['driver'],
    ['engine'],
    ['tire'],
    ['wheel']
  ]);

  var options = {
    wordtree: {
      format: 'implicit',
      word: 'car'
    }
  };

  var chart = new google.visualization.WordTree(document.getElementById('wordtree_basic'));
  chart.draw(data, options);
}
</script>
