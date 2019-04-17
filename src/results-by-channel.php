<?php
  $sqlSelect = "SELECT * FROM `leads-tbl` WHERE datecr BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
  ORDER BY datecr DESC";
  
  $result = mysqli_query($conn, $sqlSelect);
  $message = mysqli_error($conn);
  $smleads = 0;
  $radioleads = 0;
  $tvleads = 0;
  $ppcleads = 0;
  $otherleads = 0;
  $leads = 0;
  $TTCR = 0;
  $GLOBALS['cr'] = 0;
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

  function getRow($head, $leads,$sold) {
    $cr = ($sold * 100) / $leads;
    $GLOBALS['cr'] += $cr;
    echo "
      <tr>
        <td><b>$head</b></td><td>$leads</td><td>$sold</td><td>".ceil($cr)."%</td><td></td>
      </tr>
    ";
  }
  function getTotal($leads,$sold, $totalCR) {
    $leads = number_format($leads);
    echo "
      <tr style='background:#b29981;'>
        <td><b>Total</b></td><td>$leads</td><td>$sold</td><td>$totalCR%</td><td></td>
      </tr>
    ";
  }
  while ($row = mysqli_fetch_array($result)) {
    if($row['source'] == 'Facebook' || $row['source'] == 'Facebook Messenger' || $row['source'] == 'Referral'){
      $smleads ++;
      if($row['was sold'] == '1' && $row['cancelsale'] == '0'){
        $smsold ++;
      }
    }
    $leads += $smleads;
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
    $leads += $tvleads;
    if($row['source'] == 'PPC' || $row['source'] == 'Organic / Untracked' || $row['source'] == 'BBB'){
      $ppcleads ++;
      if($row['was sold'] == '1' && $row['cancelsale'] == '0'){
        $ppcsold ++;
      }
    }
    $leads += $ppcleads;
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
  getRow("SM", $smleads,$smsold);
  getRow("RADIO", $radioleads,$radiosold);
  getRow("TV", $tvleads,$tvsold);
  getRow("PPC", $ppcleads,$ppcsold);
  getRow("Other", $otherleads,$othersold);

  $totalCR = ceil($GLOBALS['cr'] / 5);
  getTotal($leads,$sold, $totalCR);

  echo "</tbody>
  </table><br>";

  $smleads = 0;
  $radioleads = 0;
  $tvleads = 0;
  $ppcleads = 0;
  $otherleads = 0;
  $leads = 0;
  $ttcr = 0;
?>