<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h3>Create a web page that includes a button and a paragraph 
element. When the button is clicked, use jQuery to change 
the text of the paragraph to a predefined message.</h3>
<script>
    $(document).ready(function(){
       $("button").click (function(){
        $("p").click(Hello my name is Saaddii);
       })
    });
    
</script>
<p>Hello my name is Anusheh</p>
</body>
</html>