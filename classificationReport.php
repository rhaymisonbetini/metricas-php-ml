<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Metric\ClassificationReport;

$actualLabls = ['um', 'dois', 'um', 'dois'];
$predictedLabels = ['um', 'um', 'um', 'dois'];

$classificationReport = new ClassificationReport($actualLabls, $predictedLabels);

$result = $classificationReport->getRecall();

echo 'percentual de acerto de um ' . $result['um'] * 100 . "\n";
echo 'percentual de acerto de dois ' . $result['dois'] * 100 . "\n";

$suport  = $classificationReport->getSupport();

echo 'existem ' . $suport['um'] . ' elementos um' . "\n";
echo 'existem ' . $suport['dois'] . ' elementos dois' . "\n";
