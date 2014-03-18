<?php
###############################################################################
# Amazon S3 infos
###############################################################################

$s3_key 	= '< AMAZON KEY >';
$s3_secret 	= '< AMAZON SECRET KEY >';

// Your bucket ex.: /mybucket
$s3_bucket = '/mybucket';

// Your bucket region. Can be "s3", "s3-us-west-2", ...
$s3_region = 's3-us-west-2';

###############################################################################
# Info not supposed to change
###############################################################################

$s3_url = "http://{$s3_region}.amazonaws.com";
