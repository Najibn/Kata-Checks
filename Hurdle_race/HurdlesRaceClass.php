<?php

require_once 'ActionEnum.php';
require_once 'TrackAreaEnum.php';
require_once 'ResultsEnum.php';

class HurdlesRace
{

    private array $actions;
    private string $track;
    private array $completedTrack = [];
    private bool $success         = true;

    public function __construct(array $actions, string $track)
    {
        $this->actions = $actions;
        $this->track   = $track;
    }

    public function run_race(): bool
    {

        $actionEnums = $this->convertActions($this->actions);
        $trackAreas  = $this->convertTrack($this->track);

        foreach ($actionEnums as $i => $action) {
            $section = $trackAreas[$i];
            $result  = $action->evaluate($section);

            $this->completedTrack[] = $result->value;

            if (! $result->isCorrect()) {
                $this->success = false;
            }
        }

        return $this->success;
    }

    public function getFinalTrack(): string
    {
        return implode('', $this->completedTrack);
    }

    public function wasSuccessful(): bool
    {
        return $this->success;
    }

    private function convertActions(array $actions): array
    {
        $convertedActions = [];

        foreach ($actions as $action) {
            $convertedActions[] = ActionEnum::from($action);
        }

        return $convertedActions;
    }

    private function convertTrack(string $track): array
    {
        $trackAreas = [];
        foreach (str_split($track) as $c) {
            $trackAreas[] = TrackAreaEnum::from($c);
        }
        return $trackAreas;
    }
}

?>     