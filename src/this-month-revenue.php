<?php
    echo "<" .$thisMonthFirst . "> to ";
    echo "<" .$thisMonthLast. "> ";    
    $sqlSelect = "SELECT * FROM `leads-tbl` WHERE salesdate BETWEEN '$thisMonthFirst' AND '$thisMonthLast' ORDER BY salesdate DESC";
    $result = mysqli_query($conn, $sqlSelect);
    $message = mysqli_error($conn);
    $bbbTotal = 0;$bbbSold = 0;$bbbCancelled = 0;$fbTotal=0;$fbSold=0;$fbCancelled=0;$fbMsnTotal=0;$fbMsnSold=0;$fbMsnCancelled=0;$fbCallTotal=0;$fbCallSold=0;$fbCallCancelled=0;$inCallTotal=0;$inCallSold=0;$inCallCancelled=0;$organicTotal=0;$organicSold=0;$organicCancelled=0;$otherTotal=0;$otherSold=0;$otherCancelled=0;$ppcTotal=0;$ppcSold=0;$ppcCancelled=0;$radioTotal=0;$radioSold=0;$radioCancelled=0;$refTotal=0;$refSold=0;$refCancelled=0;$tvTotal=0;$tvSold=0;$tvCancelled=0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if($row['cancelsale'] == '1' ){
              $CancelRev += $row['canceled_rev'];
            }
            if($row['was sold'] == '1' ){
              $Total ++;
              $TotalRev += $row['sold_mt_rev'] + $row['sold_tr_rev'] - $CancelRev;
            }
            if($row['cancelsale'] == '1' ){
              $Cancelled ++;
            }
             if($row['source'] == 'BBB'){
                $bbbTotal++;
                if($row['was sold'] == '1' ){
                  $bbbSold++;
                  if($row['Nurture']== ''){
                    $bbbrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $bbb++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $bbbtrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $bbbt++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $bbberev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $bbbe++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $bbbmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $bbbm++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $bbbrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $bbbr++;
                  }
                }
                if($row['cancelsale'] == '1'){
                    $bbbCancelled++;
                    if($row['Nurture']== ''){
                      $bbbc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $bbbtc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $bbbec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $bbbmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $bbbrc++;
                    }
                }
            }
            if($row['source'] == 'Facebook'){
                $fbTotal++;
                if($row['was sold'] == '1' ){
                    $fbSold++;
                    if($row['Nurture']== ''){
                      $fbrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fb++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fbtrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fbt++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fberev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fbe++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fbmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fbm++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fbrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fbr++;
                    }
                }
                if($row['cancelsale'] == '1'){
                    $fbCancelled++;
                    if($row['Nurture']== ''){
                      $fbc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fbtc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fbec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fbmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fbrc++;
                    }
                }
            }
            // ***************
             if($row['source'] == 'Facebook Messenger'){
                $fmTotal++;
                if($row['was sold'] == '1' ){
                    $fmSold++;
                    if($row['Nurture']== ''){
                      $fmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fm++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fmtrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fmt++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fmerev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fme++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fmmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fmm++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fmrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fmr++;
                    }
                }
                if($row['cancelsale'] == '1'){
                    $fmCancelled++;
                    if($row['Nurture']== ''){
                      $fmc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fmtc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fmec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fmmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fmrc++;
                    }
                }
            }
            // ***************
             if($row['source'] == 'FB Call'){
                $fcTotal++;
                if($row['was sold'] == '1' ){
                    $fcSold++;
                    if($row['Nurture']== ''){
                      $fcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fctrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fct++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fceev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fce++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fcmev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fcm++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fcrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fcr++;
                    }
                }
                if($row['cancelsale'] == '1'){
                    $fcCancelled++;
                    if($row['Nurture']== ''){
                      $fcc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fctc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fcec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fcmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fcrc++;
                    }
                }
            }
            // ***************
             if($row['source'] == 'Inbound Call'){
                $icTotal++;
                if($row['was sold'] == '1' ){
                    $icSold++;
                    if($row['Nurture']== ''){
                      $icrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $ic++;
                      // $icrev = $row['sold_mt_rev'] + $row['sold_tr_rev'] - ($row['cancelsale'] * ($row['sold_mt_rev'] + $row['sold_tr_rev']));
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $ictrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $ict++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $icerev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $ice++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $icmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $icm++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $icrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $icr++;
                    }
                }
                if($row['cancelsale'] == '1'){
                    $icCancelled++;
                    if($row['Nurture']== ''){
                      $icc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $ictc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $icec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $icmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $icrc++;
                    }
                }
            }
            // ***************
            if($row['source'] == 'Organic / Untracked'){
              $ogTotal++;
              if($row['was sold'] == '1' ){
                  $ogSold++;
                  if($row['Nurture']== ''){
                    $ogrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $og++;
                    // $ogrev = $row['sold_mt_rev'] + $row['sold_tr_rev'] - ($row['cancelsale'] * ($row['sold_mt_rev'] + $row['sold_tr_rev']));
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ogtrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ogt++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $ogerev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $oge++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ogmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ogm++;
                  }
                  if($row['Nurture']== 'Ringless Voogemail'){
                    $ogrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ogr++;
                  }
              }
              if($row['cancelsale'] == '1'){
                  $ogCancelled++;
                  if($row['Nurture']== ''){
                    $ogc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ogtc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $ogec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ogmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $ogrc++;
                  }
              }
            }
             // ***************
             if($row['source'] == 'Other'){
              $otTotal++;
              if($row['was sold'] == '1' ){
                    $otrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $otSold++;
                  if($row['Nurture']== ''){
                    $otrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ot++;
                    // $otrev = $row['sold_mt_rev'] + $row['sold_tr_rev'] - ($row['cancelsale'] * ($row['sold_mt_rev'] + $row['sold_tr_rev']));
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ottrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ott++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $oterev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ote++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $otmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $otm++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $otrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $otr++;
                  }
              }
              if($row['cancelsale'] == '1'){
                  $otCancelled++;
                  if($row['Nurture']== ''){
                    $otc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ottc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $otec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $otmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $otrc++;
                  }
              }
            }
            // ***************
            if($row['source'] == 'PPC'){
              $ppcTotal++;
              if($row['was sold'] == '1' ){
                  $ppcSold++;
                  if($row['Nurture']== ''){
                    $ppcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppc++;
                    // $ppcrev = $row['sold_mt_rev'] + $row['sold_tr_rev'] - ($row['cancelsale'] * ($row['sold_mt_rev'] + $row['sold_tr_rev']));
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ppctrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppct++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $ppcerev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppce++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ppcmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppcm++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $ppcrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppcr++;
                  }
              }
              if($row['cancelsale'] == '1'){
                  $ppcCancelled++;
                  if($row['Nurture']== ''){
                    $ppcc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ppctc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $ppcec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ppcmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $ppcrc++;
                  }
              }
            }
            // ***************
            if($row['source'] == 'Radio'){
              $raTotal++;
              if($row['was sold'] == '1' ){
                  $raSold++;
                  if($row['Nurture']== ''){
                    $rarev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ra++;
                    // $rarev = $row['sold_mt_rev'] + $row['sold_tr_rev'] - ($row['cancelsale'] * ($row['sold_mt_rev'] + $row['sold_tr_rev']));
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ratrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $rat++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $raerev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $rae++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ramrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ram++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $rarrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $rar++;
                  }
              }
              if($row['cancelsale'] == '1'){
                  $raCancelled++;
                  if($row['Nurture']== ''){
                    $rac++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ratc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $raec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ramc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $rarc++;
                  }
              }
            }
            // ***************
            if($row['source'] == 'Referral'){
              $refTotal++;
              if($row['was sold'] == '1' ){
                  $refSold++;
                  if($row['Nurture']== ''){
                    $refrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ref++;
                    // $refrev = $row['sold_mt_rev'] + $row['sold_tr_rev'] - ($row['cancelsale'] * ($row['sold_mt_rev'] + $row['sold_tr_rev']));
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $reftrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $reft++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $referev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $refe++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $refmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $refm++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $refrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $refr++;
                  }
              }
              if($row['cancelsale'] == '1'){
                  $refCancelled++;
                  if($row['Nurture']== ''){
                    $refc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $reftc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $refec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $refmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $refrc++;
                  }
              }
            }
            // ***************
            if($row['source'] == 'TV'){
              $tvTotal++;
              if($row['was sold'] == '1' ){
                  $tvSold++;
                  if($row['Nurture']== ''){
                    $tvrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tv++;
                    // $tvrev = $row['sold_mt_rev'] + $row['sold_tr_rev'] - ($row['cancelsale'] * ($row['sold_mt_rev'] + $row['sold_tr_rev']));
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $tvtrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tvt++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $tverev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tve++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $tvmrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tvm++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $tvrrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tvr++;
                  }
              }
              if($row['cancelsale'] == '1'){
                  $tvCancelled++;
                  if($row['Nurture']== ''){
                    $tvc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $tvtc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $tvec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $tvmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $tvrc++;
                  }
              }
            }
            if($row['cancelsale'] == '1'){
              $cancelTotal += $row['sold_mt_rev'] + $row['sold_tr_rev'];
            }
        }
    }
?>
<table>
  <thead>
    <tr>
      <th>SOURCE</th>
      <th>NURTURE</th>
      <th>SOLD</th>
      <th>CANCELLED</th>
      <th>REVENUE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>BBB</td>
      <td></td>
      <td>
        <?php echo $bbb ?>
      </td>
      <td>
        <?php echo $bbbc ?>
      </td>
      <td>
        $ <?php echo number_format($bbbrev) ?>
      </td>
    </tr>
    <tr style="<?php if($bbbt == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $bbbt ?>
      </td>
      <td>
        <?php echo $bbbtc ?>
      </td>
      <td>
        $ <?php echo number_format($bbbtrev) ?>
      </td>
    </tr>
    <tr style="<?php if($bbbe == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $bbbe ?>
      </td>
      <td>
        <?php echo $bbbec ?>
      </td>
      <td>
        $ <?php echo number_format($bbberev) ?>
      </td>
    </tr>
    <tr style="<?php if($bbbm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $bbbm ?>
      </td>
      <td>
        <?php echo $bbbmc ?>
      </td>
      <td>
        $ <?php echo number_format($bbbmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($bbbr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $bbbr ?>
      </td>
      <td>
        <?php echo $bbbrc ?>
      </td>
      <td>
        $ <?php echo number_format($bbbrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>Facebook</td>
      <td></td>
      <td>
        <?php echo $fb ?>
      </td>
      <td>
        <?php echo $fbc ?>
      </td>
      <td>
        $ <?php echo number_format($fbrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fbt == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $fbt ?>
      </td>
      <td>
        <?php echo $fbtc ?>
      </td>
      <td>
        $ <?php echo number_format($fbtrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fbe == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $fbe ?>
      </td>
      <td>
        <?php echo $fbec ?>
      </td>
      <td>
        $ <?php echo number_format($fberev) ?>
      </td>
    </tr>
    <tr style="<?php if($fbm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $fbm ?>
      </td>
      <td>
        <?php echo $fbmc ?>
      </td>
      <td>
        $ <?php echo number_format($fbmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fbr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $fbr ?>
      </td>
      <td>
        <?php echo $fbrc ?>
      </td>
      <td>
        $ <?php echo number_format($fbrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>Facebook Messenger</td>
      <td></td>
      <td>
        <?php echo $fm ?>
      </td>
      <td>
        <?php echo $fmc ?>
      </td>
      <td>
        $ <?php echo number_format($fmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fmt == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $fmt ?>
      </td>
      <td>
        <?php echo $fmtc ?>
      </td>
      <td>
        $ <?php echo number_format($fmtrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fme == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $fme ?>
      </td>
      <td>
        <?php echo $fmec ?>
      </td>
      <td>
        $ <?php echo number_format($fmerev) ?>
      </td>
    </tr>
    <tr style="<?php if($fmm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $fmm ?>
      </td>
      <td>
        <?php echo $fmmc ?>
      </td>
      <td>
        $ <?php echo number_format($fmmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fmr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $fmr ?>
      </td>
      <td>
        <?php echo $fmrc ?>
      </td>
      <td>
        $ <?php echo number_format($fmrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <!-- ************************ -->
    <tr>
      <td>FB Call</td>
      <td></td>
      <td>
        <?php echo $fc ?>
      </td>
      <td>
        <?php echo $fcc ?>
      </td>
      <td>
        $ <?php echo number_format($fcrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fct == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $fct ?>
      </td>
      <td>
        <?php echo $fctc ?>
      </td>
      <td>
        $ <?php echo number_format($fctrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fce == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $fce ?>
      </td>
      <td>
        <?php echo $fcec ?>
      </td>
      <td>
        $ <?php echo number_format($fcerev) ?>
      </td>
    </tr>
    <tr style="<?php if($fcm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $fcm ?>
      </td>
      <td>
        <?php echo $fcmc ?>
      </td>
      <td>
        $ <?php echo number_format($fcmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($fcr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $fcr ?>
      </td>
      <td>
        <?php echo $fcrc ?>
      </td>
      <td>
        $ <?php echo number_format($fcrmrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>Inbound Call</td>
      <td></td>
      <td>
        <?php echo $ic ?>
      </td>
      <td>
        <?php echo $icc ?>
      </td>
      <td>
        $ <?php echo number_format($icrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ict == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $ict ?>
      </td>
      <td>
        <?php echo $ictc ?>
      </td>
      <td>
        $ <?php echo number_format($ictrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ice == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $ice ?>
      </td>
      <td>
        <?php echo $icec ?>
      </td>
      <td>
        $ <?php echo number_format($icerev) ?>
      </td>
    </tr>
    <tr style="<?php if($icm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $icm ?>
      </td>
      <td>
        <?php echo $icmc ?>
      </td>
      <td>
        $ <?php echo number_format($icmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($icr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $icr ?>
      </td>
      <td>
        <?php echo $icrc ?>
      </td>
      <td>
        $ <?php echo number_format($icrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>Organic / Untracked</td>
      <td></td>
      <td>
        <?php echo $og ?>
      </td>
      <td>
        <?php echo $ogc ?>
      </td>
      <td>
        $ <?php echo number_format($ogrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ogt == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $ogt ?>
      </td>
      <td>
        <?php echo $ogtc ?>
      </td>
      <td>
        $ <?php echo number_format($ogtrev) ?>
      </td>
    </tr>
    <tr style="<?php if($oge == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $oge ?>
      </td>
      <td>
        <?php echo $ogec ?>
      </td>
      <td>
        $ <?php echo number_format($ogerev) ?>
      </td>
    </tr>
    <tr style="<?php if($ogm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $ogm ?>
      </td>
      <td>
        <?php echo $ogmc ?>
      </td>
      <td>
        $ <?php echo number_format($ogmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ogr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $ogr ?>
      </td>
      <td>
        <?php echo $ogrc ?>
      </td>
      <td>
        $ <?php echo number_format($ogrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>Other</td>
      <td></td>
      <td>
        <?php echo $ot ?>
      </td>
      <td>
        <?php echo $otc ?>
      </td>
      <td>
        $ <?php echo number_format($otrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ott == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $ott ?>
      </td>
      <td>
        <?php echo $ottc ?>
      </td>
      <td>
        $ <?php echo number_format($ottrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ote == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $ote ?>
      </td>
      <td>
        <?php echo $otec ?>
      </td>
      <td>
        $ <?php echo number_format($oterev) ?>
      </td>
    </tr>
    <tr style="<?php if($otm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $otm ?>
      </td>
      <td>
        <?php echo $otmc ?>
      </td>
      <td>
        $ <?php echo number_format($otmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($otr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $otr ?>
      </td>
      <td>
        <?php echo $otrc ?>
      </td>
      <td>
        $ <?php echo number_format($otrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>PPC</td>
      <td></td>
      <td>
        <?php echo $ppc ?>
      </td>
      <td>
        <?php echo $ppcc ?>
      </td>
      <td>
        $ <?php echo number_format($ppcrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ppct == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $ppct ?>
      </td>
      <td>
        <?php echo $ppctc ?>
      </td>
      <td>
        $ <?php echo number_format($ppctrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ppce == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $ppce ?>
      </td>
      <td>
        <?php echo $ppcec ?>
      </td>
      <td>
        $ <?php echo number_format($ppcerev) ?>
      </td>
    </tr>
    <tr style="<?php if($ppcm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $ppcm ?>
      </td>
      <td>
        <?php echo $ppcmc ?>
      </td>
      <td>
        $ <?php echo number_format($ppcmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($ppcr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $ppcr ?>
      </td>
      <td>
        <?php echo $ppcrc ?>
      </td>
      <td>
        $ <?php echo number_format($ppcrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>Radio</td>
      <td></td>
      <td>
        <?php echo $ra ?>
      </td>
      <td>
        <?php echo $rac ?>
      </td>
      <td>
        $ <?php echo number_format($rarev) ?>
      </td>
    </tr>
    <tr style="<?php if($rat == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $rat ?>
      </td>
      <td>
        <?php echo $ratc ?>
      </td>
      <td>
        $ <?php echo number_format($ratrev) ?>
      </td>
    </tr>
    <tr style="<?php if($rae == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $rae ?>
      </td>
      <td>
        <?php echo $raec ?>
      </td>
      <td>
        $ <?php echo number_format($raerev) ?>
      </td>
    </tr>
    <tr style="<?php if($ram == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $ram ?>
      </td>
      <td>
        <?php echo $ramc ?>
      </td>
      <td>
        $ <?php echo number_format($ramrev) ?>
      </td>
    </tr>
    <tr style="<?php if($rar == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $rar ?>
      </td>
      <td>
        <?php echo $rarc ?>
      </td>
      <td>
        $ <?php echo number_format($rarrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>Referral</td>
      <td></td>
      <td>
        <?php echo $ref ?>
      </td>
      <td>
        <?php echo $refc ?>
      </td>
      <td>
        $ <?php echo number_format($refrev) ?>
      </td>
    </tr>
    <tr style="<?php if($reft == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $reft ?>
      </td>
      <td>
        <?php echo $reftc ?>
      </td>
      <td>
        $ <?php echo number_format($refrrev) ?>
      </td>
    </tr>
    <tr style="<?php if($refe == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $refe ?>
      </td>
      <td>
        <?php echo $refec ?>
      </td>
      <td>
        $ <?php echo number_format($referev) ?>
      </td>
    </tr>
    <tr style="<?php if($refm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $refm ?>
      </td>
      <td>
        <?php echo $refmc ?>
      </td>
      <td>
        $ <?php echo number_format($refmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($refr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $refr ?>
      </td>
      <td>
        <?php echo $refrc ?>
      </td>
      <td>
        $ <?php echo number_format($refrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td>TV</td>
      <td></td>
      <td>
        <?php echo $tv ?>
      </td>
      <td>
        <?php echo $tvc ?>
      </td>
      <td>
        $ <?php echo number_format($tvrev) ?>
      </td>
    </tr>
    <tr style="<?php if($tvt == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Text Blast
      </td>
      <td>
        <?php echo $tvt ?>
      </td>
      <td>
        <?php echo $tvtc ?>
      </td>
      <td>
        $ <?php echo number_format($tvtrev) ?>
      </td>
    </tr>
    <tr style="<?php if($tve == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Email Blast
      </td>
      <td>
        <?php echo $tve ?>
      </td>
      <td>
        <?php echo $tvec ?>
      </td>
      <td>
        $ <?php echo number_format($tverev) ?>
      </td>
    </tr>
    <tr style="<?php if($tvm == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Mail Drop
      </td>
      <td>
        <?php echo $tvm ?>
      </td>
      <td>
        <?php echo $tvmc ?>
      </td>
      <td>
        $ <?php echo number_format($tvmrev) ?>
      </td>
    </tr>
    <tr style="<?php if($tvr == 0) {echo " display:none";}?>">
      <td></td>
      <td>
        Ringless Voicemail
      </td>
      <td>
        <?php echo $tvr ?>
      </td>
      <td>
        <?php echo $tvrc ?>
      </td>
      <td>
        $ <?php echo number_format($tvrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr style="background:#e7f7f7;">
      <td>Total</td>
      <td></td>
      <td>
        <?php echo $Total ?>
      </td>
      <td>
        <?php echo $Cancelled ?>
      </td>
      <td>
        $ <?php echo number_format($TotalRev - $cancelTotal) ?>
      </td>
    </tr>
  </tbody>
</table>