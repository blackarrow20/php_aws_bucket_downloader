<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

require_once 's3config.php';

function printHelp() {
    print ("php downloader.php -h // to print this help\n");
    print ("php downloader.php -p // print info about each object in bucket\n");
    print ("php downloader.php -d // download all files from bucket to local folder\n");
}

if (count($argv) != 2) {
    printHelp();
    exit;
}

$credentials = array(
   'region' => $region,
   'version' => $version,
   'credentials'=> [
      'key' => $s3key,
      'secret' => $s3secret
    ]
);

if ($endpoint != "") { // It's not Amazon S3, but other 3D party S3 provider
    $credentials["endpoint"] = $endpoint;
}

$client = new S3Client($credentials);

if ($argv[1] == "-h") {
    printHelp();
    exit;
}

if ($argv[1] == "-p") {
    $iterator = $client->getIterator('ListObjects', array(
        'Bucket' => $bucket,
        'Prefix' => $storageFolder,
    ));

    $num = 0;
    foreach ($iterator as $object) {
        $num++;
        print("File number: $num.)\n");
        var_dump($object);
        print("\n\n");
    }
    exit;
}

if ($argv[1] == "-d") {
    $client->downloadBucket($directory, $bucket, $storageFolder);
    print("DONE: The whole bucket is downloaded...\n");
    exit;
}

print("Wrong command!\n");
printHelp();
exit;