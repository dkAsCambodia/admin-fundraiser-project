<?php

namespace App\Enums;

enum Roles: string
{
    case SUPERADMIN = 'super_admin';
    // case ADMIN = 'admin';
    case ACCOUNT = 'account';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
