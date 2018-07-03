SELECT *  FROM `clients` WHERE `gender` = 'male' AND `date_of_birth` > '1999-12-31 00:00:0' ORDER BY `date_of_birth`  ASC

SELECT `gender`, count(*) AS `liczba` FROM `clients` GROUP BY `gender` ORDER BY `gender`

SELECT id, orders_count  FROM `clients` ORDER BY orders_count DESC LIMIT 1

SELECT *  FROM `clients` WHERE `name` LIKE 'T%' OR `surname` LIKE 'T%'

SELECT count(DISTINCT city) AS `ilosc`  FROM `clients`



SELECT c.id, o.order_number FROM clients c INNER JOIN orders o  ON c.id = o.client_id WHERE c.date_of_birth >= '2000-01-01'
