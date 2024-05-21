<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('component/head.php'); ?>
</head>

<style>
.hero {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh;
    background: url('path/to/your/image.jpg') no-repeat center center/cover;
    color: orange;
    text-align: center;
}

.hero h1 {
    font-size: 3em;
    margin: 0;
}

.hero p {
    font-size: 1.2em;
}

.content {
    padding: 20px;
    text-align: center;
}
</style>

<body>
    <?php $this->load->view('component/navbar.php'); ?>

    <div class="hero">
        <div>
            <h1>Welcome to Our Website</h1>
            <p>Your success is our priority</p>
        </div>
    </div>

    <div class="content">
        <h2>About Us</h2>
        <p>We provide the best solutions for your business. Our team is dedicated to helping you achieve your goals.</p>
    </div>

    <?php $this->load->view('component/footer.php'); ?>
</body>

</html>