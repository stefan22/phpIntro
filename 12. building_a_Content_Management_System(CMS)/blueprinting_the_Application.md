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

  |Public                     |Admin                        |
  |---------------            |:---------------------------:|
  | Site pages                |   Login Page                |            
  | - navigation              |   - form                    |            
  | - page content            |   - username                |            
  | - read only               |   - password                |            
  |                           |                             |            
  |                           |        to:                  |            
  |                           |                             |            
  |                           |   Admin Menu                |            
  |                           |   - manage content          |           
  |                           |   - manage admins           |
  |                           |   - logout                  |
  |                           |                             |
  |                           |                             |
  |                           |   Manage content            |
  |                           |   -navigation               |
  |                           |   -subjects CRUD            |
  |                           |   -pages CRUD               |
  |                           |                             |
  |                           |                             |
  |                           |   Manage admins             |
  |                           |   -admins CRUD              |
  |                           |                             |
  |                           |   Logout                    |
  |                           |   -do logout                |
  |                           |   -back to login            |
  |                           |                             |
  |                           |                             |
  




  Finish Widget Corp  (Public)


  ___________________________________________________________
  |                                                         |
  |   Widget Corp     (Public side)   (index.php)           |
  |---------------------------------------------------------|
  |                           |                             |
  |   About Widget Corp       |  Welcome                    |
  |   Products                |                             |
  |   Services                |                             |
  |                           |                             |
  |                           |                             |
  -----------------------------------------------------------


  
  
  ___________________________________________________________
  |                                                         |
  |   Widget Corp     (Public side) (index.php?subject=1)   |
  |---------------------------------------------------------|
  |                           |                             |
  |  > About Widget Corp      |    Our Mission              |
  |      >Our Mission         |    Our mission has ...      |
  |      +Our History         |                             |     
  |    Produces               |                             |
  |    Services               |                             |
  |                           |                             |
  |                           |                             |
  -----------------------------------------------------------

   __________________________________________________________
  |                                                         |
  |   Widget Corp     (Public side) (index.php?page=2)      |
  |---------------------------------------------------------|
  |                           |                             |
  |  > About Widget Corp      |    Our History              |
  |      Our Mission          |    Our history has ...      |
  |      >Our History         |                             |     
  |    Produces               |                             |
  |    Services               |                             |
  |                           |                             |
  |                           |                             |
  -----------------------------------------------------------


   __________________________________________________________
  |                                                         |
  |   Widget Corp     (Public side) (index.php?subject=2)   |
  |---------------------------------------------------------|
  |                           |                             |
  |    About Widget Corp      |    Large Widgets            |
  |    Products               |    Our large widgets ...    |
  |       >Large Widgets      |                             |
  |      +Small Widgets       |                             |     
  |    Services               |                             |
  |                           |                             |
  |                           |                             |
  |                           |                             |
  ----------------------------------------------------------- 


  
   __________________________________________________________
  |                                                         |
  |   Widget Corp     (Public side) (index.php?page=4)      |
  |---------------------------------------------------------|
  |                           |                             |
  |    About Widget Corp      |    Small Widgets            |
  |    Products               |    Our small widgets ...    |
  |       +Large Widgets      |                             |
  |       >Small Widgets      |                             |     
  |    Services               |                             |
  |                           |                             |
  |                           |                             |
  |                           |                             |
  ----------------------------------------------------------- 



    _________________________________________________________
  |                                                         |
  |   Widget Corp     (Public side) (index.php?subject=3)   |
  |---------------------------------------------------------|
  |                           |                             |
  |    About Widget Corp      |    Retrofitting             |
  |    Products               |    We love to replace ...   |
  |    Services               |                             |
  |       >Retrofitting       |                             |
  |                           |                             |
  |                           |                             |
  -----------------------------------------------------------  



  Finish Widget Corp  (Admin)



   _________________________________________________________
  |                                                         |
  |   Widget Corp  (Admin side) (/login.php)                |
  |---------------------------------------------------------|
  |                    |  Login                             |
  |                    |  Username: ________                |
  |                    |  Password: ________                |
  |                    |  Submit                            |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  -----------------------------------------------------------  


   Once submitted:
   _________________________________________________________
  |                                                         |
  |   Widget Corp  (Admin side) (/admin.php)                |
  |---------------------------------------------------------|
  |                    |  Admin Menu                        |
  |                    |  Welcome to the admin area User    |
  |                    |     +Manage Website content        |
  |                    |     +Logout                        |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  |                    |                                    |
  -----------------------------------------------------------  