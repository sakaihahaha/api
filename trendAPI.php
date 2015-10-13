<?php
function get_trend() {
  $request = "http://kizasi.jp/kizapi.py?type=rank";

  // API呼び出し
  $response = file_get_contents($request);//print_r($response);exit;
  $obj = simplexml_load_string( $response ) ;//print_r($obj );exit;
  $json_encode = json_encode($obj);//print_r($json_encode );exit;
  $result = json_decode($json_encode,TRUE);
//print_r($result);exit;
  return $result;
}
print_r(get_trend());

?>