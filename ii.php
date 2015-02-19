<?php
echo "YES";
 class Nmmd{

 	public function funAr($zn='')
 	{
 		$zn = $zn."-Прошли функцию"
 		return $zn;
 	}

 	public function funBr($value='')
 	{
 		$b=$this->funAr("Funct1 add ->");
 		$value = $b.$value."YES!";
 		return $value;
 	}
 }