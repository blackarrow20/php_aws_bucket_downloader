<?php
// Please make a copy of this file and name it "s3config.php"
// Then fill these variables within "s3config.php" according to your needs

$s3key = "";
$s3secret = "";

$endpoint = ""; // For Amazon S3 Direct leave as empty string!
                // For example we use for Google Cloud: "https://storage.googleapis.com"
                // For example for BackBlaze we use: "https://s3.us-west-004.backblazeb2.com"
$directory = "C:/xampp/htdocs/AWS_downloader/downloaded"; // Local folder, where to download bucket files?
$bucket = "duplicator-s3-test"; // Amazon s3 bucket
$storageFolder = ""; // Don't start with slash '/', for example: "Duplicator Backups/test/". Empty means whole bucket!
$region = "us-east-1"; // This will work for our Amazon S3 test account
$version = "2006-03-01"; // Keep this unchanged unless you know what you are doing