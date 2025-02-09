const mysql = require("mysql");

// Create a connection pool
const pool = mysql.createPool({
  connectionLimit: 10, // Set connection limit
  host: "your-hostinger-db-host",
  user: "your-database-user",
  password: "your-database-password",
  database: "event_management",
});

// Export the pool for reuse
module.exports = pool;
