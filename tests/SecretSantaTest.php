<?php

namespace SecretSanta;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \SecretSanta\SecretSanta
 */
class SecretSantaTest extends TestCase
{
    private $participants;
    private $secretSanta;

    public function setUp(): void
    {
        $anna = new Participant(firstName: 'Anna', mail: 'anna@example.com');
        $ben = new Participant(firstName: 'Ben', lastName: 'Askrin', mail: 'ben@example.com');
        $chris = new Participant(firstName: 'Chris', mail: 'chris@example.com');
        $dave = new Participant(firstName: 'Dave', lastName: 'Benoit', mail: 'dave@example.com');
        $earl = new Participant(firstName: 'Earl', mail: 'ben@example.com');

        $this->participants = [$anna, $ben, $chris, $dave, $earl];

        $this->secretSanta = new SecretSanta($this->participants);
    }

    /**
     * Secret Santa assignments are random and unique.
     *
     * @covers ::assign
     * @return void
     */
    public function testAssign(): void
    {
        $assignment = $this->secretSanta->assign();

        $this->assertCount(count($this->participants), $assignment);

        $this->assertNotEquals($this->participants, $assignment);
        $this->assertNotContainsEquals($this->participants, $assignment);
    }
}
