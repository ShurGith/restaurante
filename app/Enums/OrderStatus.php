<?php

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Preparing = 'preparing';
    case Completed = 'completed';

    public static function toArray()
    {
        return collect(static::cases())
            ->mapWithKeys(function ($case) {
                return [$case->name => $case->value];
            })
            ->toArray();
    }
}
