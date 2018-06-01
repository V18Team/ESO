<?php
/**
 * This file is part of ESO system.
 *
 * (c) ESO 2018
 *
 * If you want, you can see license file at https://github.com/ZPOSO/ESO/LICENSE
 *
 * Date: 31.05.18
 * Time: 14:31
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace App\Controller\UserController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;

class UserController extends Controller
{
    public function listAllUsers(UserInterface $userInterface = null)
    {
    }
}