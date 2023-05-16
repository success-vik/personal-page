<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1', {packages:['wordtree']});
  google.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['phrase'],
      ['програмування'],
      ['JavaScript'],
      ['HTML'],
      ['CSS'],
      ['Java'],
      ['Python'],
      ['C++'],
      ['PHP'],
      ['Ruby'],
      ['C#'],
      ['Objective-C'],
      ['Swift'],
      ['Perl'],
      ['SQL'],
      ['Go'],
      ['R']
    ]);

    var options = {
      wordtree: {
        format: 'implicit',
        word: 'програмування'
      }
    };

    var chart = new google.visualization.WordTree(document.getElementById('wordtree_container'));
    chart.draw(data, options);
  }
</script>

<div id="wordtree_container" style="width:100%; height:500px;"></div>
