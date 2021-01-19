<?php
    $this->db =\Config\Database::connect();
    $builder = $this->db->table('cantidad_regalos');
    $result1=$builder->select('*')->get();
    foreach ($result1->getResultArray() as $row) {
      $output[]=array(
        'label' =>$row['nombrereg'],
        'y' =>$row['cantidad']
      );
    }
?>

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Clientes v Regalos"
  },
  axisY: {
    title: "# Clientes"
  },
  data: [{
    type: "column",
    showInLegend: false,
    legendMarkerColor: "grey",
    legendText: "MMbbl = one million barrels",
    dataPoints: <?= json_encode($output); ?>
  }]
});
chart.render();
}