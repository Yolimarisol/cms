<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create a vacancy</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
    <h1>Create a vacancy</h1>

    <form method = "POST"  action = "/vacancies" class = "container">
    @csrf
        <h1 class = "heading is-1">Create a vacancy</h1>
        <div class = "field">
            <label class = "control" for = "title">Title</label>
            <div class = "control">
                <input type= "text" class= "input" placeholder= "Title">
            </div>
        </div>

        <div class = "field">
            <label class = "control" for = "description">Description</label>
            <div class = "control">
                <textarea name= "description" class= "textarea"></textarea>
            </div>
        </div>

        <div class = "field">
            <label class = "control" for = "responsibilities">Responsibilities</label>
            <div class = "control">
                <textarea name= "responsibilities" class= "textarea"></textarea>
            </div>
        </div>

        <div class = "field">
            <label class = "control" for = "requirements">Requirements</label>
            <div class = "control">
                <textarea name= "requirements" class= "textarea"></textarea>
            </div>
        </div>

        <div class = "field">
            <div class = "control">
                <button type= "sumit" class= "button is-link">Create a vacancy</button>
            </div>
        </div>
    </form>


</body>
</html>
