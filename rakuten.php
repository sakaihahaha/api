<?php
define("RAKUTEN_APPID","");
define("RAKUTEN_URL","https://app.rakuten.co.jp/services/api/IchibaItem/Search/20140222");

function get_rakuten_items($keyword){
	$param = array(
		"applicationId" =>RAKUTEN_APPID,
		"keyword" =>$keyword
	);

	$query=http_build_query($param);
	$request=RAKUTEN_URL."?".$query;
	$response=file_get_contents($request);
	var_dump($response);
	$result=json_decode($response);
	return $result;

}

get_rakuten_items("テーブル");
?>