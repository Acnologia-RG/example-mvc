<form action="<?= URL ?>calendar/editSave/<?= $calendar["id"] ?>" method="POST">
	<p>name</p>
	<input type="text" name="name" required="" min="2"  value="<?= $calendar["person"] ?>" style="text-transform: capitalize;">
	<p>day</p>
	<input type="number" name="day" required="" min="1" max="31" value="<?= $calendar["day"] ?>">
	<p>month</p>
	<input type="number" name="month" required="" min="1" max="12" value="<?= $calendar["month"] ?>">
	<p>year</p>
	<input type="number" name="year" required="" min="4" value="<?= $calendar["year"] ?>">
	<input type="hidden" name="id" required="" value="<?= $calendar["id"] ?>">
	<input type="submit" value="edit">
</form>