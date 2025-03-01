<?php
    $list = [];
    $rend = 0;
    $check = 0;
    if(!is_numeric($_POST['range'])){
        echo '<h1>'."숫자가 아니자너"."</h1>";
    }
    
    else if($_POST['answer'] == 'yes'){
        for($i = 0; $i < $_POST['range']; $i++){
            $rend = rand(33,126);
            $list[$i] = chr($rend);
        }
    $check = 0;
    }else if($_POST['answer'] == 'no'){
        for($i = 0; $i < $_POST['range']; $i++){
            do{
                $rend = rand(65, 122);
            }
            while($rend > 90 and $rend < 97);
            $list[$i] = chr($rend);
        }
    }
    echo "<h1>".htmlspecialchars(implode('', $list))."</h1>";

    /*
    65 ~ 122

    91 ~ 96 제외
     */
?>

