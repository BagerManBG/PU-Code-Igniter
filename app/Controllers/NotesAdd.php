<?php

namespace App\Controllers;

use App\Entities\Notes;
use App\Models\NotesModel;
use CodeIgniter\Controller;

class NotesAdd extends Controller {
  public function index() {
    $session = session();
    $user = $session->get('user');
    //include helper form
    helper(['form']);
    $data = [
      'user' => $user,
    ];
    echo view('notes/notes_add', $data);
  }

  public function save() {
    $session = session();

    //include helper form
    helper(['form']);
    //set rules validation form
    $rules = [
      'title' => 'required|min_length[3]|max_length[120]',
      'content' => 'required',
    ];

    if ($this->validate($rules)) {
      $model = new NotesModel();
      $notes = new Notes();

      $notes->title = $this->request->getVar('title');
      $notes->content = $this->request->getVar('content');
      $notes->uid = $session->get('user')['uid'];

      $model->save($notes);
      return redirect()->to('/notes');
    } else {
      $data['validation'] = $this->validator;
      echo view('notes/notes_add', $data);
    }
  }

}
