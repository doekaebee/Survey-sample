<!doctype html>
<html>
<head>
  <title>SurveyJackass</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <meta name="description" content="main_js_php" charset= "utf-8"/>
</head>

<body>

<h1>Survey Form!</h1>
<div id = 'container'>
<form action='codingdojo' method='post'>
    <p id = 'name'><label>Name:</label><input type='text' name='full_name'></p>
    
    <p id = 'location'>
    <label>Dojo Location:</label><select name='location'>
	<option value= ''></option>
	<option value= 'San_Francisco'>San Francisco</option>
	<option value= 'Los_Angeles'>Los Angeles</option>
	<option value= 'Seattle'>Bellevue</option>
	<option value= 'Matrix'>Yo Momma's Place</option>
	</select></p>

    <p id = 'language'>
    <label>Favorite Language:</label><select name='language'>
	<option value= ''></option>
	<option value= 'Java'>Java</option>
	<option value= 'Ruby_on_Rails'>Ruby On Rails</option>
	<option value= 'Korean'>Korean</option>
	<option value= 'Chinese'>Chinese</option>
	<option value= 'Fake'>Gibberish</option>
	</select></p>
    
    <p id = 'box'>
    <label>Comment (optional):</label><br> <textarea name = "comment_box" rows = "12" cols = "65">Please submit comments here!</textarea></p>

    
    <p id = 'button'><input type='submit' value='Submit'></p>
</form>
</div>


</body>


</html>