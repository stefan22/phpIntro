# Blueprinting the Application

- Draw diagrams or type up notes
- clarifies work ahead and it's efficient
- confront problems early
- don't have to develop whole site at once instead
  tackle it piece by piece, develop it section by section

  ### example:

  > Site will have two areas: public area and admin area

  - Public area: pages are going to have similar structure, an area for  navigation(menu of content), an area
    for content, user will pick a navigation item, and then the PHP that loads will show that page's content.
    Pick new navigation item, get new content. So we'll create sets of pages which are grouped by subject.
    (picking a subject and a page)  

  - Admin area: need a login page where users provide username and password to authenticate themselves and
    gain access. If login fails, we'll ask them to try again, and if successful, we'll take them to an admin
    menu page.

<br />

|&nbsp;Public side  &nbsp; |Admin side                   |
|:--------:|:----------------:|

|Site pages               |Login Page                   |
|:---------------:          |:---------------------------:|
|                                                       |            
| navigation        |   form                      |            
| page content      |   username                  |            
| read only         |   password                  |            
  
  
 --- 
  

__**FROM ADMIN TO: ADMIN MENU**__

| Admin           |           Admin Menu         |
|------------     | :--------------------------: |
|                 |                              | 
| Admin Menu -->  |         **manage content**    |
|                 |                              |
| Admin Menu -->  |         **manage admin**     |
|                 |                              |
| Admin Menu -->  |         **logout**           |
|                 |                              |


---
  
__**FROM ADMIN MENU TO: MANAGE CONTENT**__

| Admin Menu          |       Manage Content         |
|------------         | :--------------------------: |
|                     |                              | 
| Manage content -->  |         **navigation**       |
|                     |                              |
| Manage content -->  |         **subjects CRUD**    |
|                     |                              |
| Manage content -->  |         **pages CRUD**       |
|                     |                              |


---


__**FROM ADMIN MENU TO: MANAGE ADMINS**__

| Admin Menu          |        Manage Admins         |
|------------         | :--------------------------: |
|                     |                              | 
| Manage admins  -->  |         **admins CRUD**      |
|                     |                              |



---



__**FROM ADMIN MENU TO: LOGOUT**__

| Admin Menu      |           Logout             |
|------------     | :--------------------------: |
|                 |                              | 
| Logout  -->     |         **do logout**        |
|                 |                              |  
| Logout  -->     |       **back to login**      |

  
---  


### Finish Widget Corp  (Public)

| Widget Corp          |           Public Side (index.php)   |
|-------------         | :---------------------------------: |
|                      |                                     | 
| > About Widget Corp  |         **Welcome**                 |
|                      |                                     |  
| Products             |                                     |  
|                      |                                     |
| Services             |                                     |

  
  
  
| Widget Corp (Public Side)       |     (index.php?subject=1)           |
|-------------                    | :---------------------------------: |
|                                 |                                     | 
| > About Widget Corp             |         **Our Mission**             |
|  &nbsp;&nbsp;>**Our Mission**   |         Our Mission has...          |
|  &nbsp;&nbsp;+ Our History      |                                     |  
|                                 |                                     |  
| Products                        |                                     |
|                                 |                                     |
| Services                        |                                     | 

  

| Widget Corp (Public Side)       |     (index.php?page=2)              |
|-------------                    | :---------------------------------: |
|                                 |                                     | 
| > About Widget Corp             |         **Our History**             |
|  &nbsp;&nbsp;+ Our Mission      |                                     |
|  &nbsp;&nbsp;>**Our History**   |          Our History has...         |  
|                                 |                                     |  
| Products                        |                                     |
|                                 |                                     |
| Services                        |                                     | 
  


| Widget Corp (Public Side)         |     (index.php?subject=2)           |
|-------------                      | :---------------------------------: |
|                                   |                                     | 
| About Widget Corp                 |                                     |
|                                   |                                     |  
| > Products                        |         **Large Widgets**           |
|   &nbsp;&nbsp;>**Large Widgets**  |        Our large widgets...         |
|   &nbsp;&nbsp;+ Small Widgets     |                                     |
|                                   |                                     | 
| Services                          |                                     |


 

| Widget Corp (Public Side)         |     (index.php?page=4)              |
|-------------                      | :---------------------------------: |
|                                   |                                     | 
| About Widget Corp                 |                                     |
|                                   |                                     |  
| > Products                        |           **Small Widgets**         |
|   &nbsp;&nbsp;+ Large Widgets     |                                     |
|   &nbsp;&nbsp;>**Small Widgets**  |           Our small widgets...      |
|                                   |                                     | 
| Services                          |                                     |

  

| Widget Corp (Public Side)         |     (index.php?subject=3)           |
|-------------                      | :---------------------------------: |
|                                   |                                     | 
| About Widget Corp                 |                                     |
|                                   |             |  
| Products                          |                                     |
|                                   |                                     |
| > Services                        |           **Retrofitting**          | 
|   &nbsp;&nbsp;>**Retrofitting**   |         We love to replace...       |
|                                   |                                     |

---


### Finish Widget Corp  (Admin)





| Widget Corp (Admin side)  | (/login.php)                       |
|---------                  | :---------------------------------:|
|                           |  Login                             |
|                           |  Username: ________                |
|                           |  Password: ________                |
|                           |  Submit                            |
|                           |                                    |
 



> Once submitted:


| Widget Corp(Admin side)   |  (/admin.php)                      |
|----------                 | :---------------------------------:|
|                           |  Admin Menu                        |
|                           |  Welcome to the admin area User    |
|                           |     +Manage Website content        |
|                           |     +Logout                        |
|                           |                                    |
 
  
  
  
  
  
  
  
