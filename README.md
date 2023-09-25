# vue.js-php
this is application for creating contact form in both frontend (vue.js) and in backend (php)

# steps to run the program
1) Download and Install xampp software  --- https://www.apachefriends.org/download.html 
2) Download Install node.js ( for running frontend - vue.js ) --- https://nodejs.org/en
3) Download and Install Visual Studio Code to run both the client and the server --- https://code.visualstudio.com/download
4) Download phpmyadmin ( for mysql in web ) --- https://www.phpmyadmin.net/
5) Clone the project to the local computer
6) Connect to the link --- http://localhost/phpmyadmin/
7) Add the contacts.sql file by creating a new database name : contacts and import the sql file inside the database
8) Add the other two folders ( php-operations  and newfrontvue ) inside the xampp/htdocs folder
9) Run the xmapp software and start the Apache and Mysql modules in it. It should start and assign port numbers to it. Like the one below
  ![image](https://github.com/venithraa/vue.js-php/assets/59190381/41085f19-b76e-42d7-8452-cf2fcadd45f3)
12) Open the php-operations folder inside visual studio code
13) Open a terminal and run  this code --- php artisian serve 
14) It would say that the server is running in http://127.0.0.1:8000/ and when you click that link an website would appear like this
    ![image](https://github.com/venithraa/vue.js-php/assets/59190381/9a668826-2754-4015-afaa-819f0d263ee0)
15) Open the newfrontvue in a new window of visual studio code and run the command to have Vue CLI --- npm install -g @vue/cli
16) Then run the command to run the frontend --- npm run dev
17) If this commands runs succesfully check the frontend by copy pasting this url in the web server --- http://localhost:8080/#/
18) The website should appear something like this.
    ![image](https://github.com/venithraa/vue.js-php/assets/59190381/e0c6d1e7-9734-49cb-8e7c-8f9bf40a585c)
19) Now the enter the contact details and it will get updated in both frontend and backend.
    Contact being saved in frontend :
    ![image](https://github.com/venithraa/vue.js-php/assets/59190381/d75b9256-d4a8-4e00-9493-1760b8eb90e8)
    ![image](https://github.com/venithraa/vue.js-php/assets/59190381/c93c8872-7a76-4db8-b7a8-4873c5643f9d)
    As well as backend as JSON format:
    ![image](https://github.com/venithraa/vue.js-php/assets/59190381/a0b88794-20da-4d14-b4b1-2d9fd11c79be)
    In the database :
    ![image](https://github.com/venithraa/vue.js-php/assets/59190381/a0fe9728-5a76-4037-9157-45c9ad4bb601)


    





