<?php

namespace App\Enum;

use Illuminate\Database\Eloquent\Model;

class CsvRules extends Model
{
    public const SEPARATOR = ",";
    public const ENCLOSURE = "\"";
    public const ESCAPE = '\\';
}
