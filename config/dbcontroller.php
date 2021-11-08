<?php
class DBController {
	//��˹���ҵ�ҧ�����Ѻ����������Ͱҹ������
	//private $host = "localhost";	
	//private $user = "root";
	//private $password = "12345678";

	private $host = "us-cdbr-east-04.cleardb.com";	
	private $user = "b5e50a0c60c553";
	private $password = "7c48cdb4";
	private $database = "heroku_7afa5ac21a5620b";
	private $conn;
	
	//���������Ŵ���������͡�ѧ����������Ͱҹ������
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	//�ѧ�������Ѻ����������Ͱҹ������
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	//�ѧ�������Ѻ��ä����������
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row = mysqli_fetch_assoc($result)) {
			$resultset[ ] = $row; 
		}
		if(!empty($resultset))
			return $resultset;
	}
	
	//�ѧ�������Ѻ��ùѺ�ӹǹ��
	function numRows($query) {
		$result = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
}
?>