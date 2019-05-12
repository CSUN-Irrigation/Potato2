## FAQ

### Kubernetes
- There are reasons why kubernetes did not work at first:
    1. If the hardware is not able to do nested Virtual Machines do not attempt
    2. VirtualBox is not able to do Nested Loop
    3. Increase your processors for the VM when doing nested Virtual Machines
    4. Enable anything necessary:
- You may also follow this guide: 
    - https://github.com/CSUN-Irrigation/Potato2
   
### Mini Database testing web:
For this to work you will need to setup a LAMP Stack:
    - Any guide is possible but the one that I have used is: https://www.digitalocean.com/community/tutorials/comment-installer-la-pile-linux-apache-mysql-php-lamp-sur-un-serveur-ubuntu-18-04-fr
    - Then you will have to create a Database to test it out:
        - First logging into the mysqli:
            - mysql -u root -p
        - Then setting up your user and password with power:
            - GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost' IDENTIFIED BY 'password';
        - Finally Creating the Database:
            - CREATE DATABASE dbname;
        - For further uses of mysqli heres the link of the usage:
            - https://www.a2hosting.com/kb/developer-corner/mysql/managing-mysql-databases-and-users-from-the-command-line
1. First I created the html for the web which is a simple username input
2. Then the php connection waas connected so that any input placed in the username would be placed in the databases username table
3. Then created a table to show if it did implement in the database in which I did connect it with php and verified if the table was    in the correct order
    - In the potato folder you will find the testing site if you would like to check:
 
