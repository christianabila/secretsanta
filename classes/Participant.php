<?php

namespace ChristianAbila\SecretSanta;

class Participant
{
    /**
     * The participant's first name
     *
     * @var string
     */
    private $firstName;

    /**
     * The participant's last name
     *
     * @var string
     */
    private $lastName;

    /**
     * The participant's eMail address
     *
     * @var string
     */
    private $mail;

    public function __construct(string $mail, string $firstName, string $lastName = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->mail = $mail;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getMailAddress(): string
    {
        return $this->mail;
    }
}
