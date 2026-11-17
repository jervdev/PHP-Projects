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

    <label for="size">Serving size</label>
    <select id="size" name="size">
        <?php foreach ($servings as $key => $serving) { ?>
            <option value="<?php echo $key; ?>"><?php echo $serving[0] . ' - serves ' . $serving[1]; ?></option>
        <?php } ?>
    </select>

    <label for="quantity">Number of sets</label>
    <select id="quantity" name="quantity">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
    </select>

    <label for="service">Dining option</label>
    <select id="service" name="service">
        <option value="dinein">Dine-in</option>
        <option value="takeaway">Takeaway</option>
    </select>

    <label for="budget">Budget for the whole table (PHP)</label>
    <input id="budget" name="budget" type="number" min="0" step="0.01" required>
    <button type="submit">Plan my table</button>
</form>
<p>Takeaway packaging is PHP 15 per set, for any serving size.</p>
<?php include 'footer.php'; ?>
