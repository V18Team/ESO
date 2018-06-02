<?php

/**
 * This file is part of ESO system.
 *
 * (c) ESO 2018
 *
 * If you want, you can see license file at https://github.com/ZPOSO/ESO/LICENSE
 *
 * Date: 27.05.18
 * Time: 12:09
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class LoginController extends Controller
{
    public function indexView(AuthorizationCheckerInterface $auth)
    {
        if ($auth->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('');
        }
        return $this->render('index.html.twig', []);
    }
    public function checkView()
    {

    }
    public function logoutView()
    {

    }
}
