# BV_Studio
Project created using the laravel framework

You must copy the information from the file (.env.example) to the file (.env)

You must create a database called 'personal', the username and password for this exercise are 'adminpanel' and 'AdminPanel123 *' respectively, but it is not necessary to create that user, you can use the one you want as long as it is registered in your database manager and copy that two data to the file (.env.example) and (.env)

It is required to install the packages
'npm i' or 'npm install'

install 'npm' if the tool is not available

After creating the database, all you have to do is execute the migrations with the command:
php artisan migrate

The application only makes use of a table ('individuals'), which consists of three columns ('email', 'first_name' and 'last_name') and another 2 columns corresponding to 'created_at' and 'updated_at', so, To work the database from a manager, you can do any of these queries:

INSERT INTO personal.individuals (email, created_at, updated_at, first_name, last_name) VALUES ('value', '2019-10-23 02:53:04', '2019-10-23 02:53:04', 'value', 'value');

INSERT INTO personal.individuals (email,first_name, last_name) VALUES ('value', 'value', 'value');

Or if you prefer, register information through the application