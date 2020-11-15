#!/usr/bin/php
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
require_once('/home/ЕДРО:ПОЛИМЕР/о2о.Если/Если.php');
require_once('/home/ЕДРО:ПОЛИМЕР/о2о.Если/о2о.Действие/Действие.php');
require_once('/home/ЕДРО:ПОЛИМЕР/о2о.Если/о2о.Действие/о2о.Реальность/Реальность.php');
require_once('/home/ЕДРО:ПОЛИМЕР/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект/Объект.php'); 

print_r($argv);

$оЕДРО	=new ЕДРО($argv);
class ЕДРО
	{
	//public	$оЕДРО;
	protected $сПроект	='HiFiIntelligentClub';
	protected $оЕсли	;
	protected $оДействие	;
	protected $оРеальность	;
	protected $оОбъект	;
	public function __construct($_мЕДРО)
		{

		//$this->оЕсли		= new Если;
		//$this->оДействие	= new Действие;
		//$this->оРеальность	= new Реальность;
		//$this->оОбъект		= new Объект;
		//$мЕсли=scandir('/home/ЕДРО:ПОЛИМЕР');
		/*
		foreach($мЕсли as $сЕсли)
			{
			if($сЕсли!='020.Полимер.ЕДРО'&&
				$сЕсли!='020.Синтез.ЕДРО'&&
				$сЕсли!='.'&&
				$сЕсли!='..'&&
				$сЕсли!='Полимер.php'&&
				$сЕсли!='Синтез.php')
				{
				echo $сЕсли;
				echo '<br/>';
				}
			}
		*/
		//print_r($this->оЕДРО);
		//$this->оЕДРО=new Если();
		}
	public static function оСинтез()
		{
		//$оЕДРО 	= new ЕДРО();
		//$оЕсли	= new Если($оЕДРО);
		//return $оЕДРО;
		}
	}
?> 
