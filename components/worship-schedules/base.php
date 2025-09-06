<?php

abstract class WorshipSchedule {
    protected $scheduleData = [];
    protected $announcements = [];
    
    public function addAnnouncement($announcement, $nowrap = false) {
        $this->announcements[] = [
            'description' => $announcement,
            'nowrap' => $nowrap
        ];
    }
    
    public function render() {
        ?>
        <h3>Sunday Worship</h3>
        <table class="table table-striped">
            <?php foreach ($this->scheduleData as $item): ?>
                <tr>
                    <td align="right" <?php echo isset($item['nowrap']) ? 'nowrap' : ''; ?>>
                        <?php if (isset($item['time'])): ?>
                            <strong><?php echo htmlspecialchars($item['time']); ?></strong>
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($item['description']); ?></td>
                </tr>
            <?php endforeach; ?>
            
            <?php if (!empty($this->announcements)): ?>
                <tr><td colspan="2"><hr/></td></tr>
                <?php foreach ($this->announcements as $announcement): ?>
                    <tr>
                        <td></td>
                        <td <?php echo $announcement['nowrap'] ? 'nowrap' : ''; ?>>
                            <?php echo $announcement['description']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
        <?php
    }
}
