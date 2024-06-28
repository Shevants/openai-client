<?php

declare(strict_types=1);

namespace OpenAiClient\Enums;

enum FineTuningEventLevel: string
{
    case Info = 'info';
    case Warning = 'warn';
    case Error = 'error';
}
