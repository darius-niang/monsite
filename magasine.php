<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css1.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Magasine</title>
</head>
<body>
<div id="flipbook">
    <div class="hard"> Turn.js </div> 
    <div class="hard"></div>
    <div> Page 1 </div>
    <div> Page 2 </div>
    <div> Page 3 </div>
    <div> Page 4 </div>
    <div class="hard"></div>
    <div class="hard"></div>
</div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E</script>
 <script src="turnjs4\lib\turn.min.js"></script>
 <script src="app.js"></script>
    <script>
        $("#flipbook").turn({
            width: 400,
            height: 300,
            autoCenter: true
        });
    </script>
</body>
</html>