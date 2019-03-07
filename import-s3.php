<?php 
    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/src/Initialize.php';
    use Aws\S3\S3Client;
    use Aws\S3\Exception\S3Exception;

    $bucket = 'rr-data-test';
    $keyname = 'export-mk.csv';
    $credentials = new Aws\Credentials\Credentials('AKIAIWLNEEBTI5KQYA5A', '0zrQ+pLYgXx4naWYeOW9izz2cboLbBpeCPuDbtl/');
    
    if($_SERVER[HTTP_ORIGIN] == "http://lead-data"){
        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'us-east-1',
            'credentials' => $credentials,
            'ssl.certificate_authority' => 'ca-cert.pem',
            'scheme' => 'http'
        ]);
    } else {
        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'us-east-1',
            'credentials' => $credentials,
        ]);
    }
    $result = $s3->getObject([
        'Bucket' => $bucket,
        'Key'    => $keyname,
        'ExpressionType' => 'SQL',
        'InputSerialization' => [
            'CSV' => [
                'FileHeaderInfo' => 'USE', 
                'RecordDelimiter' => '\n', 
                'FieldDelimiter' => ',',
            ],
        ], 
        'OutputSerialization' => [
            'CSV' => [],
        ],
    ]);
    
    $csv_file = "localFile.csv";

    $file = file_put_contents('localFile.csv', $result['Body']);
    // $fileName = $_FILES["file"]["tmp_name"];
    $fileName = file_get_contents('localFile.csv');
    $page = '/';
    header('Location: '.$page, true, 303);
    exit;
?>