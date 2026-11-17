<?php
require_once __DIR__ . '/../base.php';

class AnnualMeetingSchedule extends WorshipSchedule {
    public function __construct() {
        $this->addAnnouncement('Join our <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=56u4hgcab&p=oi&m=1101868815294&sit=qgg7clycb&f=eb928dd1-e1c1-442e-a385-dca142ab5c8e">e-news</a> list for weekly updates!');

        $this->scheduleData = [
            ['time' => '8:00 AM', 'description' => 'Holy Eucharist'],
            ['description' => 'No 9:30 AM JOY! service on November 22nd'],
            ['time' => '10:00 AM', 'description' => 'COMBINED SERVICE, November 22nd: Holy Eucharist with Choir'],
            ['time' => 'After Service', 'description' => 'Annual Meeting in the Great Hall (immediately following the 10:00 AM service)'],
            ['time' => 'After Service', 'description' => "Children's Activities in the Guild Room: Food, Christmas Pageant intro/overview, and a kid-friendly movie during the Annual Meeting"],
        ];
    }
}
