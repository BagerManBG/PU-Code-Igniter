<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Notes</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">LoGo</a>
        <div class="navbar-nav float-end">
            <a class="nav-link disabled">Welcome, <?= $user['name'] ?></a>
            <a class="nav-link active" href="/notes">View all notes</a>
            <a class="nav-link" href="/notes/add">Add a note</a>
            <a class="nav-link" href="/logout">Logout</a>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-md-center">

        <div class="col-8">
            <h1>Notes</h1>
            <table class="table">
                <tr>
                    <td scope="col">ID</td>
                    <td scope="col">Title</td>
                    <td scope="col">Content</td>
                </tr>
              <?php
              if ($notes) {
                foreach ($notes as $note) {
                  $id = $note->id;
                  $title = $note->title;
                  $content = $note->content;

                  if (strlen($content) > 80) {
                    $content = substr($content, 0, 80) . '...';
                  }

                  echo
                  "<tr>
                <th scope=\"row\">$id</th>
                <td scope=\"col\"><a href='/notes/view/$id'>$title</a></td>
                <td scope=\"col\">$content</td>
              </tr>";
                }
              }
              ?>
            </table>
        </div>
    </div>
</div>

<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>
</html>
