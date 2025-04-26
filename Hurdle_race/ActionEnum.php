<?php

require_once 'TrackAreaEnum.php';
require_once 'ResultsEnum.php';

enum ActionEnum: string {
    case RUN = 'run';
    case JUMP = 'jump';

    public function evaluate(TrackAreaEnum $area): ResultsEnum {
        return match ([$this, $area]) {
            [self::RUN,  TrackAreaEnum::GROUND] => ResultsEnum::CORRECT_GROUND,
            [self::JUMP, TrackAreaEnum::HURDLE] => ResultsEnum::CORRECT_HURDLE,
            [self::JUMP, TrackAreaEnum::GROUND] => ResultsEnum::INCORRECT_JUMP,
            [self::RUN,  TrackAreaEnum::HURDLE] => ResultsEnum::INCORRECT_RUN,
            default => throw new Exception("Invalid combination."),
        };
    }
}



?>