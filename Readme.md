## Database Setup

This project includes a MySQL database for managing leave records. To set up the database:

1. **Create a New Database**: Use your preferred MySQL tool to create a new database.

2. **Import the Database**: Import the provided SQL dump file to initialize the database schema and data.

   **SQL Dump File**: `database/aci_leave.sql`

   **Using phpMyAdmin**:
   - Log in to phpMyAdmin.
   - Select the new database.
   - Go to the `Import` tab.
   - Upload `aci_leave.sql` and execute the import.

   **Using Command Line**:
   ```bash
   mysql -u username -p database_name < path/to/aci_leave.sql
