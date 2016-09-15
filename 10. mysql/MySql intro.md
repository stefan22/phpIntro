#MySQL
======

	- Database
      ========
		- Set of tables
		- 1 database = 1 application
		- example: widget_corp
		- access permissions are granted at database level

	- Table
      =====
		- Set of columns and rows
		- represents a single concept (a noun)
		- examples: products, customers, orders

	- Column
      ======
		- Set of data of a single simple type
		- examples: first_name, last_name, email, password
		- columns have types: strings, integers, etc

	- Rows
      ====
		- Single record of data
		- example: "Kevin", "Douglas", "kevdog@gmail.com", "secret"

	- Field
      =====
		- Intersection of a column and a row
		- Example: first_name: "Kevin"


	- Index
	  =====
	  	- Data structure on a table to increase look up speed
	  	- Like the index at the back of a book

	- Foreign key
	  ===========
	  	- Table column whose values reference rows in another table
	  	- The foundation of relational databases


	- CRUD
	  ====
	  	- Acronym that stands for the four most basic operations that we do with databases

	  			- Create 	=> create new rows in our database tables
	  			- Read 		=> read back data
	  			- Update	=> update data
	  			- Delete	=> delete data




# Creating a Database
=====================
	- i'm accessing mysql in windows using wamp - and running mysql console/ terminal
	- exit => logs u out, pass is stefano -just a local run database

	-commands:
				- SHOW DATABASES;
				- CREATE DATABASE db_name;
				- USE db_name;
				- DROP DATABASE db_name;


				GRANT ALL PRIVILIEGES ON db_name.*			// .* that means all tables on database
				TO 'username'@'localhost'					//only accessible from same computer
				IDENTIFIED BY 'password';


				SHOW GRANTS FOR 'username'@'localhost';     // SHOW GRANTS FOR 'mainwid'@'localhost';

	MAC FROM TERMINAL
	================
		-mysql -u root  --pasword=

		


# Creating database table
=========================

		- SHOW TABLES;

		- CREATE TABLE table_name (
			column_name1 definition,
			column_name2 definition,
			column_name3 definition,
			options
		 );



		- SHOW COLUMNS FROM  table_name;

		- DROP TABLE table_name;



		-----------------------------------------------------------------------------
		layout for table that will hold subject areas:

			* subjects (a table called subjecs)

				* id (column for id - unique identifier and it's going to allow us to then say customer 27 or customer 34)
				* menu_name  (name of menu display onthe public side of the content management system)
				* position (that will let us change the sort order of those subjects)
				* visible ( a boolean true or false for whether the subject should be visible to the public - on the subject navigation
				  on top of website)



				  mysql> CREATE TABLE subjects(
				  		->	id INT(11) NOT NULL AUTO_INCREMENT,
				  		->  menu_name VARCHAR(30) NOT NULL,
				  		->  position INT(3) NOT NULL,
				  		->  visible TINYINT(1) NOT NULL,
				  		->  PRIMARY KEY (id)
				  );


				 SHOW TABLES;
				
				 SHOW COLUMNS FROM subjects;
				  


		- CRUD => Most common operations in databases: create, read, update and delete


		##SQL SELECT (read)
		===================

				SELECT *
				FROM table
				WHERE column1 = 'some_text'
				ORDER BY column1 ASC;


		##SQL INSERT (create)
		=====================

				INSERT INTO table (column1, column2, column3)                        //leave the idea out and let have mysql handle it
				VALUES (val2,val2,val3);

					insert into subjects (menu_name, position, visible)
					values ('about page', 1 , 1);


		##SQL UPDATE (update)
		=====================

				UPDATE table                                     //update subjects
				SET column1 = "some_text"						 //set visible = 1					
				WHERE id = 1;		                             // where id = 4;


		##SQL DELETE (delete)
		=====================

				DELETE FROM table  					// delete from subjects
				WHERE id = 1;                       // where id = 4;



		##Read from database
		====================

				select * from subjects where visible = 1; 	                                         
				select * from subjects where visible =1 order by menu_name ASC

		##Alter table

				alter table page add visible TINYINT(1) NOT NULL;



# Relational database tables
============================
	
		## One-to-Many relationship

			ie: subject -> pages   //a sujects has many pages and that each page belongs to the subject

				we do this using a foreign key => to add a column to one of them where values will reference
				rows in the other table (on the many side)

					
					table: subjects
				-------------------------											
				|	id		|	1		|
				|___________|___________|
				|	menu    |           |
				|	name	|	BHS		|
				|___________|___________|			
				|	posit   |           |
				|	ion		|	2		|
				|___________|___________|
				|			|			|
				|	visible	|	1		|
				-------------------------

					table:pages
				-------------------------											
				|	id		|	1		|
				|___________|___________|											
				|	subject |           |
				|     id	|	1		|
				|___________|___________|
				|	menu    |           |
				|	menu    |           |
				|	name	|	BHS		|
				|___________|___________|			
				|	posit   |           |
				|	ion		|	2		|
				|___________|___________|
				|			|			|
				|	visible	|	1		|
				|-----------------------|
				|           |  "this    |
				|  content  |   page    |
				|           |   text"   |
				|___________|___________|



		mysql> CREATE TABLE page (

			->  id INT(11) NOT NULL AUTO_INCREMENT,
			->  subject_id INT(11) NOT NULL,
			->  menu_name VARCHAR(30) NOT NULL,
			->  position INT(3) NOT NULL,
			->  visible TYNYINT(1) NOT NULL,
			->  content TEXT,
			->  PRIMARY KEY (id),
			->  INDEX (subject_id)
			-> );


		mysql> INSERT INTO page (subject_id, menu_name, position, visible, content)
		       VALUES (1, 'Our Mission',1, 1, 'Our mission has always been ...');

		mysql> INSERT INTO page (subject_id, menu_name, position, visible, content)
		       VALUES (1, 'Our History',2, 1, 'founded in 1589 by two random people ...');    	


*   [Back](https://github.com/stefan22/phpIntro)