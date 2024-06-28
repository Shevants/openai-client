<?php

declare(strict_types=1);

namespace OpenAiClient\Enums;

enum ContentType: string
{
    case JSON = 'application/json';
    case MULTIPART = 'multipart/form-data';
    case TEXT_PLAIN = 'text/plain';
}
