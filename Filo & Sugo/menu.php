<h2>Pick your pasta</h2>
<table>
    <tr><th>Code</th><th>Pasta</th><th>Piatto (PHP)</th></tr>
    <?php foreach ($pastas as $code => $pasta) { ?>
        <tr>
            <td><?php echo $code; ?></td>
            <td><?php echo htmlspecialchars($pasta[0]); ?></td>
            <td><?php echo number_format($pasta[1], 2); ?></td>
        </tr>
    <?php } ?>
</table>
