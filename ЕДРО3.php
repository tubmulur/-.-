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
/*require_once('/home/EDRO.SetOfTools/System/0.Functions/0.strNDigit.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
require_once('/home/ЕДРО:ПОЛИМЕР/020.Полимер.ЕДРО/Если.php');
//require_once('/home/ЕДРО:ПОЛИМЕР/020.Полимер.ЕДРО/020.Если/020.Действие/Действие.php');
//require_once('/home/ЕДРО:ПОЛИМЕР/020.Полимер.ЕДРО/020.Если/020.Действие/020.Реальность/Реальность.php');
//require_once('/home/ЕДРО:ПОЛИМЕР/020.Полимер.ЕДРО/020.Если/020.Действие/020.Реальность/020.Объект/Объект.php'); 
/*
$мЕДРО	=array(
		'Граф'	=>array(
			'1.Зармер размеров экрана'=>array(
				'1.Администратор'=>array(
					'',
						),
				'2.Cлушатель'	=>array(
					'',
						'',
							),
						),
					),
		'Процесс'=>array(
			''
					),
		);
*/
$мЕДРО	=/*Е*/
	array(
	'Граф'	=>/*Д*/
		array(
		'1.КонтрольИсполненияСобытия'=>
			/*Р*/
			array(
			'0.Все'=>/*О*/
				array(
				'/home/EDRO/1.Event/Event.php',
				'/home/EDRO/1.Event/EventKIIMMembrane.php'
				),
			),
		),
		array(
		'2.ЗармерРазмеровЭкрана'=>
			array(
			'0.Все'=>array(
				'/home/EDRO/2.Design/Design.php',
				'/home/EDRO/2.Design/DesignKIIMMembrane.php'
				),
			),
		),
		array(
		'3.ПроверкаСети' =>
			array(
			'0.Все'=>array(
				'/home/EDRO/3.Reality/Reality.php',
				'/home/EDRO/3.Reality/RealityKIIMMembrane.php'
				),
			),
		),
		array(
		'4.КонтрольНаличияОбъекта' =>
			array(
			'0.Все'=>
				array(
				'/home/EDRO/4.Objects/Objects.php',
				'/home/EDRO/4.Objects/ObjectsKIIMMembrane.php'
				),
			),
		),
	='Процесс'
		=>''



// '[П]=Синтез[ЕДРО]'
$оЕДРО		=ЕДРО::оСинтез($мЕДРО);



class ЕДРО
	{
	//public	$оЕДРО;
	protected $сПроект	='HiFiIntelligentClub';
	public function __construct($_мЕДРО)
		{

		
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
		$оЕДРО 	= new ЕДРО();
		$оЕсли	= new Если($оЕДРО);
		return $оЕДРО;
		}
	}
?> 
