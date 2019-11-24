### Single

Simple single-page MVC PHP framework.

#### Example Usage

### Connection
```
    public static $HOST = 'host';
    public static $USERNAME = 'username';
    public static $PASSWORD = 'password';
    public static $DB = 'database';
```
Edit connection.php according to the server setup.

### Model
```
  class Data extends Model
  {
  
    protected $table = 'data';
  
  }
```
Create model by extending Model class and put the table name accordingly.

### Controller
```
class ViewController extends Controller
  {
    public function index()
    {
      View::render('index');
    }
  }
```
Create controller by extending Controller class and add function for a single route. (i.e 1 function for 1 route)

### View
Create necessary views which can be rendered by the controller.

### Route
```
  $route = array
  (
    'index' => 'ViewController/index',
    'getlist' => 'DataController/getList',
    'get' => 'DataController/get',
    'add' => 'DataController/add',
    'update' => 'DataController/update',
    'delete' => 'DataController/delete',
  );
```
Provide routes with the following format: ControllerClass/method.