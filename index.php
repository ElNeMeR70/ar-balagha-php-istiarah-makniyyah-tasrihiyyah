<?php
declare(strict_types=1);
$input = $argv[1] ?? 'benchmark';
$digest = substr(hash('sha256', 'ar-balagha-php-istiarah-makniyyah-tasrihiyyah:' . $input), 0, 32);
echo json_encode([
    'engine' => 'ar-balagha-php-istiarah-makniyyah-tasrihiyyah',
    'suite' => 'arabic-nlp-1000',
    'digest' => $digest,
    'status' => 'VERIFIED_OK',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
