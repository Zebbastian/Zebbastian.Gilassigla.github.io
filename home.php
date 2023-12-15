<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php echo $_SESSION['name']; ?>
     <a href="logout.php">Logout</a>

     <header>
        <div class="container">
            <div class="logo">
                <h1>Gilas Sigla Patient Records</h1>
            </div>

            <div class="navbar">
                <div class="dropdown">
                    <button class="dropbtn">Manage</button>
                    <div class="dropdown-content">
                        <a href="user.html">Add User</a>
                        <a href="#">Add Patient Record</a>
                        <a href="#">Manage Users</a>

                        
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn"><a href="./schedule/index.php">Appointment</a></button> 
                    <div class="dropdown-content">
                        <a href="user.html">Add User</a>
                        <a href="#">Add Patient Record</a>
                        <a href="#">Manage Users</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">User</button>
                    <div class="dropdown-content">
                        <a href="#">Profile</a>
                        <a href="#">Settings</a>
                        <a href="index .php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <main class="main-content">
            <h2>Patient Records</h2>

            <form id="addForm">
                <label for="patientName">Patient Name:</label>
                <input type="text" id="patientName" required>
            
                <label for="patientAge">Patient Age:</label>
                <input type="number" id="patientAge" required>
            
                <label for="patientDate">Date:</label>
                <input type="date" id="patientDate" required>
          
            
                <button type="button" onclick="addPatient()">Add Patient</button>
            </form>

            <ul id="patientList">
                <li><span>Name:</span> Patient 1 <span>Age:</span> 25</li>
                <li><span>Name:</span> Patient 2 <span>Age:</span> 30</li>
                <li><span>Name:</span> Patient 3 <span>Age:</span> 28</li>
            </ul>
        </main>

        <aside class="right-sidebar">
            <h2>User Information</h2>
            <img src="ptlogo.png" alt="Admin" class="profile-picture">
            <div class="admin-info">
                <p>Admin: John Doe</p>
                <p>Role: Administrator</p>
            </div>
        </aside>
    </div>

    <footer>
        <p> </p>
    </footer>

    <script src="java.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>