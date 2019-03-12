<?php
    echo "<" .$thisMonthFirst . "> to ";
    echo "<" .$thisMonthLast. "> ";    
    $sqlSelect = "SELECT * FROM `leads-tbl` WHERE dateASAP BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
    AND utm_source LIKE '%facebook%'
    ORDER BY dateASAP DESC";
    $result = mysqli_query($conn, $sqlSelect);
    $message = mysqli_error($conn);
    $bbbTotal = 0;$bbbSold = 0;$bbbCancelled = 0;$fbTotal=0;$fbSold=0;$fbCancelled=0;$fbMsnTotal=0;$fbMsnSold=0;$fbMsnCancelled=0;$fbCallTotal=0;$fbCallSold=0;$fbCallCancelled=0;$inCallTotal=0;$inCallSold=0;$inCallCancelled=0;$organicTotal=0;$organicSold=0;$organicCancelled=0;$otherTotal=0;$otherSold=0;$otherCancelled=0;$ppcTotal=0;$ppcSold=0;$ppcCancelled=0;$radioTotal=0;$radioSold=0;$radioCancelled=0;$refTotal=0;$refSold=0;$refCancelled=0;$tvTotal=0;$tvSold=0;$tvCancelled=0;
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
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        if($row['utm_campaign'] != ''){
          array_push($campaigns, $row['utm_campaign']);
          if($row['was sold'] == '1'){
            $revenue = $row['sold_mt_rev_net'] + $row['sold_tr_rev_net'];
            array_push($sold, $row['utm_campaign']);
            $sales[$row['utm_campaign']] += $revenue;
            $tsale += $revenue;
          }
        }
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