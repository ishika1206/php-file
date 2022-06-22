<?php
class emp
{
	public $a,$b,$c;
	function sum()
	{
	$this->c=$this->a+$this->b;
	return $this->c;
	}
	function mul()
	{
	$this->c=$this->a*$this->b;
	return $this->c;
	}
}
$emp_info=new emp();
$emp_info->a="siddhant";
$emp_info->b="gulati";
$sal=new emp();
$sal->a=10000;
$sal->b=45000;
echo "info1<br>",$emp_info->a;
echo"<br>";
echo $sal->a;
echo"<br>";
echo "info2<br>" ,$emp_info->b;
echo"<br>";
echo $sal->b;
?>