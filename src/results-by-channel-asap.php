<?php
  // *******
  // FUNCTIONS ARE IN RESULTS-BY-CHANNEL.PHP
  // *******
  $sqlSelect = "SELECT * FROM `leads-tbl` WHERE dateASAP BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
  ORDER BY dateASAP DESC";
  
  $result = mysqli_query($conn, $sqlSelect);
  $message = mysqli_error($conn);
  echo "<table>
  <thead>
    <tr>
      <th></th>
      <th>LEADS</th>
      <th>SALES</th>
      <th>CR</th>
      <th>CPL</th>
    </tr>
  </thead>
  <tbody>";

  while ($row = mysqli_fetch_array($result)) {
    if($row['source'] == 'Facebook' || $row['source'] == 'Facebook Messenger' || $row['source'] == 'Referral'){
      $smleads ++;
      if($row['was sold'] == '1' && $row['cancelsale'] == '0'){
        $smsold ++;
      }
    }
    if($row['source'] == 'Radio'){
      $radioleads ++;
      if($row['was sold'] == '1' && $row['cancelsale'] == '0'){
        $radiosold ++;
      }
    }
    if($row['source'] == 'TV'){
      $tvleads ++;
      if($row['was sold'] == '1' && $row['cancelsale'] == '0'){
        $tvsold ++;
      }
    }
    if($row['source'] == 'PPC' || $row['source'] == 'Organic / Untracked' || $row['source'] == 'BBB'){
      $ppcleads ++;
      if($row['was sold'] == '1' && $row['cancelsale'] == '0'){
        $ppcsold ++;
      }
    }
    if($row['source'] == 'Other' || $row['source'] == 'Inbound Call'){
      $otherleads ++;
      if($row['was sold'] == '1' && $row['cancelsale'] == '0'){
        $othersold ++;
      }
    }
  }
  $leads = $smleads + $otherleads + $radioleads + $ppcleads + $tvleads;
  $sold = $smsold + $othersold + $radiosold + $ppcsold + $tvsold;
  // Build Table
  $GLOBALS['cr'] = 0;
  getRow("SM", $smleads,$smsold);
  getRow("RADIO", $radioleads,$radiosold);
  getRow("TV", $tvleads,$tvsold);
  getRow("PPC", $ppcleads,$ppcsold);
  getRow("Other", $otherleads,$othersold);
  $totalCR = ceil($GLOBALS['cr'] / 5);
  getTotal($leads,$sold,$totalCR);

  echo "</tbody>
  </table><br>";

?>