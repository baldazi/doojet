<?php
  $dd = date('d');
  $mm = date('m');
  $yy = date('y');
  $mois = ['Jan','Fev','Mar','Avr','Mai','Jui','jul','Aou','Sep','Oct','Nov','Dec'];
?>
<table class='table table-light'>
  <caption class='caption-top text-center'>
      <?php
        echo $mois[(int)$mm-1];
       ?>
  </caption>
  <tr>
    <th>Lun</th>
    <th>Mar</th>
    <th>Mer</th>
    <th>Jeu</th>
    <th>Ven</th>
    <th>Sam</th>
    <th>Dim</th>
  </tr>
<?php
      $d=1;
      for ($i=1; $i <=5 ; $i++) {
        if($i>1)echo '</tr>';
        echo '<tr>';
        if($i==1){
          echo '<td></td><td></td>';
          for($j=3;$j<=7;$j++)
          {
            echo '<td><input type="button" class="btn btn-outline-secondary btnADD" value="'.$d.'" onClick="add_date('.$d.',09,2021)"></td>';
            $d++;
          }
        }else{
          for($j=1;$j<=7;$j++)
          {
            echo '<td><input type="button" class="btn btn-outline-secondary btnADD" data-bs-dismiss="offcanvas" value="'.$d.'" onClick="add_date('.$d.',09,2021)"></td>';
            $d++;
            if($d==31)break;
          }
        }
      }
?>
</table>
