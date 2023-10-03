<?php

const TOTAL = 80;
const MARKERS = 23;
const PENCILS = 40;
const PAINTS = TOTAL - (MARKERS + PENCILS);

echo "На школьной выставке ".TOTAL." рисунков. ". MARKERS ." из них выполнены фломастерами, ". PENCILS ." карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?";
echo "<br>";
echo "Ответ: ". PAINTS ." рисунков выполнено красками.";
