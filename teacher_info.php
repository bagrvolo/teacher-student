<h1>Hello Teacher</h1>

<form action="teacher_profile.php" method="post">
    <label for="text">What subjects do you teach: </label>
    <textarea name="subjects" id="text" cols="25" rows="4" required></textarea>
    <br> <br>
    <label for="info">Info about yourself: </label>
    <textarea name="info" id="info" cols="40" rows="10" required></textarea>
    <br> <br>
    <label for="data">Next working day in: </label>
    <input id="data" type="date" name="data" required>
    <br> <br>
    <input type="submit">
</form>
