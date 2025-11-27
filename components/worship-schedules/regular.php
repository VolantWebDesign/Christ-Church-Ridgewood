<?php
require_once __DIR__ . '/base.php';

class RegularSchedule extends WorshipSchedule {
    public function __construct() {
        // Add the e-news announcement
        $this->addAnnouncement('Join our <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=56u4hgcab&p=oi&m=1101868815294&sit=qgg7clycb&f=eb928dd1-e1c1-442e-a385-dca142ab5c8e">e-news</a> list for weekly updates!');
        
        $this->scheduleData = [
            ['time' => '8:00 AM', 'description' => 'Holy Eucharist'],
            ['time' => '9:00 AM', 'description' => 'Adult Forum'],
            ['time' => '9:30 AM', 'description' => 'Joy! Children\'s Service (30 minutes)'],
            ['time' => '10:30 AM', 'description' => 'Sunday School'],
            ['time' => '10:30 AM', 'description' => 'Holy Eucharist with Choir']
        ];
    }
}
