# MySheduleProject
Приложение по составлению расписаний и веб приложение по отображению расписаний
Установка 
1) Клонирование проекта git clone git@github.com:Fortech4N9/MySheduleProject.git

Для Desctop-Проекта нужна Visual-Studio с пакетами C# windows Froms
1) Собирается решение и запускается .exe  файл программы(Сами выбираете exel или debug)
* Не будет работать експорт в БД, пока не запуститьте docker-контейнер с Веб приложением
Для Web
На компьютере или сервере должен быть php.8.1x и выше, с установленным driver'ом mysqlPDO
Если Windows то в php.ini - конфигурационный файл добавляем запись: extension=php_pdo_mysql.dll
Желательно наличие wsl
Нужен установленный docker
Развертываем контейнер:
cd example-app && ./vendor/bin/sail up
Делавем миграцию базы данных, все таблицы:
cd example-app && php artisan migrate
на localHost будет Веб
Путь localhost/shedule* веб отображение расписания
