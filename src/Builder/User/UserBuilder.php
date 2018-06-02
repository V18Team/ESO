<?php
/**
 * This file is part of ESO system.
 *
 * (c) ESO 2018
 *
 * If you want, you can see license file at https://github.com/ZPOSO/ESO/LICENSE
 *
 * Date: 28.05.18
 * Time: 18:05
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace App\Builder\User;

use App\Entity\User;

class UserBuilder
{
    private $login;
    private $password;
    private $email;
    private $code;
    private $role;

    /**
     * UserBuilder constructor.
     * @param string $login
     * @param string $password
     * @param string $email
     * @param int $code
     * @param string $role
     */
    public function __construct(
        string $login,
        string $password,
        string $email,
        int $code,
        string $role
    ) {
        $this->login     = $login;
        $this->password  = $password;
        $this->email     = $email;
        $this->code      = $code;
        $this->role      = $role;
    }

    /**
     * @return User
     */
    public function getObject(): User
    {
        return new User(
            $this->login,
            $this->password,
            $this->email,
            $this->code,
            $this->role
        );
    }
}