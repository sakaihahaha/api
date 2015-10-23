<?php
// YAHOO! API情報
define("YAHOO_APPID", "dj0zaiZpPWlKOGNZbXRMb2N4dCZzPWNvbnN1bWVyc2VjcmV0Jng9M2Q-");
define("YAHOO_ITEM_SEARCH_API", "http://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemSearch");

function get_yahoo_items($keyword) {
  // リクエストの組み立て
  $params = array(
    "appid" => YAHOO_APPID,
    "query" => $keyword
  );
  $query = http_build_query($params);
  $request = YAHOO_ITEM_SEARCH_API . "?" . $query;

  // API呼び出し
  $result = file_get_contents($request);
  $result = json_decode($result);
//  var_dump($result);exit();
  $return["items"] = $result->ResultSet->{0}->Result;
  $return["max"] = $result->ResultSet->totalResultsReturned;
//  print $return;exit();
print_r($return);exit();
  return $return;
}
