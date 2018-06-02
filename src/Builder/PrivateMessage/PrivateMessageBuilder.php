<?php
/**
 * This file is part of ESO system.
 *
 * (c) ESO 2018
 *
 * If you want, you can see license file at https://github.com/ZPOSO/ESO/LICENSE
 *
 * Date: 01.06.18
 * Time: 12:57
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace App\Builder\PrivateMessage;

use App\Entity\PrivateMessage;
use App\Entity\User;

class PrivateMessageBuilder
{
    private $topic;
    private $content;
    private $fromUser;
    private $toUser;
    private $sendDateTime;

    public function __construct(
        string $topic,
        string $content,
        User $fromUser,
        User $toUser,
        string $sendDateTime
    ) {
        $this->topic        = $topic;
        $this->content      = $content;
        $this->fromUser     = $fromUser;
        $this->toUser       = $toUser;
        $this->sendDateTime = $sendDateTime;
    }

    public function getObject(): PrivateMessage
    {
        return new PrivateMessage(
            $this->topic,
            $this->content,
            $this->fromUser,
            $this->toUser,
            $this->sendDateTime
        );
    }
}