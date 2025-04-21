<?php

//airis
//Baret
//cloud

require_once "CharacterCommand.php";

abstract class Character {
    protected string $name;
    protected int $hp;
    protected int $mp;
    protected array $commands;     // array of Command enums

    public function __construct(string $name, int $hp, int $mp, array $commands) {
        $this->name = $name;
        $this->hp = $hp;
        $this->mp = $mp;
        $this->commands = $commands;
    }

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
    

    public static function getLowestCharacterHP() {
        //
    }
}
