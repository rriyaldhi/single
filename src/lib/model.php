<?php
  namespace lib;
  use lib\connection;
  class Model
  {
    protected $table;
    public static function all()
    {
      $model = new static;
      $query = 'SELECT * FROM ' . $model->table;
      $queryResult = Connection::$connection->query($query);
      $result = array();
      while($row = $queryResult->fetch_assoc())
      {
        array_push($result, $row);
      }
      return $result;
    }
    public static function where($column, $operator, $param)
    {
      $model = new static;
      $query = 'SELECT * FROM ' . $model->table . ' WHERE ' . $column . ' ' . $operator . " '" . $param . "'";
      $queryResult = Connection::$connection->query($query);
      $result = array();
      while($row = $queryResult->fetch_assoc())
        array_push($result, $row);
      return $result;
    }
    public static function query($query)
    {
      $queryResult = Connection::$connection->query($query);
      $result = array();
      while($row = $queryResult->fetch_assoc())
        array_push($result, $row);
      return $result;
    }
    public function save()
    {
      $i = 0;
      $query = 'INSERT INTO ' . $this->table . '(id';
      foreach (get_object_vars($this) as $key => $value)
      {
        if ($i > 0)
          $query .= ', ' . $key;
        $i++;
      }
      $query .= ') VALUES(null';
      $i = 0;
      foreach (get_object_vars($this) as $key => $value)
      {
        if ($i > 0)
          $query .= ", '" . $value . "'";
        $i++;
      }
      $query .= ')';
      Connection::$connection->query($query);
    }
    public static function delete($id)
    {
      $model = new static;
      $query = 'DELETE FROM ' . $model->table . ' WHERE id = ' . $id;
      Connection::$connection->query($query);
    }
    public function update()
    {
      $query = "UPDATE " . $this->table . " SET ";
      $i = 0;
      foreach (get_object_vars($this) as $key => $value)
      {
        if ($i > 1)
        {
          $query .= $key . ' = "' . $value . '"';
          if ($i < count(get_object_vars($this)) - 1)
            $query .= ", ";
        }
        $i++;
      }
      $query .= " WHERE id = '" . $this->id . "'";
      Connection::$connection->query($query);
    }
  }
?>