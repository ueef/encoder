<?php
declare(strict_types=1);

namespace Ueef\Encoder\Interfaces;

interface EncoderInterface
{
    public function encode(array $message): string;
    public function decode(string $message): array;
}

