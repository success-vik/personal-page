google.load("visualization", "1");

// Описуємо нашу семантичну мережу
var data = new google.visualization.DataTable();
data.addColumn('string', 'From');
data.addColumn('string', 'To');
data.addColumn('number', 'Weight');
data.addRows([
  ['комп\'ютер', 'програмування', 1],
  ['програмування', 'алгоритм', 1],
  ['комп\'ютер', 'алгоритм', 1]
]);

// Встановлюємо параметри графіку
var options = {
  width: '100%',
  height: '500px',
  nodes: {
    shape: 'circle',
    borderWidth: 2,
    font: {
      color: '#ffffff'
    },
    color: {
      background: '#00ccff',
      border: '#0099cc'
    }
  },
  edges: {
    color: {
      color: '#999999',
      hover: '#333333',
      highlight: '#333333'
    },
    font: {
      color: '#333333'
    }
  }
};

// Створюємо графік та відображаємо його на сторінці
var chart = new google.visualization.Network(document.getElementById('wordtree_basic'));
chart.draw(data, options);
