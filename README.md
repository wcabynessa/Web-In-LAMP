For Linux users:  
    - To connect to Postgresql from terminal:  
		sudo psql -U [username] -h localhost -p 5432 --dbname=[dbname]  
  
  
Directory structure:  
    - PHP: Contains PHP scripts  
		   Each table has 1 scripts containing functions to query, update, create data in the table.  
		   Query Handler script handles queries from front-end.  
    - Frontend:
  
  
How to deploy:   
    - Copy everything from git folder to [bitnami-lamp-address]/apache2/htdocs/  
    - Change password in 'php/connect_database.php'  
