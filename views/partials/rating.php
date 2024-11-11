<dl class="skill-rating">
    <dt><?php echo $text ?></dt>
    <dd>
        <?php
        if ($stars >= 1) {
            echo "<i class='star-primary'>&#128970</i>";
        } else {
            echo "<i class='star-secondary'>&#128970</i>";
        }
        if ($stars >= 2) {
            echo "<i class='star-primary'>&#128970</i>";
        } else {
            echo "<i class='star-secondary'>&#128970</i>";
        }
        if ($stars >= 3) {
            echo "<i class='star-primary'>&#128970</i>";
        } else {
            echo "<i class='star-secondary'>&#128970</i>";
        }
        if ($stars >= 4) {
            echo "<i class='star-primary'>&#128970</i>";
        } else {
            echo "<i class='star-secondary'>&#128970</i>";
        }
        if ($stars >= 5) {
            echo "<i class='star-primary'>&#128970</i>";
        } else {
            echo "<i class='star-secondary'>&#128970</i>";
        }
        ?>
    </dd>
</dl>