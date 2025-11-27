<?php
require_once __DIR__ . '/../base.php';

class ParishPicnicSchedule extends WorshipSchedule {
    public function __construct() {
        $this->addAnnouncement('Join our <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=56u4hgcab&p=oi&m=1101868815294&sit=qgg7clycb&f=eb928dd1-e1c1-442e-a385-dca142ab5c8e">e-news</a> list for weekly updates!');

        $this->scheduleData = [
            ['time' => '8:00 AM', 'description' => 'Holy Eucharist'],
            ['description' => 'No 9:30 Joy! services on September 21st', 'nowrap' => true],
            ['time' => '10:00 AM', 'description' => 'COMBINED SERVICE, September 21st: Holy Eucharist with Choir', 'nowrap' => true],
            ['time' => '11:00 AM', 'description' => 'Parish Picnic: Food, Fun, and Fellowship!', 'nowrap' => true],
        ];
    }
}
