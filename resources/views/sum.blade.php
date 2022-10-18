<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        @csrf
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Number a: " name="numA">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Number b: " name="numB">
        </div>
        <button type="submit" class="btn btn-primary">Enter</button>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Result" disabled="" value="<?php if(isset($sum)) echo $sum; ?>">
        </div>
    </form>
</body>

</html>