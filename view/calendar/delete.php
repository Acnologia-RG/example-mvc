<h1> do you want to delete <?= $calendar["person"] ?> ? </h1>
<form action="<?= URL ?>calendar/delete/<?= $calendar["id"] ?>" method='post'>
<input type="submit" name="yes" value="yes">
<input type="submit" name="no" value="no">
</form>