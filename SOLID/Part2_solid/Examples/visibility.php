
<?php

class Model{

protected string $email = 'aucun' ;

public function __construct(
    private string $name , 
    protected int $id , 
    public float $age
    )
{
    
}
}

class User extends Model{

protected string $email = 'anomymous@gmail.com';
private string $name = 'Bernard';
}

$model = new Model(name: "Alan", id : 1, age : 45);

class Container {


public function check():void{
    $user = new User(name : 'Sophie', age : 40, id : 10) ;

    print_r($user->age);
    echo PHP_EOL;
    print_r($user->id);

}
}