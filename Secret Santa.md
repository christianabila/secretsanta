# Secret Santa

## Mechanics
1. Enter a list of participants (must be even numbered)
2. Pair up participants
    - exclude already paired up participants from the pool
    - don't pair a person with themselves
3. Notify each participant of the person they got paired to

Spending limit?

## Requirements
- Mail transmission
- GUI to enter participants

## Technology
- Go? World4you kann aber nur PHP scheinbar

## Assertions
- a participant is never paired with themselves
- all participants are paired up

```php
public function testAllParticipantsPairedUp(): void {
    $participants = [1, 2, 3, 4, 5, 6];
    secretsenta::pairup($participants);
}
```
