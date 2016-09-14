# Building CMS Database

## Tables

| subjects       |
|:---------      |
| -id            |
| -menu_name     |
| -position      |
| -visible       |

> subject **has_many** pages

|  pages           |
|:---------        |
| -id              |
| -subject_id *    |
| -menu_name       |
| -position        |
| -visible         |
| -content         |

> *foreign key related to subjects


### admins
- id
- username
- hashed_password


```
ex.  creating the admins table to SQL

>$ mysql -u widget_cms -p widget_corp
>$ enter password: ******

	CREATE TABLE admin (
->  id INT(11) NOT NULL AUTO_INCREMENT,
->  username VARCHAR(50) NOT NULL,
->  hashed_password VARCHAR(60) NOT NULL,
->  PRIMARY KEY (id)
->	);


```
