<?php

namespace SecretSanta;

/**
 * The Secret Santa thingy.
 */
class SecretSanta
{
    /**
     * The Secret Santa participants
     *
     * @var Participant[]
     */
    private $participants;

    public function __construct(array $participants)
    {
        $this->participants = $participants;
    }

    /**
     * Randomly and uniquely assign participants to other participants of Secret Santa.
     *
     * @return Participants[]
     */
    public function assign(): array
    {
        $assigned = []; // Container for the Secret Santa assignments.

        $availableKeys = array_keys($this->participants); // A pool of available keys for Secret Santa assignment.

        // Random unique assignment algorithm.
        $participantsCount = count($this->participants);
        for ($i = 0; $i < $participantsCount; $i++) {
            // Find a participant's key that is not equal the currently handled participant's key.
            while (($randomSelection = $availableKeys[$key = rand(0, count($availableKeys) - 1)]) == $i);
            unset($availableKeys[$key]); // Remove the found participant key from the pool of available keys.
            $availableKeys = array_values($availableKeys); // Basically, reindex the array.
            $assigned[] = $this->participants[$randomSelection];
        }

        return $assigned;
    }
}
