<?php
// $array_week = array("Sun" => "日","Mon" => "月","Tue" => "火","Wed" => "水","Thu" => "木","Fri" => "金","Sat" => "土");
// $array_hour = array(1,2,3,4,5,6,7,8,9);

// $i = 0;
// foreach ($array_week as $value) {
//   echo $value;
// }

// echo "<br>";

// for ($j = 0; $j < count($array_hour); $j++){
//   echo $array_hour[$j];
// }

// echo "<br>";

// for ($f = 1; $f <= 100; $f++){
//   if ($f%3 == 0 && $f%5 == 0){
//     echo "FizzBuzz";
//   } elseif ($f%3 == 0){
//     echo "Fizz";
//   } elseif ($f%5 == 0){
//     echo "Buzz";
//   } else {
//     echo $f;
//   }
//   echo "<br>";
// }

#calender

  class Print_Calender extends Today_Calender {
      function space_cell($count){
        if ($count != 0){
          for ($i=0; $i <$count; $i++){
          echo "<td></td>";
        }
      }
    }
  }

  class Today_Calender {
    function today($day) {
      if (date("Y/m/d") == date("Y/m/d",mktime(0,0,0, date("n"),$day,date("Y")))){
        return "<b>".$day."</b>";
      } else{
        return $day;
      }
    }
  }

    echo "<h1>".date("F")."</h1>";
    echo "Today:".date("Y/m/d");
    echo "<br>";

    $weeks = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
    echo "<table border=1><tr>";
    foreach ($weeks as $value){
      echo "<th>".$value."</th>";
    }

    echo "</tr><tr>";

    for ($i = 0; $i < date("t"); $i++){
      $week_number = date("w", mktime(0,0,0, date("n"), $i+1, date("Y")));
      if ($i == 0){
        echo "<tr>";
        Print_Calender::space_cell($week_number);
      } elseif ($week_number == 0){
        echo "<tr>";
      }
      // echo "<td>".($i + 1)."</td>";
      echo "<td>".Print_Calender::today($i + 1)."</td>";
      if ($i + 1 == date("t")){
        Print_Calender::space_cell(6 - $week_number);
        echo "</tr>";
      }
    }
    echo "</table>";



  
  //   if ($week_number == 0 && $i != 0){
  //     echo "<tr>";
  //   }
  //   echo "<td>".($i + 1)."</td>";
  //   if ($week_number == 6 || $i == date("t")){
  //     echo "</tr>";
  //   }
  // }


?>