php_db_CRUD
===========

This is a class that I wrote, so when I want to use databases, I dont need to use native database calls.

In this class, there are functions that you can use to insert, delete, update, select from the database configued in a more user friendly way.


I made this files before I was familiar with any of the PHP frameworks. (Obviously)


Using the debug variable (turning it on) will allow you to minimze the number queries that you are making to the database. Just for the sake of optimization.

Uinsg the error variable will let you debug error that you might have in the queries. For example, if something is not working.

The main functions are:

  public function select(...)
  public function insert(...)
  public function update(...)
  public function delete(...)
  

Other useful functions include:

  public function lastInsertedId()
  public function numRows(...)
  
  
I will upload the documentation of each function in here soon  . . . . 
