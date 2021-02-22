<?php

namespace App\Controllers;

use App\Models\NotesModel;
use CodeIgniter\Controller;

class NotesView extends Controller
{
  public function index($nid)
  {
    $session = session();
    $user = $session->get('user');

    $model = new NotesModel();
    $note = $model->load($nid);

    if (!$note || $user['uid'] != $note->uid) {
      return redirect()->to('/notes');
    }

    $data = [
      'user' => $user,
      'note' => $note,
    ];

    return view('notes/notes_view', $data);
  }

}
