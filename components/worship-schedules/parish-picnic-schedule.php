<?php

require_once 'base-schedule.php';

class ParishPicnicSchedule extends WorshipSchedule {
    public function __construct() {
        $this->scheduleData = [
            ['time' => '8:00 AM', 'description' => 'Holy Eucharist'],
            ['description' => 'No 9:30 Joy! services on September 7th', 'nowrap' => true],
            ['time' => '10:00 AM', 'description' => 'COMBINED SERVICE, September 7th: Holy Eucharist with Choir', 'nowrap' => true],
            ['time' => '11:00 AM', 'description' => 'Parish Picnic: Food, Fun, and Fellowship!', 'nowrap' => true],
            ['description' => 'Upcoming- September 14th: Meet the Sunday School Teachers!', 'nowrap' => true],
            ['description' => 'Upcoming- September 21st: Sunday School Begins!', 'nowrap' => true]
        ];
    }
}