<?php
        /*
© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2020 [25.06.2020]
//////|
|_|//|/ /\
  //|/<  **>
 //|/   Jl
//////| --------------->
||||||/
Благословенный стиль Упрощающий Проверку и Чтение Программы Благословенный.УПИиЧ*/
require_once('/home/EDRO.SetOfTools/System/0.Functions/0.strNDigit.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
require_once('/home/ЕДРО:ПОЛИМЕР/020.Полимер.ЕДРО/1.Если.php');
require_once('/home/ЕДРО:ПОЛИМЕР/020.Полимер.ЕДРО/020.Действие/2.Действие.php');
require_once('/home/ЕДРО:ПОЛИМЕР/020.Полимер.ЕДРО/020.Действие/020.Реальность/3.Реальность.php');
require_once('/home/ЕДРО:ПОЛИМЕР/020.Полимер.ЕДРО/020.Действие/020.Реальность/020.Объект/4.Объект.php'); 
//'[П]=Синтез[ЕДРО]'
$оПолимер				=ЕДРО::оСинтез();
print_r($оПолимер);
          
class Полимер
	{
	public	$оЕДРО;
	public function __construct()
		{
		print_r($this->оЕДРО);
		$this->оЕДРО=new Если();
		}
	public static function оСинтез()
		{
		$оПолимер = new ЕДРО();
		return $оПолимер;
		}
	}
?> 
