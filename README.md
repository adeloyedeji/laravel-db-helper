# laravel-db-helper

A simple light weight plugin to help developers quickly scaffold laravel models, seeders for an already existing database.

This project is in its, created on 02-08-2019. Improvements and suggestions are highly welcomed.

This plugin is highly been developed and updated. As long as there's **Laravel** there will be **laravel-db-helper**.

## Project Pipe lines

- [ ] Support for automatic setup with MySQL
- [x] Support for protected property $tableName
- [x] Support to export files to specified directory
- [x] Support for generating migrations from database
- [ ] Support for one to many relationship
- [ ] Support for many to many relationship
- [ ] Support for multiple database systems
- [x] Support for generating seeders from database

## Setup
1. Clone a copy of this repository
2. Run the index.php file on **CLI** with all the neccesary arguments

## Example Usage

**php index.php --database=myDBName --username=root --password=pass123 --host=localhost** 
**--path=C://users/username/laravel -seeder -model -migration**

## Arguments
--database    -->   Name of database [required] 

--username    -->   Setting up database username [required]

--host        -->   database host [default: localhost] 

--password    -->   Database password [default: ]

--path        -->   Path to store DB result [default: current-directory ]

-model        -->   For generating models from Database

-seeder       -->   For generating database seeders from Database

-migration    -->   For generating migrations file from Database

help          -->   To display this menu
