 <?php

class QueryBuilder
{  

	protected $pdo;

	public function __construct($pdo)
	{

		$this->pdo=$pdo;


	}

public function selectAll($table)
{


$statement=$this->pdo->prepare("select * from {$table}");
     
$statement->execute();

return $statement->fetchAll(PDO::FETCH_CLASS);


	
}


public function insert($table,$parameters){




$sql=sprintf(
	

'insert into %s (%s) values (%s)',

$table,
implode(',',array_keys($parameters)),
':'.implode(',:',array_keys($parameters))
	
);



try {
$statement=$this->pdo->prepare($sql);


$statement->bindValue('name','name');


// $statement->bindParam(':name','nalaka');

$statement->execute();
	
} catch (Exception $e) {


	die('whoops, something went wrong');
	
}






} 


public function delete($table,$parameters){


$sql=sprintf(
	

'DELETE FROM %s WHERE (%s)=(%s)',

$table,
implode(',',array_keys($parameters)),
':'.implode(',:',array_keys($parameters))
	
);



try {
$statement=$this->pdo->prepare($sql);

$statement->execute($parameters);
	
} catch (Exception $e) {


	die('whoops, something went wrong');
	
}



}



}