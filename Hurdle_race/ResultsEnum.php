
<?php                  

enum ResultsEnum: string {
    case CORRECT_GROUND     =   '_';
    case CORRECT_HURDLE     =   '|';
    case INCORRECT_JUMP     =   'x';
    case INCORRECT_RUN      =   '/';

    public function isCorrect(): bool {
        return $this === self::CORRECT_GROUND || $this === self::CORRECT_HURDLE;
    }
}

 ?>
