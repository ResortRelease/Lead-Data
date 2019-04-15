<?php
    $sqlSelect = "SELECT * FROM `leads-tbl` WHERE salesdate BETWEEN '$thisMonthFirst' AND '$thisMonthLast' ORDER BY salesdate DESC";
    $result = mysqli_query($conn, $sqlSelect);
    $message = mysqli_error($conn);
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
                      $bbbcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $bbbc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $bbbtcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $bbbtc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $bbbecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $bbbec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $bbbmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $bbbmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $bbbrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                      $fbcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fbc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fbtcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fbtc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fbecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fbec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fbmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fbmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fbrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                      $fmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fmc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fmtcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fmtc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fmecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fmec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fmmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fmmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fmrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                      $fccrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fcc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $fctcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fctc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $fcecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fcec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $fcmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $fcmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $fcrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                      $iccrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $icc++;
                    }
                    if($row['Nurture']== 'Text Blast'){
                      $ictcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $ictc++;
                    }
                    if($row['Nurture']== 'Email Blast'){
                      $icecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $icec++;
                    }
                    if($row['Nurture']== 'Mail Drop'){
                      $icmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                      $icmc++;
                    }
                    if($row['Nurture']== 'Ringless Voicemail'){
                      $icrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                    $ogcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ogc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ogtcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ogtc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $ogecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ogec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ogmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ogmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $ogrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                    $otcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $otc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ottcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ottc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $otecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $otec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $otmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $otmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $otrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                    $ppccrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppcc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ppctcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppctc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $ppcecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppcec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ppcmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ppcmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $ppcrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                    $racrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $rac++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $ratcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ratc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $raecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $raec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $ramcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $ramc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $rarcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                    $refcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $refc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $reftcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $reftc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $refecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $refec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $refmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $refmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $refrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
                    $tvcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tvc++;
                  }
                  if($row['Nurture']== 'Text Blast'){
                    $tvtcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tvtc++;
                  }
                  if($row['Nurture']== 'Email Blast'){
                    $tvecrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tvec++;
                  }
                  if($row['Nurture']== 'Mail Drop'){
                    $tvmcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
                    $tvmc++;
                  }
                  if($row['Nurture']== 'Ringless Voicemail'){
                    $tvrcrev += $row['sold_mt_rev'] + $row['sold_tr_rev'];
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
      <th>TOTAL CANCELS</th>
      <th>GROWTH</th>
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
        $ <?php echo number_format($bbbcrev) ?>
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
        $ <?php echo number_format($bbbtcrev) ?>
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
        $ <?php echo number_format($bbbecrev) ?>
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
        $ <?php echo number_format($bbbmcrev) ?>
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
        $ <?php echo number_format($bbbrcrev) ?>
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
        $ <?php echo number_format($fbcrev) ?>
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
        $ <?php echo number_format($fbtcrev) ?>
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
        $ <?php echo number_format($fbecrev) ?>
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
        $ <?php echo number_format($fbmcrev) ?>
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
        $ <?php echo number_format($fbrcrev) ?>
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
        $ <?php echo number_format($fmcrev) ?>
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
        $ <?php echo number_format($fmtcrev) ?>
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
        $ <?php echo number_format($fmecrev) ?>
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
        $ <?php echo number_format($fmmcrev) ?>
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
        $ <?php echo number_format($fmrcrev) ?>
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
        $ <?php echo number_format($fccrev) ?>
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
        $ <?php echo number_format($fctcrev) ?>
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
        $ <?php echo number_format($fcecrev) ?>
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
        $ <?php echo number_format($fcmcrev) ?>
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
        $ <?php echo number_format($fcrmcrev) ?>
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
        $ <?php echo number_format($iccrev) ?>
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
        $ <?php echo number_format($ictcrev) ?>
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
        $ <?php echo number_format($icecrev) ?>
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
        $ <?php echo number_format($icmcrev) ?>
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
        $ <?php echo number_format($icrcrev) ?>
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
        $ <?php echo number_format($ogcrev) ?>
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
        $ <?php echo number_format($ogtcrev) ?>
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
        $ <?php echo number_format($ogecrev) ?>
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
        $ <?php echo number_format($ogmcrev) ?>
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
        $ <?php echo number_format($ogrcrev) ?>
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
        $ <?php echo number_format($otcrev) ?>
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
        $ <?php echo number_format($ottcrev) ?>
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
        $ <?php echo number_format($otecrev) ?>
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
        $ <?php echo number_format($otmcrev) ?>
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
        $ <?php echo number_format($otrcrev) ?>
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
        $ <?php echo number_format($ppccrev) ?>
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
        $ <?php echo number_format($ppctcrev) ?>
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
        $ <?php echo number_format($ppcecrev) ?>
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
        $ <?php echo number_format($ppcmcrev) ?>
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
        $ <?php echo number_format($ppcrcrev) ?>
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
        $ <?php echo number_format($racrev) ?>
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
        $ <?php echo number_format($ratcrev) ?>
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
        $ <?php echo number_format($raecrev) ?>
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
        $ <?php echo number_format($ramcrev) ?>
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
        $ <?php echo number_format($refcrev) ?>
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
        $ <?php echo number_format($refrcrev) ?>
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
        $ <?php echo number_format($refecrev) ?>
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
        $ <?php echo number_format($refmcrev) ?>
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
      <td>
        $ <?php echo number_format($refrcrev) ?>
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
        $ <?php echo number_format($tvcrev) ?>
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
        $ <?php echo number_format($tvtcrev) ?>
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
        $ <?php echo number_format($tvecrev) ?>
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
        $ <?php echo number_format($tvmcrev) ?>
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
        $ <?php echo number_format($tvrcrev) ?>
      </td>
      <td>
        $ <?php echo number_format($tvrrev) ?>
      </td>
    </tr>
    <!-- ************************ -->
    <tr>
      <td><b>Total</b></td>
      <td></td>
      <td>
        <b><?php echo $Total ?></b>
      </td>
      <td>
        <b><?php echo $Cancelled ?></b>
      </td>
      <td>
        <b>$ <?php echo number_format($cancelTotal) ?></b>
      </td>
      <td>
        <b>$ <?php echo number_format($TotalRev - $cancelTotal) ?></b>
      </td>
    </tr>
  </tbody>
</table>
