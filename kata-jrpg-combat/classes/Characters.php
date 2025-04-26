<?php

require_once "CharacterCommand.php";

abstract class Character {
    protected string $name;
    protected int $hp;
    protected int $mp;
    protected array $commands;     // array of Command enums

    public function __construct() {
        $this->name     = $this->getNameValue();
        $this->hp       = $this->getHPValue();
        $this->mp       = $this->getMPValue();
        $this->commands = $this->getCommands();
    }

    abstract protected function getNameValue(): string;
    abstract protected function getHPValue(): int;
    abstract protected function getMPValue(): int;
    abstract protected function getCommands(): array;


    public function useCommand(CharacterCommand $command): void {
        $canUse = false;
        foreach ($this->commands as $availableCommand) {
            if ($availableCommand === $command) {
            $canUse = true;
            break;
            }
        }
    
        if ($canUse) {
            $message = $command->getMessage();
            echo "{$this->name} {$message}" . PHP_EOL;
        } else {
            echo "{$this->name} can't use that command." . PHP_EOL;
        }
    }
    

    public function getHP(): int {
        return $this->hp;
    }

    public function getName(): string {
        return $this->name;
    }

    public static function getLowestCharacterHP(array $characters): Character {
        $lowest = $characters[0];
    
        foreach ($characters as $character) {
            if ($character->getHP() < $lowest->getHP()) {
                $lowest = $character;
            }
        }
    
        return $lowest;
    }

}
