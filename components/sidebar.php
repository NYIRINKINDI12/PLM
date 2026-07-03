<aside id="sidebar">
    <ul>
        <li><a href="index.php#hero">Home</a></li>
        <li><a href="index.php#services">Services</a></li>
        <li><a href="index.php#about-us">Team</a></li>
        <li><a href="index.php#partners">Partners</a></li>
        <li><a href="appointments.php">Appointments</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</aside>

<style>
#sidebar {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 200px;
    background-color: #0d6efd;
    padding-top: 50px;
}

#sidebar ul {
    list-style: none;
    padding: 0;
}

#sidebar ul li {
    margin: 20px 0;
}

#sidebar ul li a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    display: block;
    padding: 10px 20px;
}

#sidebar ul li a:hover {
    background-color: #0749b3;
    border-radius: 5px;
}

@media(max-width:768px){
    #sidebar {
        position: relative;
        width: 100%;
        height: auto;
        padding-top: 0;
    }
    #sidebar ul li {
        display: inline-block;
        margin: 0 10px;
    }
}
</style>
