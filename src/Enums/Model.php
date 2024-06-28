<?php

declare(strict_types=1);

namespace OpenAiClient\Enums;

enum Model: string
{
    case GPT_4O = 'gpt-4o';
    case GPT_4O_2024_05_13 = 'gpt-4o-2024-05-13';
    case GPT_4_TURBO = 'gpt-4-turbo';
    case GPT_4_TURBO_2024_04_09 = 'gpt-4-turbo-2024-04-09';
    case GPT_4_TURBO_PREVIEW = 'gpt-4-turbo-preview';
    case GPT_4_0125_PREVIEW = 'gpt-4-0125-preview';
    case GPT_4_1106_PREVIEW = 'gpt-4-1106-preview';
    case GPT_4 = 'gpt-4';
    case GPT_4_0613 = 'gpt-4-0613';
    case GPT_4_0314 = 'gpt-4-0314';
    case GPT_3_5_TURBO_0125 = 'gpt-3.5-turbo-0125';
    case GPT_3_5_TURBO = 'gpt-3.5-turbo';
    case GPT_3_5_TURBO_1106 = 'gpt-3.5-turbo-1106';
    case GPT_3_5_TURBO_INSTRUCT = 'gpt-3.5-turbo-instruct';
    case DALL_E_3 = 'dall-e-3';
    case DALL_E_2 = 'dall-e-2';
    case TTS_1 = 'tts-1';
    case TTS_1_HD = 'tts-1-hd';
    case WHISPER_1 = 'whisper-1';
    case TEXT_EMBEDDING_3_LARGE = 'text-embedding-3-large';
    case TEXT_EMBEDDING_3_SMALL = 'text-embedding-3-small';
    case TEXT_EMBEDDING_ADA_002 = 'text-embedding-ada-002';
    case TEXT_MODERATION_LATEST = 'text-moderation-latest';
    case TEXT_MODERATION_STABLE = 'text-moderation-stable';
    case TEXT_MODERATION_007 = 'text-moderation-007';
    case BABBAGE_002 = 'babbage-002';
    case DAVINCI_002 = 'davinci-002';
}
