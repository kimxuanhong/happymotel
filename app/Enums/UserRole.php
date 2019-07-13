<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const ROLE_USER = "ROLE_USER";
    const ROLE_STAFF = "ROLE_STAFF";
    const ROLE_ADMIN = "ROLE_ADMIN";
}
