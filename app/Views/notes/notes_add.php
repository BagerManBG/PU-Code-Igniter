<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Add note</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">LoGo</a>
        <div class="navbar-nav float-end">
            <a class="nav-link disabled">Welcome, <?= $user['name'] ?></a>
            <a class="nav-link" href="/notes">View all notes</a>
            <a class="nav-link active" href="/notes/add">Add a note</a>
            <a class="nav-link" href="/logout">Logout</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1>Create note</h1>
            <?php if(isset($validation)):?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif;?>
            <form action="/notesadd/save" method="post">
                <div class="mb-3">
                    <label for="InputForTitle" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="InputForTitle" value="<?= set_value('title') ?>">
                </div>
                <div class="mb-3">
                    <label for="InputForContent" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="InputForContent" cols="30" rows="10"><?= set_value('content') ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>

<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
