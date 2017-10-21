<form action="../nflpickspool/writeOddsToDb.php" method="POST">
  <h3>Select Week</h3>
  <input list="weekList" name="week">
  <datalist id="weekList">
    <option value="Preseason">
    <option value="1">
  </datalist>
<h3>Enter Lines</h3>
<TABLE id="dataTable" border="1">
<datalist id="awayList">
    <option value="Kac">
    <option value="New">
</datalist>
<datalist id="homeList">
    <option value="Kac">
    <option value="New">
</datalist>
<datalist id="favoriteList">
    <option value="Kac">
    <option value="NEW">
</datalist>
<tr>
<th>Date</th>
<th>Time</th>
<th>Away</th>
<th>Home</th>
<th>Favorite</th>
<th>Spread</th>
<th>ML</th>
</tr>
<tr>
<th><INPUT type="datetime-local"	name="date[]"/></th>
<th><INPUT type="time" 			name="time[]"/></th>
<th><INPUT list="awayList" 		name="away[]"/></th>
<th><INPUT list="homeList" 		name="home[]"/></th>
<th><INPUT list="favoriteList" 		name="favorite[]"/></th>
<th><INPUT type="number" 		name="spread[]"/></th>
<th><INPUT type="number" 		name="ml[]"/></th>
</tr>
</TABLE>
<input type="submit" value="Submit">
</form>
