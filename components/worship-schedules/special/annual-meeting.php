<?php
require_once __DIR__ . '/../base.php';

class AnnualMeetingSchedule extends WorshipSchedule {
    public function __construct() {
        $this->addAnnouncement('Join our <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=56u4hgcab&p=oi&m=1101868815294&sit=qgg7clycb&f=eb928dd1-e1c1-442e-a385-dca142ab5c8e">e-news</a> list for weekly updates!');

        $this->scheduleData = [
            ['description' => 'No 8:00 AM service on November 23rd', 'nowrap' => true],
            ['description' => 'No 9:30 Joy! service on November 23rd', 'nowrap' => true],
            ['time' => '10:30 AM', 'description' => 'COMBINED SERVICE, November 23rd: Holy Eucharist with Choir', 'nowrap' => true],
            ['time' => '10:30 AM', 'description' => 'Sunday School', 'nowrap' => true],
            ['time' => '11:30 AM', 'description' => 'Annual Meeting in the Great Hall', 'nowrap' => true],
        ];
    }
}
