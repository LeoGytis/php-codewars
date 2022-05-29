<?php

function how_much_i_love_you(int $n): string {
    return ["I love you", "a little", "a lot", "passionately", "madly", "not at all"][($n - 1) % 6];
}  

