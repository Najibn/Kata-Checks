<?php

require_once "CharacterCommand.php";

class Aeris extends Character {

    protected function getNameValue(): string {
        return "Aeris";
    }

    protected function getHPValue(): int {
        return 409;
    }

    protected function getMPValue(): int {
        return 121;
    }

    protected function getCommands(): array {
        return [CharacterCommand::MAGIC, CharacterCommand::ITEM];
    }
}
