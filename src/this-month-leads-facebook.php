<?php
    echo "<" .$thisMonthFirst . "> to ";
    echo "<" .$thisMonthLast. "> ";    
    $sqlSelect = "SELECT * FROM `leads-tbl` WHERE dateASAP BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
    AND source LIKE '%facebook%'
    ORDER BY dateASAP DESC";
    
    $result = mysqli_query($conn, $sqlSelect);
    $message = mysqli_error($conn);
    echo "<table>
    <thead>
      <tr>
        <th>FB CAMPAIGN</th>
        <th>LEADS</th>
        <th>SOLD</th>
        <th>REVENUE</th>
      </tr>
    </thead>
    <tbody>";
    $campaigns = array();
    $sales = array();
    $sold = array();
    $tsold = 0;
    $tsale = 0;
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        array_push($campaigns, $row['utm_campaign']);
        if($row['was sold'] == '1' && $row['cancelsale'] == '0'){
          $revenue = $row['sold_mt_rev'] + $row['sold_tr_rev'];
          array_push($sold, $row['utm_campaign']);
          $sales[$row['utm_campaign']] += $revenue;
        }
        $tleads += 1;
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
              $tsold += $v;
              echo "<td>$v</td>";
            } 
            if($v < 1) { 
              $flag = false; 
              echo "<td></td><td></td>";
            }
          }
          if($sold[$key]){
            $tsale += $sales[$key];
            echo "<td>$" . number_format($sales[$key]) . "</td>";
          }
          echo "</tr>";
        }
      }
      echo "<tr style='background:#d2efd2'><td><b>Total Revenue</b></td><td></td><td>$tsold</td><td>$".number_format($tsale)."</td></tr></tbody>
      </table><br>";
    }
?>