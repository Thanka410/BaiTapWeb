<!DOCTYPE html">
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <table<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <style>
       body {
    font-family: Arial, Helvetica, sans-serif;
}
main {
    display: block;
    width: 450px;
    margin: 0 auto;
    padding: 1em;
    background: white;
    border: 2px solid navy;
}
h1 {
    margin-top: 0;
    color: navy;
    text-align:center;
}
label {
    width: 10em;
    float: left;
    padding-right: 1em;
    padding-bottom: .5em;
}
#a input {
    float: left;
    width: 15em;
    margin-bottom: .5em;
}
#buttons input {
    float: left;
    margin-bottom: .5em;
}
br {
    clear: left;
}
.error {
    color: red;
    font-weight: bold;
}
    </style>
    <link rel="stylesheet" type="text/css" href="main.css">

    <main>
        <form action="result_FutureValue.php" method="post">
            <h1>Future Value Calculator</h1>

            <div id="a">
                <label>Investment Amount:</label>
                <input type="text" name="investment">
                <br>
    
                <label>Yearly Interest Rate:</label>
                <input type="text" name="interest_rate">
                <br>
    
                <label>Number of Years:</label>
                <input type="text" name="years">
                <br>
            </div>
    
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>
    
        </form>
    </main>
     
    </head>
    </html>>
   
</body>
</html>