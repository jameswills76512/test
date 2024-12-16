<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Next Page...Updated 2</h1>
    <a href="index.php">Home Page</a>

    <form method="post" action="./send.php">
                      <label>  <input
                        type="text"
                        name="name"
                        oninvalid="setCustomValidity('Please Enter Only Alphabets ')"
                        onchange="try{setCustomValidity('')}catch(e){}"
                        pattern="[a-z A-Z]+"
                        placeholder="Full Name"
                        required=""
                        
                      /></label>
                      <label><input
                        oninvalid="setCustomValidity('Please Enter Only Number ')"
                        onchange="try{setCustomValidity('')}catch(e){}"
                        pattern="[0-9]+"
                        type="tel"
                        name="number"
                        maxlength="10"
                        minlength="10"
                        placeholder="Phone Number"
                        required=""
                        
                      /></label>
                      
                      <button  type="submit" name="sub">Submit</button>
                    </form>
    
</body>
</html>
