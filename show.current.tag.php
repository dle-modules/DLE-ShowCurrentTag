<?php
/*
=============================================================================
ShowCurrentTag - Модуль для вывода текущего тега на странице тегов в DLE (тестировался на 9.8)
=============================================================================
Автор модуля: ПафНутиЙ 
URL: http://pafnuty.name/
ICQ: 817233 
email: pafnuty10@gmail.com
=============================================================================
Файл:  show.current.tag.php
-----------------------------------------------------------------------------
Версия: 0.1 (23.06.2013)
=============================================================================
*/ 

/**
 * Возможности:
 * - Вывод текущего тега в любом месте сайта на странице просмотра новостей по определённому тегу.
 * - Кеширование работы модуля.
 * 
 * Использование:
 * Залить файл show.current.tag.php в папку engine/modules
 * В нужном месте любого шаблона прописать: {include file="engine/modules/show.current.tag.php"}
 * К примеру для вывода заголовка H1 пишем в main.tpl:
 * [aviable=tags]<h1>Новости по ключевому тегу: {include file="engine/modules/show.current.tag.php"}</h1>[/aviable]
 */
if(!defined('DATALIFEENGINE')){die("Go fuck yourself!");}

$requestTag = $_REQUEST["tag"];
if($requestTag) {
  $curentTag = dle_cache('cur_tag_'.md5($requestTag), $config['skin']);
	 
	if(!$curentTag) {
		$curentTag = $requestTag;
		create_cache('cur_tag_'.md5($requestTag), $curentTag, $config['skin']);
	}
} else {
	$curentTag = '';
}
	echo $curentTag;	
?>
