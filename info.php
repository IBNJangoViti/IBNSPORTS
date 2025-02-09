<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Hub</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
    <header>
        <nav>
        <div class="menu-toggle" onclick="toggleMenu()">HUB MENU</div>
            <ul class="navbar">
                <li><a href="#rugby" class="nav-button">Rugby</a></li>
                <li><a href="#hockey"class="nav-button">Hockey</a></li>
                <li><a href="#cricket"class="nav-button">Cricket</a></li>
                <li><a href="#netball"class="nav-button">Netball</a></li>
                <li><a href="#basketball"class="nav-button">Basketball</a></li>
                
            </ul>
        </nav>
        <center> <h1>Welcome to IBNSPORTS HUB</h1> </center>
    </header>
    <main>
        <section class="background">
            <center> <img src="images/logo.png"></center>
            
        </section>
       
    </main>
    <script>
    
    function toggleMenu() {
    	const navbar = document.querySelector(".navbar");
    	navbar.classList.toggle("active")
    }
    </script>
</body>
