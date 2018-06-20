<?php
/**
 * This file is part of ESO system.
 *
 * (c) ESO 2018
 *
 * If you want, you can see license file at https://github.com/ZPOSO/ESO/LICENSE
 *
 * Date: 27.05.18
 * Time: 19:57
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminDashboardController extends Controller
{
    public function dashboardView()
    {
        return $this->render('administrator/indexAfterLogin.html.twig');
    }
}