<?php 
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
use League\Csv\Reader;

$bucket = 'rr-data-test';
$keyname = 'export-mk.csv';

$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'us-east-1'
]);
try {
    // Get the object.
    $result = $s3->getObject([
        'Bucket' => $bucket,
        'Key'    => $keyname
    ]);
    // Display the object in the browser.
    header("Content-Type: {$result['ContentType']}");
    echo $result['Body'];
} catch (S3Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}