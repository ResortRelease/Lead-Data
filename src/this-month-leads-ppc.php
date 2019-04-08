<?php
    echo "<" .$thisMonthFirst . "> to ";
    echo "<" .$thisMonthLast. "> ";    
    $sqlSelect = "SELECT * FROM `leads-tbl` WHERE dateASAP BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
    AND source LIKE '%PPC%'
    ORDER BY dateASAP DESC";
    
    $result = mysqli_query($conn, $sqlSelect);
    $message = mysqli_error($conn);
    echo "<table>
    <thead>
      <tr>
        <th>PPC</th>
        <th>LEADS</th>
        <th>SOLD</th>
        <th>REVENUE</th>
      </tr>
    </thead>
    <tbody>";
    $campaigns = array();
    $sales = array();
    $sold = array();
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        array_push($campaigns, $row['utm_campaign']);
        if($row['was sold'] == '1'){
          $revenue = $row['sold_mt_rev_net'] + $row['sold_tr_rev_net'];
          array_push($sold, $row['utm_campaign']);
          $sales[$row['utm_campaign']] += $revenue;
          $tsale += $revenue;
        }
        // if($row['utm_campaign'] != ''){
        // }
      }
      $camp = array_count_values($campaigns);
      $sold = array_count_values($sold);
      arsort($camp);

      foreach($camp as $key => $val) {
        if($val > 1){
          echo "<tr>
          <td>$key</td>
          <td>$val</td>";
          foreach($sold as $k => $v) {
            if($key == $k){
              echo "<td>$v</td>";
            } 
            if($v < 1) { 
              $flag = false; 
              echo "<td></td><td></td>";
            }
          }
          if($sold[$key]){
            echo "<td>$" . number_format($sales[$key]) . "</td>";
          }
          echo "</tr>";
        }
      }
      echo "</tbody>
      </table><br>";
    }
?>