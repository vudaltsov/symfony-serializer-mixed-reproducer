<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;

final class ReproduceCommand extends Command
{
    protected static $defaultName = 'reproduce';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $denormalizer = new PropertyNormalizer(propertyTypeExtractor: new ReflectionExtractor());
        $denormalizer->denormalize(['mixedProperty' => 1], DTO::class);
    }
}
