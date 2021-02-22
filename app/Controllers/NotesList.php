<?php

namespace App\Controllers;

use App\Models\NotesModel;
use CodeIgniter\Controller;

class NotesList extends Controller
{
  public function index()
  {
    $session = session();
    $user = $session->get('user');

    $model = new NotesModel();
    $notes = $model->load_all($user['uid']);

    $data = [
      'user' => $user,
      'notes' => $notes,
    ];

    return view('notes/notes_list', $data);
  }

}
