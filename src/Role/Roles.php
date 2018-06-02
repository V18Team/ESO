<?php
/**
 * This file is part of ESO system.
 *
 * (c) ESO 2018
 *
 * If you want, you can see license file at https://github.com/ZPOSO/ESO/LICENSE
 *
 * Date: 28.05.18
 * Time: 18:13
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace App\Role;

class Roles
{
    /**
     * This user is administrator of the system.
     */

    const ROLE_ADMIN            = 'ROLE_ADMIN';

    /**
     * This user is director of the school.
     */
    const ROLE_DIRECTOR         = 'ROLE_DIRECTOR';

    /**
     * This user is psychologist.
     */
    const ROLE_PSYCHOLOGIST     = 'ROLE_PSYCHOLOGIST';

    /**
     * This user is secretary of the school.
     */
    const ROLE_SECRETARY        = 'ROLE_SECRETARY';

    /**
     * This user is library employer.
     */
    const ROLE_LIBRARY_EMPLOYER = 'ROLE_LIBRARY';

    /**
     * This user is teacher.
     */
    const ROLE_TEACHER          = 'ROLE_TEACHER';

    /**
     * This user is parent.
     */
    const ROLE_PARENT           = 'ROLE_PARENT';

    /**
     * This user is student.
     */
    const ROLE_STUDENT          = 'ROLE_STUDENT';

    /**
     * This user is blocked user of the system.
     */
    const ROLE_BLOCKED          = 'ROLE_BLOCKED';
}