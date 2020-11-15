<?php
$_SERVER['REQUEST_URI']='/';
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
require_once('/home/EDRO.SetOfTools/System/0.Functions/1.RequestsFilter.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/0.KIIM.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/1.objKIIM.activation.php');
//require_once('/home/EDRO.SetOfTools/System/3.Buffer/0.EDRO_Loader.php');
require_once('/home/EDRO.SetOfTools/System/3.Buffer/1.EDRO_Buffering.php');
$сРасположОбъект	='/home/ЕДРО:ПОЛИМЕР/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект';

echo'Загруз:ЕДРО.'."\n";
$сРасположEvent		='/Чтение_Диск';			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Элемент/ЕДРО:ПОЛИМЕР.php';		echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:ЕДРО.'."\n\n";

echo'Загруз:Фраза.'."\n";
$сРасположEvent		='/Чтение_ОЗУ';				echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/НаборЭлементов/Фраза/Фраза.php';	echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:Фраза->загрузил модуль.'."\n\n";

echo'Загруз:ЗагрузЭлемент.'."\n";
$сРасположEvent		='/Чтение_Диск';			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Элемент/ЗагрузитьЭлемент.php';	echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:ЗагрузЭлемент->загрузил модуль.'."\n\n";

echo'Загруз:ЗагрузСписок.'."\n";
$сРасположEvent		='/Чтение_Диск';			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Список/ЗагрузитьСписок.php';		echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:ЗагрузСписок->загрузил модуль.'."\n\n";

echo'Загруз:РасположениеКоличество.'."\n";
$сРасположEvent		='/Чтение_Диск';			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Список/РасположениеКоличество.php';	echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:РасположениеКоличество->загрузил модуль.'."\n\n";

echo'Загруз:РасположениеСоздать.'."\n";
$сРасположEvent		='/Чтение_ОЗУ';				echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/Диск';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Элемент/РасположениеСоздать.php';	echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:РасположениеСоздать->загрузил модуль.'."\n\n";


echo'Загруз:01.БазаДанных.'."\n";
$сРасположEvent		='/Чтение_Диск'; 			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Список/01.БазаДанных.php';		echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:01.БазаДанных->загрузил модуль.'."\n\n";



echo'Загруз:02.Таблица.'."\n";
$сРасположEvent		='/Чтение_Диск'; 			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Список/02.Таблица.php';		echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:02.Таблица->загрузил модуль.'."\n\n";



echo'Загруз:Объект Таблица.'."\n";
$сРасположEvent		='/Чтение_Диск'; 			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Элемент/Таблица.php';		echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:Объект Таблица->загрузил модуль.'."\n\n";


echo'Загруз:04.Индекс.'."\n";
$сРасположEvent		='/Чтение_Диск'; 			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Список/04.Индекс.php';		echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:04.Индекс->загрузил модуль.'."\n\n";

echo'Загруз:01.Ячейка.'."\n";
$сРасположEvent		='/Чтение_Диск'; 			echo 'сРасположEvent		'.$сРасположEvent."\n";
$сРасположDestination	='/ОЗУ';				echo 'сРасположDestination	'.$сРасположDestination."\n";
$сРасположReality	='/ЛокалОблако';			echo 'сРасположReality		'.$сРасположReality."\n";
$сРасположObject	='/Элемент/01.Ячейка.php';		echo 'сРасположObject		'.$сРасположObject."\n";
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:01.Ячейка->загрузил модуль.'."\n\n";
?>