<?php include __DIR__.'/calc.php'; ?>
<form action="/index.php" method="POST">
    <label>
        <input type="text" name="x">
    </label>
    <label>
        <select name="operation">
            <option value="sum">+</option>
            <option value="diff">-</option>
            <option value="division">/</option>
            <option value="mult">*</option>
        </select>
    </label>
    <label>
        <input type="text" name="y">
    </label>
    <button type="submit">Выполнить действие</button>
</form>
