#To run this program on your local computer, install XAMPP.
<br>
create a database in MySQL named "cruddb" and create table in this database named "store".
<br>
You can create this table by using below command in MySQL:
<br>
CREATE TABLE `store` ( `id` INT(11) NOT NULL AUTO_INCREMENT, `book` VARCHAR(255) NOT NULL, `author` VARCHAR(255) NOT NULL, `price` INT(50) NOT NULL, `quantity` INT NOT NULL, PRIMARY KEY (`id`) ) ENGINE = InnoDB;
<br>
Save all these files in a new folder, name it anything, inside htdocs folder which is present in xampp folder.
<br>
Run Xampp and start apache and MySQL. Then goto browser and search url localhost/newfolder.
