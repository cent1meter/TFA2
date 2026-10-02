# SwiftPOS — CodeIgniter 4 Database Activity

This project extends the original TFA1 POS application by replacing the static
customer and user arrays with records retrieved from a MySQL database through
CodeIgniter models.

## Requirements

- PHP 8.2 or newer
- Composer
- MySQL or MariaDB (XAMPP is fine)

## Setup

1. Extract or clone the project.
2. Open phpMyAdmin and import `database/pos_database.sql`. This creates the
   `pos_database` database, both required tables, and five records per table.
3. Check `.env`. Its default local settings are:
   - database: `pos_database`
   - username: `root`
   - password: blank
   - port: `3306`
4. If your MySQL credentials differ, edit the matching values in `.env`.
5. In the project folder, run:

   ```bash
   composer install
   php spark serve
   ```

6. Open `http://localhost:8080/customers` and
   `http://localhost:8080/users`.

## Included database work

- `app/Models/CustomerModel.php`
- `app/Models/UserModel.php`
- database-backed `Customers` and `Users` controllers
- MySQL export at `database/pos_database.sql`
- optional CodeIgniter migration and seeder

Instead of importing the SQL export, you may create and populate the database
with CodeIgniter commands after creating an empty `pos_database` database:

```bash
php spark migrate
php spark db:seed PosSeeder
```
"# TFA2" 
