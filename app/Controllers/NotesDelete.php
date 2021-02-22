<?php

namespace App\Controllers;

use App\Models\NotesModel;
use CodeIgniter\Controller;

class NotesDelete extends Controller
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

    $model->delete($nid);

    return redirect()->to('/notes');
    return view('notes/notes_view', $data);
  }

}
