<?php
/**
 * This file is part of ESO system.
 *
 * (c) ESO 2018
 *
 * If you want, you can see license file at https://github.com/ZPOSO/ESO/LICENSE
 *
 * Date: 31.05.18
 * Time: 16:13
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace App\Controller\MessageController;

use App\Builder\PrivateMessage\PrivateMessageBuilder;
use App\Formatter\FormatDateTime;
use App\MessageTemplate\JsonResponseMessageTemplate;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MessageController extends Controller
{
    public function sendMessage(EntityManagerInterface $entityManager, Request $request): JsonResponse
    {
        $subject = $request->request->get('subject');
        $content = $request->request->get('content');
        $toUser = $request->request->get('toUser');

        if (!isset($subject) ||
            !isset($content) ||
            !isset($toUser)
        ) {
            return new JsonResponse(
                [
                    'message' => JsonResponseMessageTemplate::NOT_FOUND_VARIABLE
                ],
                JsonResponse::HTTP_NOT_FOUND
            );
        }

        $message = new PrivateMessageBuilder(
            $subject,
            $content,
            $this->getUser(),
            $toUser,
            FormatDateTime::returnFormattedDateTimeForPrivateMessage()
        );

        $entityManager->persist($message->getObject());
        $entityManager->flush();

        return new JsonResponse(
            [
                'message' => JsonResponseMessageTemplate::OK
            ],
            JsonResponse::HTTP_OK
        );
    }
}