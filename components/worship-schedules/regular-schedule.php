<?php

require_once 'base-schedule.php';

class RegularSchedule extends WorshipSchedule {
    public function __construct() {
        $this->scheduleData = [
            ['time' => '8:00 AM', 'description' => 'Holy Eucharist'],
            ['time' => '9:30 AM', 'description' => 'Joy! Children\'s Service (30 minutes)'],
            ['time' => '10:30 AM', 'description' => 'Holy Eucharist with Choir']
        ];
    }
}