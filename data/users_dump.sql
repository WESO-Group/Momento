/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  jorgen
 * Created: 19.02.2017
 */

/*
-- Query: SELECT * FROM momento.users
LIMIT 0, 1000

-- Date: 2017-02-19 14:53
*/
INSERT INTO `users` (`id`,`name`,`surname`,`nickname`,`gender`,`description`,`age`,`registration_date`,`lastseen_date`,`level`) 
       VALUES (1,'Георгий','Попов','ambulance','M','Администратор, разработчик этого сайта.',20,'2019-02-20 17:00:00','2019-02-20 17:00:00',1);
INSERT INTO `users` (`id`,`name`,`surname`,`nickname`,`gender`,`description`,`age`,`registration_date`,`lastseen_date`,`level`) 
       VALUES (2,'Артём','Попов','deviling42','M','Администратор, модератор, верстальщик',20,'2019-02-20 20:00:00','2017-02-20 17:00:00',1);