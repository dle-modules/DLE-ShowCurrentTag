ShowCurrentTag
==============

ShowCurrentTag - Модуль для вывода текущего тега на странице тегов в DLE

### [Автор модуля](http://pafnuty.name/ "ПафНутиЙ")

Возможности:
-----------
* Вывод текущего тега в любом месте сайта на странице просмотра новостей по определённому тегу.
* Кеширование работы модуля.

Использование:
-------------
* Залить файл show.current.tag.php в папку ```engine/modules```
* В нужном месте любого шаблона прописать: ```{include file="engine/modules/show.current.tag.php"}```
* К примеру для вывода заголовка H1 пишем в main.tpl:
```[aviable=tags]<h1>Новости по ключевому тегу: {include file="engine/modules/show.current.tag.php"}</h1>[/aviable]```
