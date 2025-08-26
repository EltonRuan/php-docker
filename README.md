<div align='center'>
 <img style="width:100%" src="https://capsule-render.vercel.app/api?type=soft&height=200&color=FFFFFF&text=PHP%20Apache%20MySQL%20Docker&fontSize=50&fontAlign=50&strokeWidth=0&descAlignY=80&stroke=000000">
</div>

<nav align="center">
  <h2>🔗 NAVIGATION </h2>
  <p>
   <a href="#about-this-project">ABOUT THIS PROJECT</a> |
   <a href="#features">FEATURES</a> |
   <a href="#setup">SETUP</a> |
   <a href="#access-phpmyadmin">ACCESS PHPMYADMIN</a> |
   <a href="#final-considerations">FINAL CONSIDERATIONS</a>
  </p>
</nav>

## ABOUT THIS PROJECT

This project is a **development environment using PHP, Apache, and MySQL** set up entirely with **Docker and Docker Compose**.
It includes a basic PHP test file to verify the connection to the database and **phpMyAdmin** to manage MySQL visually.

It’s perfect for learning, testing PHP applications, or quickly starting new projects without installing PHP or MySQL locally.

## FEATURES

* **PHP 8.2 + Apache**: Web server ready to serve your PHP applications.
* **MySQL 8.0**: Database server with a preconfigured database `mydatabasename`.
* **phpMyAdmin**: Web interface to manage the database easily.
* **Dockerized**: Runs in isolated containers, no installation of PHP/MySQL required on your machine.
* **Volumes**: Database data is persisted locally, so data is not lost when containers are restarted.

## SETUP

### PREREQUISITES

* Docker Desktop installed (Linux containers mode)
* Docker Compose (comes with Docker Desktop)
* Basic knowledge of terminal/command prompt

### INSTALLATION

1. **Clone the repository to your local machine:**

```bash
git clone https://github.com/EltonRuan/php-apache-mysql-docker
```

2. **Navigate to the project directory:**

```bash
cd php-apache-mysql-docker
```

3. **Start the containers:**

```bash
docker-compose up -d --build
```

4. **Verify containers are running:**

```bash
docker ps
```

You should see **php\_apache**, **mysql\_db**, and **phpmyadmin** running.

### PROJECT STRUCTURE

```
php-apache-mysql-docker/
│
├─ docker-compose.yml   # Docker Compose configuration
├─ Dockerfile           # PHP + Apache image configuration
└─ src/
   └─ index.php         # Test PHP file connecting to MySQL
```

### PHP TEST FILE (`src/index.php`)

```php
<?php
$servername = "db";
$username = "root";
$password = "";
$dbname = "mydatabasename";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to MySQL database: " . $dbname;
?>
```

* Access it at: `http://localhost:8080`

### ACCESS PHPMYADMIN

* URL: [http://localhost:8081](http://localhost:8081)
* **Username:** root
* **Password:** (leave empty)
* **Database:** mydatabasename

This allows you to **browse tables, run queries, and manage your MySQL database** visually.

### DOCKER COMPOSE SERVICES

| Service      | Description                   | Ports     |
| ------------ | ----------------------------- | --------- |
| `web`        | PHP + Apache server           | 8080:80   |
| `db`         | MySQL database server         | 3306:3306 |
| `phpmyadmin` | Web interface to manage MySQL | 8081:80   |

### FINAL CONSIDERATIONS

This Dockerized PHP environment provides a **ready-to-use setup** for learning, testing, or starting new projects.
It ensures:

* Quick setup without local installations of PHP or MySQL
* Persistent data through Docker volumes
* Easy database management via phpMyAdmin

Feel free to modify, expand, and use this as a foundation for your own PHP projects.

---

<p><strong>© 2025 EltonRuan. All rights reserved.</strong></p>

<footer align="center">
 <img style="width:100%" src="https://capsule-render.vercel.app/api?type=soft&height=20&color=FFFFFF&fontSize=50&fontAlign=50&strokeWidth=0&descAlignY=80&stroke=000000&reversal=false&section=footer">
</footer>
