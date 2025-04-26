<?php

require_once "CharacterCommand.php";
require_once __DIR__ . '/classes/Characters.php';
require_once __DIR__ . '/classes/Cloud.php';
require_once __DIR__ . '/classes/Baret.php';
require_once __DIR__ . '/classes/Aeris.php';

$cloud  = new Cloud();
$barret = new Barret();
$aeris  = new Aeris();

$characters = [$cloud, $barret, $aeris];

// Example usage
$cloud->useCommand(CharacterCommand::ATTACK);  // Cloud will attack!
$aeris->useCommand(CharacterCommand::DEFEND);  // Aeris cant use the command.

$lowest = Character::getLowestCharacterHP($characters);
echo "Character with lowest HP (Health Power!): " . $lowest->getName();  // Aeris
