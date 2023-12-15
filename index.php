<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students List Section</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: skyblue;
      color: white;
      padding: 10px;
      text-align: left;
    }

    nav {
      display: flex;
      background-color: #f0f0f0;
      padding: 10px;
    }

    nav a {
      text-decoration: none;
      color: black;
      font-weight: bold;
      padding: 10px;
      border-right: 3px solid #ddd; /* Separator */
      transition: background-color 0.3s; /* Hover effect transition */
    }

    nav a:hover {
      background-color: skyblue; /* Hover effect color */
    }

    nav a:last-child {
      border-right: none; /* Remove separator for the last button */
    }

    main {
      margin: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

  <header>
    <h1>Students</h1>
  </header>

  <nav>
    <a href="#">List</a>
    <a href="#">Add</a>
  </nav>

  <main>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>YEAR</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        <!-- Your table content goes here -->
      </tbody>
    </table>
  </main>

</body>
</html>
