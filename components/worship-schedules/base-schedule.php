<?php
class WorshipSchedule {
    protected $scheduleData = [];
    
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
        </table>
        <?php
    }
}