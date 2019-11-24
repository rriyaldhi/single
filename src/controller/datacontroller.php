<?php 
  
  namespace controller;
  use model\Data;

  session_start();

  class DataController extends Controller 
  {

    public function getList()
    {
      $data = Data::all();
      echo json_encode($data);
    }

    public function get()
    {
      
      $query = $_REQUEST['query'];
      
      $data = Data::where('key', 'LIKE', '%' . $query . '%');

      if (count($data) > 0)
      {
        echo json_encode($data);
      }
      else
        echo 0;
    }

    public function add()
    {
      $data = new Data();
      $data->key = $_REQUEST['key'];
      $data->value = $_REQUEST['value'];
      $data->save();
    }

    public function update()
    {
      $data = new Data;
      $data->value = $_REQUEST['value'];
      $data->update();
    }

    public function delete()
    {
      Data::delete($_REQUEST['id']);
    }
   
  }
?>

