<?php
include('connection.php');
session_start();

if (!isset($_SESSION['admin'])) {
//   header('Location: login.php');
//   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Care Connect</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    <style>


  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: var(--dark);
    color: var(--text-light);
    line-height: 1.6;
    display: flex;
    /* min-height: 100vh; */
  }

  .container {
    display: flex;
    /* width:50%; */
  
  }

  /* Sidebar */
  .menu {
    /* width: 280px; */
    background: #4d87ceff;
    color:white;
    padding: 2rem 1.5rem;
    height: 100vh;
    position: fixed;
    border-right: 1px solid var(--border);
  }

  .menu a {
    display: flex;
    align-items: center;
    color: var(--text-gray);
    text-decoration: none;
    padding: 12px 15px;
    margin-bottom: 6px;
    border-radius: 6px;
    transition: all 0.3s ease;
    font-size: 0.95rem;
  }

  .menu a i {
    margin-right: 12px;
    width: 24px;
    text-align: center;
    font-size: 1.1rem;
  }

  .menu a:hover, .menu a.active {
    background: var(--primary-dark);
    color: white;
    transform: translateX(5px);
  }

  /* Main Content */
 .main-content {
  margin-left: 280px;
  margin-right: auto;
  max-width: 1100px;
  padding: 2rem;
}
.card-break {
  flex-basis: 100%;  /* Forces it to go full row width */
  max-width: 100%;
}


  /* Header */
  .logout {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2.5rem;
  }

  .logout a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    padding: 10px 16px;
    border-radius: 6px;
    background:black;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    box-shadow: 0 2px 10px black;
  }

  .logout a:hover {;
    transform: translateY(-2px);
  }

  .logout i {
    margin-right: 8px;
  }

  /* Main Heading */
  h1 {
    font-size: 2.4rem;
    font-weight: 700;
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    -webkit-background-clip: text;
    background-clip: text;
    color: black;
    font-family:  'gorgia';
    display: inline-block;
    margin-bottom: 1rem;
  }

  .header-description {
    color: black;
    font-size: 1rem;
    margin-bottom: 2.5rem;
    max-width: 600px;
    line-height: 1.7;
  }

  /* Cards - Single Row Layout */
  .dashboard-cards {
    display: flex;
    gap: 1.8rem;
    margin-top: 2rem;
    flex-wrap: nowrap;
    overflow-x: auto;
    padding-bottom: 20px;
  }

  .dashboard-cards::-webkit-scrollbar {
    height: 6px;
  }

  .dashboard-cards::-webkit-scrollbar-track {
    background: var(--darker);
  }

  .dashboard-cards::-webkit-scrollbar-thumb {
    background: var(--primary);
    border-radius: 3px;
  }

  .card {
    margin-top:40px;
    background: var(--card-bg);
    border-radius: 12px;
    margin-left:1rem;
    padding: 2rem;
    min-width: 240px;
    flex: 1;
    border: 1px solid ;
    /* transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1); */
    box-shadow: var(--shadow);
  }

  .card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    border-color:black;
  }

  .card i {
    font-size: 2.2rem;
    margin-bottom: 1.5rem;
    color:black;
  }

  .card h3 {
    font-size: 1.3rem;
    margin-bottom: 0.8rem;
    font-weight: 600;
    color: black;
  }

  .card p {
    color: var(--text-gray);
    font-size: 0.95rem;
    line-height: 1.6;
  }

  /* Responsive */
  @media (max-width: 1200px) {
    .dashboard-cards {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 768px) {
    .container {
      flex-direction: column;
    }
    
    .menu {
      width: 100%;
      position: relative;
      height: auto;
      padding: 1.5rem;
    }
    
    .main-content {
      margin-left: 0;
      padding: 2rem;
    }
    
    .dashboard-cards {
      flex-direction: column;
      gap: 1.5rem;
    }
    
    .card {
      min-width: 100%;
    }
    
    h1 {
      font-size: 2rem;
      
    }
  }
</style>
</head>
<body>

<div class="container">
    <div class="menu">
        <a href="upload.php"><i class="fas fa-music"></i> </a>
        <a href="addvideo.php">Add Video</a>
        <a href="album.php"><i class="fas fa-compact-disc"></i> Add Album</a>
        <a href="artist.php"><i class="fas fa-user-alt"></i> Add Artist</a>
        <a href="year.php"><i class="fas fa-calendar-alt"></i> Add Year</a>
        <a href="viewalbum.php"><i class="fas fa-compact-disc"></i> View Album Content</a>
        <a href="logout.php"><i class="fas fa-cog"></i> Site Settings</a>
    </div>

    <div class="main-content">
        <div class="logout">
            <h1>Care connect</h1>
            <a href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        
        <p class="header-description">Manage your music platform with this powerful admin dashboard. Track analytics, content, and user activity.</p>

        <div class="dashboard-cards">
            <a class="card" href="viewusers.php">
                <i class="fas fa-user-friends"></i>
                <h3>Users</h3>
                <p>Manage all registered users and permissions</p>
            </a>
            <a class="card" href="upload.php">
                <i class="fas fa-music"></i>
                <h3>Songs</h3>
                <p>View and manage all song content</p>
            </a>
            <a class="card" href="video.php">
                <i class="fas fa-play-circle"></i>
                <h3>Videos</h3>
                <p>Manage video content and metadata</p>
            </a>

        </div>
    </div>
</div>

</body>
</html>