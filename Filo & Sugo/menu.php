<h2>Pick your pasta</h2>
<p>Prices per set, in PHP. Choose a serving for one, two, or four guests.</p>
<table>
    <tr>
        <th>Pasta</th>
        <?php foreach ($servings as $serving) { ?>
            <th><?php echo $serving[0] . ' (' . $serving[1] . ')'; ?></th>
        <?php } ?>
    </tr>
    <?php foreach ($pastas as $code => $pasta) { ?>
        <tr>
            <td><?php echo $code . ' - ' . htmlspecialchars($pasta[0]); ?></td>
            <?php
            $price = $pasta[1];
            $sets = 1;
            $service = 'dinein';
            $size = 0;
            while ($size < count($servings)) {
                include 'calculate.php';
                echo '<td>' . number_format($calculation['Pasta'], 2) . '</td>';
                $size++;
            }
            ?>
        </tr>
    <?php } ?>
</table>
<p>Per Due and Famiglia cost less per guest than separate Piatto servings.</p>
