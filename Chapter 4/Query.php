<html>
<form action="printinfo.php" method="get">
    Choose your gender: <input type="radio" value="male" name="gender" checked>male
    <input type="radio" value="female" name="gender">female
    <br>
    Write your age:
    <select name="age">
        <option value=1 selected>0-55</option>
        <option value=2>Over 55</option>
    </select>
    <br>
    <input type="submit" value="Send">
</form>
</html>