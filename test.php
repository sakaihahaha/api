<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));//print_r($input_lines);exit;
    $input_lines=explode(" ",$input_lines);
    //print_r($aq);
    $a=$input_lines[0];
    $b=$input_lines[1];
    $c=$input_lines[2];
    //$r= strtotime(date("7:20"));
    $input_lines = trim(fgets(STDIN));print_r($input_lines);exit;
    //print $bq;
    for($i=0;$i<$input_lines;$i++){
        $cq = trim(fgets(STDIN));
        $cq=explode(" ",$cq);
        $minute=$cq[0];
        $second=$cq[1];
        //print_r($cq);
        $time= strtotime("$minute:$second +$b minute +$c minute"); 
        //print date("H:i",$time);
        if($time<=strtotime("8:59")){
            $time2 = strtotime("$minute:$second");
            $res[] = $time2;
            //print date("H:i",$time);
            //print "セーフ";
        }
        //print date("H:i",$time);
    //print 9;
        
        
    }
   //print_r($res);
    $best_time = max($res);
    $best_time1 = date("H:i",$best_time);
    //print "best".$best_time1;
    $best_time2=date("H:i", strtotime("$best_time1 -$a minute"));
    print $best_time2."\n";
    //date("H:i", strtotime(" -1 day"  ));

    //$g=date('H:i', strtotime("07:00 +30 minute"));
    //print $g;
    //$az=date("7:2");
    //$bz=date("7:21");
    //date("Y/m/d", strtotime(" -1 day"  ));
    //if($az<=$bz){
    //    print "a";
    //}
    //$k = strtotime($az)."\n";
    //$l= strtotime($bz)."\n";
    //print date("H:i", strtotime("$az +10 minute +6 minute"));

    
?>
