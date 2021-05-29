# cp3402-2021-a2-cp3402-2021-team11



A wordpress Theme inspired by the project to  call for actions to support Autism Children to have a beeter life. This WP theme is open-sourced and our team welcome any changes and updates from other developers

![Wordpress-plugins](https://user-images.githubusercontent.com/58071533/120078604-c7abd080-c0e2-11eb-9451-03faed23fb76.jpg)


## How to install this repo to your local repository
 
### Initiate Wordpress on your local machine
 1. Download Vagrant -  the command line utility for managing the lifecycle of virtual machines: https://www.vagrantup.com/

   
 2. Clone and initiate Scotchbox
     ```sh
      git clone https://github.com/scotch-io/scotch-box my-project

      cd my-project
      
    ```
 3. Inside my-project folder, go to public/ and create a folder name wordpress/ 
    
 4. Download Wordpress: https://wordpress.org/download/

 5. Put all Wordpress files into the newly created wordpress/ folder inside my-project/

 6. open wordpress inside any Text Editor or IDEA that supports PHP

    If using visual studio code, can easily open the wordpress/ directory inside terminal

    ```sh
      cd wordpress
      code .
      
    ```
    
 7.  find the file wp-config-sample.php and provide the database username, password and hostname to the codes

      ```sh
        /** MySQL database username */
        define( 'DB_USER', 'root' );

        /** MySQL database password */
        define( 'DB_PASSWORD', 'root' );

        /** MySQL hostname */
        define( 'DB_HOST', 'localhost' );

      ```
    
 8. When done, save the codes and simply chang the name of the file to wp-config

 9. Now all the setup for WP on your local machine is done! You can easily run by go to the my-project/ directory and run 
     ```sh
     vagrant up
      
    ```
    
    Your WP is ready to serve at http://192.168.33.10/wordpress
    
    Remember to Vagrant halt to turn off vagrant when you done playing around with Wordpress :)

### Activate our theme!

 1. Go to my-project/public/wordpress/wp-content/themes

 2. Clone this Repo:
    ```sh
      git clone https://github.com/JCU-CP3402/cp3402-2021-a2-cp3402-2021-team11.git
      cd cmsassignmenttheme
      
      yarn install
      
    ```
    
 3. Now you can vagrant up and activate our theme inside your wordpress dashboard
 
 4. Customize the theme and create your own website!


      ![Optima](https://user-images.githubusercontent.com/58071533/120078659-135e7a00-c0e3-11eb-9dd1-63189e3dd17e.JPG)
 
 
## Contribute to our project!

  You can contribute to our project by simply adding new template pages to template-part/ folder inside the theme (codes in PHP), provide styling inside the sass/pages folder. Import the style to style.scss and simply run yarn dev build to build the project with webpack.
  
## This project is brought to you by The Amazing CMS Team: Team 11 of SP51-2021 James Cook University Singapore. Lecturer: Randy Zhu






 
    
