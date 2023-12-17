<form>
    <table>
        <?php
        echo '<tr>';
        foreach ($titles as $index=>$elem) {
            echo '<th>' . $elem . '</th>';
        }
        echo '</tr>';
        foreach ($products as $index=>$elem) {
            echo '<tr>';
            foreach ($elem as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        } ?>
    </table>
</form>
