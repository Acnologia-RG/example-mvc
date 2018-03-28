<form action="<?= URL ?>calendar/createSave" method="POST">
	<p>name</p>
	<input type="text" name="name" placeholder="jan joris droplul" required="" min="2" style="text-transform: capitalize;">
	<p>day</p>
	<input type="number" name="day" placeholder="1" required="" min="1" max="31">
	<p>month</p>
	<input type="number" name="month" placeholder="1" required="" min="1" max="12">
	<p>year</p>
	<input type="number" name="year" placeholder="1968" required="" min="4"><br>
	<input type="submit" value="create">
</form>