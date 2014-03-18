<?php
include('config.php');

$mimetype = $_GET['type'];
$file = '/'.$_GET['name'];

$expires = time() + (60 * 5); //now + 5 minutes
$headers= "x-amz-acl:public-read";
$string_to_sign = "PUT\n\n{$mimetype}\n{$expires}\n{$headers}\n{$s3_bucket}{$file}";
$signature = urlencode(base64_encode(hash_hmac('sha1', $string_to_sign, $s3_secret, true)));

echo urlencode("{$s3_url}{$s3_bucket}{$file}?AWSAccessKeyId={$s3_key}&Expires={$expires}&Signature={$signature}");
