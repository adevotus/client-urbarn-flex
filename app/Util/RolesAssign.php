<?php

namespace App\Util;

class RolesAssign
{
    // Constants for tracking percentage values
    public const  MANAGER= 'Manager';
    public const  HELPDESK= 'HelpDesk';
    public const  OWNER= 'Owner';
    public const  DRIVER= 'Driver';


    /**
     * Get all tracking percentages.
     *
     * @return array
     */
    public static function getRolesAssign(): array
    {
        return [
            self::MANAGER,
            self::HELPDESK,
            self::OWNER,
            self::DRIVER,

        ];
    }
}
