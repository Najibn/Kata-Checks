<?php

require_once "CharacterCommand.php";

class Barret extends Character {

    protected function getNameValue(): string {
        return "Barret";
    }

    protected function getHPValue(): int {
        return 572;
    }

    protected function getMPValue(): int {
        return 30;
    }

    protected function getCommands(): array {
        return [CharacterCommand::ATTACK, CharacterCommand::ITEM];
    }
}
