<?php
// Cloud.php

require_once "CharacterCommand.php";

class Cloud extends Character {

    protected function getNameValue(): string {
        return "Cloud";
    }

    protected function getHPValue(): int {
        return 516;
    }

    protected function getMPValue(): int {
        return 57;
    }

    protected function getCommands(): array {
        return [CharacterCommand::ATTACK, CharacterCommand::MAGIC, CharacterCommand::ITEM];
    }
}
