<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Metric\Accuracy;

$metric = new Accuracy();

$actualLabls = ['um', 'dois', 'um', 'dois'];
$predictedLabels = ['um', 'um', 'um', 'dois'];

$result = $metric->score($actualLabls, $predictedLabels);
$quant = $metric->score($actualLabls, $predictedLabels, false);

echo "São iguais nesses elementos: " . $result * 100 . '%' . "\n";
echo "São iguais nesses elementos: " . $quant;
