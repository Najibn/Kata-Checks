<?php

enum CharacterCommand: string {

    case ATTACK = 'has attacked!';
    case DEFEND = 'is defending!'; 
    case MAGIC  = 'casts a spell!';
    case ITEM   = 'uses an item!';

    public function getMessage(): string {
        return $this->value;
    }

}
