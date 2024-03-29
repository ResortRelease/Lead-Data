<?php

    $sqlSelect = "SELECT * FROM `leads-tbl` WHERE dateASAP BETWEEN '$thisMonthFirst' AND '$thisMonthLast' ORDER BY dateASAP DESC";
    $result = mysqli_query($conn, $sqlSelect);
    $message = mysqli_error($conn);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if($row['source'] == 'BBB'){
                $bbbTotal++;
                if($row['was sold'] == '1'){
                    $bbbSold++;
                }
                if($row['cancelsale'] == '1'){
                    $bbbCancelled++;
                }
            }
            if($row['source'] == 'Facebook'){
                $fbTotal++;
                if($row['was sold'] == '1'){
                    $fbSold++;
                }
                if($row['cancelsale'] == '1'){
                    $fbCancelled++;
                }
            }
            if($row['source'] == 'Facebook Messenger'){
                $fbMsnTotal++;
                if($row['was sold'] == '1'){
                    $fbMsnSold++;
                }
                if($row['cancelsale'] == '1'){
                    $fbMsnCancelled++;
                }
            }
            if($row['source'] == 'FB Call'){
                $fbCallTotal++;
                if($row['was sold'] == '1'){
                    $fbCallSold++;
                }
                if($row['cancelsale'] == '1'){
                    $fbCallCancelled++;
                }
            }
            if($row['source'] == 'Inbound Call'){
                $inCallTotal++;
                if($row['was sold'] == '1'){
                    $inCallSold++;
                }
                if($row['cancelsale'] == '1'){
                    $inCallCancelled++;
                }
            }
            if($row['source'] == 'Organic / Untracked'){
                $organicTotal++;
                if($row['was sold'] == '1'){
                    $organicSold++;
                }
                if($row['cancelsale'] == '1'){
                    $organicCancelled++;
                }
            }
            if($row['source'] == 'Other'){
                $otherTotal++;
                if($row['was sold'] == '1'){
                    $otherSold++;
                }
                if($row['cancelsale'] == '1'){
                    $otherCancelled++;
                }
            }
            if($row['source'] == 'PPC'){
                $ppcTotal++;
                if($row['was sold'] == '1'){
                    $ppcSold++;
                }
                if($row['cancelsale'] == '1'){
                    $ppcCancelled++;
                }
            }
            if($row['source'] == 'Radio'){
                $radioTotal++;
                if($row['was sold'] == '1'){
                    $radioSold++;
                }
                if($row['cancelsale'] == '1'){
                    $radioCancelled++;
                }
            }
            if($row['source'] == 'Referral'){
                $refTotal++;
                if($row['was sold'] == '1'){
                    $refSold++;
                }
                if($row['cancelsale'] == '1'){
                    $refCancelled++;
                }
            }
            if($row['source'] == 'TV'){
                $tvTotal++;
                if($row['was sold'] == '1'){
                    $tvSold++;
                }
                if($row['cancelsale'] == '1'){
                    $tvCancelled++;
                }
            }
            $Total = $bbbTotal + $fbTotal + $fbMsnTotal + $fbCallTotal + $inCallTotal + $organicTotal + $otherTotal + $ppcTotal + $radioTotal + $refTotal + $tvTotal;
            $Sold = $bbbSold + $fbSold + $fbMsnSold + $fbCallSold + $inCallSold + $organicSold + $otherSold + $ppcSold + $radioSold + $refSold + $tvSold;
            $Cancelled = $bbbCancelled + $fbCancelled + $fbMsnCancelled + $fbCallCancelled + $inCallCancelled + $organicCancelled + $otherCancelled + $ppcCancelled + $radioCancelled + $refCancelled + $tvCancelled;
        }
    }
?>
<table>
  <thead>
    <tr>
      <th>SOURCE</th>
      <th>ROWS</th>
      <th>SOLD</th>
      <th>CANCELLED</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>BBB</td>
      <td>
        <?php echo $bbbTotal ?>
      </td>
      <td>
        <?php echo $bbbSold ?>
      </td>
      <td>
        <?php echo $bbbCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>Facebook</td>
      <td>
        <?php echo $fbTotal ?>
      </td>
      <td>
        <?php echo $fbSold ?>
      </td>
      <td>
        <?php echo $fbCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>Facebook Messenger</td>
      <td>
        <?php echo $fbMsnTotal ?>
      </td>
      <td>
        <?php echo $fbMsnSold ?>
      </td>
      <td>
        <?php echo $fbMsnCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>FB Call</td>
      <td>
        <?php echo $fbCallTotal ?>
      </td>
      <td>
        <?php echo $fbCallSold ?>
      </td>
      <td>
        <?php echo $fbCallCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>Inbound Call</td>
      <td>
        <?php echo $inCallTotal ?>
      </td>
      <td>
        <?php echo $inCallSold ?>
      </td>
      <td>
        <?php echo $inCallCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>Organic / Untracked</td>
      <td>
        <?php echo $organicTotal ?>
      </td>
      <td>
        <?php echo $organicSold ?>
      </td>
      <td>
        <?php echo $organicCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>Other</td>
      <td>
        <?php echo $otherTotal ?>
      </td>
      <td>
        <?php echo $otherSold ?>
      </td>
      <td>
        <?php echo $otherCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>PPC</td>
      <td>
        <?php echo $ppcTotal ?>
      </td>
      <td>
        <?php echo $ppcSold ?>
      </td>
      <td>
        <?php echo $ppcCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>Radio</td>
      <td>
        <?php echo $radioTotal ?>
      </td>
      <td>
        <?php echo $radioSold ?>
      </td>
      <td>
        <?php echo $radioCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>Referral</td>
      <td>
        <?php echo $refTotal ?>
      </td>
      <td>
        <?php echo $refSold ?>
      </td>
      <td>
        <?php echo $refCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>TV</td>
      <td>
        <?php echo $tvTotal ?>
      </td>
      <td>
        <?php echo $tvSold ?>
      </td>
      <td>
        <?php echo $tvCancelled ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td><b>Total</b></td>
      <td>
        <b><?php echo $Total ?></b>
      </td>
      <td>
        <b><?php echo $Sold ?></b>
      </td>
      <td>
        <b><?php echo $Cancelled ?></b>
      </td>
    </tr>
  </tbody>
</table>