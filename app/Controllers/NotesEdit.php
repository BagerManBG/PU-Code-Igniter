<?php

namespace App\Controllers;

use App\Entities\Notes;
use App\Models\NotesModel;
use CodeIgniter\Controller;

class NotesEdit extends Controller
{
  public function index($id)
  {
    $session = session();
    $user = $session->get('user');

    $model = new NotesModel();
    $note = $model->load($id);

    if (!$note || $user['uid'] != $note->uid) {
      return redirect()->to('/notes');
    }

    $data = [
      'user' => $user,
      'note' => $note,
    ];

    //include helper form
    helper(['form']);
    echo view('notes/notes_edit', $data);
  }

  public function save()
  {
    $session = session();
    $user = $session->get('user');

    //include helper form
    helper(['form']);
    //set rules validation form
    $rules = [
      'title' => 'required|min_length[3]|max_length[120]',
      'content' => 'required',
    ];

    if ($this->validate($rules)) {
      $model = new NotesModel();
      $note = $model->load($this->request->getVar('id'));

      if (!$note || $user['uid'] != $note->uid) {
        return redirect()->to('/notes');
      }

      $note->title = $this->request->getVar('title');
      $note->content = $this->request->getVar('content');

      $model->update($note->id, $note);
      return redirect()->to('/notes/view/' . $note->id);
    } else {
      $data['validation'] = $this->validator;
      echo view('notes/notes_edit', $data);
    }

  }

}
