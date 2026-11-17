<?php require 'header.php'; ?>
<?php include 'menu.php'; ?>

<h2>Build your pasta table</h2>
<form method="POST" action="process.php">
    <label for="customer_name">Name</label>
    <input id="customer_name" name="customer_name" type="text" required>
    <label for="product">First pasta</label>
    <select id="product" name="product">
        <?php foreach ($pastas as $code => $pasta) { ?>
            <option value="<?php echo $code; ?>"><?php echo htmlspecialchars($pasta[0]); ?></option>
        <?php } ?>
    </select>


    <label for="quantity">Number of sets</label>
    <select id="quantity" name="quantity">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>


    <label for="budget">Budget for the whole table (PHP)</label>
    <input id="budget" name="budget" type="number" min="0" step="0.01" required>
    <button type="submit">Plan my table</button>
</form>

<?php include 'footer.php'; ?>
