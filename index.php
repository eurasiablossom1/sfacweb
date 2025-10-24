```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Saint Francis of Assisi College Bacoor</title>
    
    <style>
        :root {
            --primary: #8b0000;
            --secondary: #f5f5f5;
            --text: #333333;
            --accent: #ff3302;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: var(--secondary);
            color: var(--text);
            line-height: 1.6;
        }

        .header {
            background: linear-gradient(rgba(139, 0, 0, 0.8), rgba(139, 0, 0, 0.8)), url('assets/img/hedbac1.jpg') center/cover no-repeat;
            color: var(--white);
            text-align: center;
            padding: 5rem 1rem;
            position: relative;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-content {
            max-width: 800px;
        }

        .header img {
            max-width: 120px;
            margin-bottom: 1rem;
            border-radius: 50%;
            border: 3px solid var(--white);
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            animation: fadeIn 1s ease-in;
        }

        .header p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: var(--accent);
            color: var(--white);
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: transform 0.3s, background 0.3s;
        }

        .btn:hover {
            background: var(--primary);
            transform: scale(1.05);
        }

        .section {
            max-width: 1100px;
            margin: 3rem auto;
            padding: 2rem;
        }

        .section h2 {
            color: var(--primary);
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .section h2::after {
            content: '';
            width: 50px;
            height: 3px;
            background: var(--accent);
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
        }

        .announcements {
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        .announcements .item {
            padding: 1rem;
            border-left: 4px solid var(--accent);
            margin-bottom: 1rem;
            transition: transform 0.3s;
        }

        .announcements .item:hover {
            transform: translateX(10px);
        }

        .announcements a {
            color: var(--text);
            text-decoration: none;
            font-weight: bold;
        }

        .announcements a:hover {
            color: var(--accent);
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            padding: 1rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: var(--white);
            padding: 0.5rem;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .video {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            margin: 2rem 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .departments {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            background: var(--white);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .department-card {
            text-align: center;
            transition: transform 0.3s;
        }

        .department-card:hover {
            transform: translateY(-5px);
        }

        .department-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .department-card h3 {
            color: var(--primary);
            font-size: 1.3rem;
            margin: 0.5rem 0;
        }

        .department-card a {
            text-decoration: none;
        }

        footer {
            background: var(--primary);
            color: var(--white);
            text-align: center;
            padding: 1.5rem;
            margin-top: 3rem;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8rem;
            }

            .header p {
                font-size: 1rem;
            }

            .gallery {
                grid-template-columns: 1fr;
            }

            .departments {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <img src="assets/img/sfac_logo.png" alt="SFAC Logo">
            <h1>Saint Francis of Assisi College - Bacoor</h1>
            <p>#96 Bayanan, City of Bacoor, Cavite</p>
            <a href="contact.php" class="btn">Contact Us</a>
        </div>
    </header>

    <section class="section announcements">
        <h2>Latest Announcements</h2>
        <div class="item">
            <a href="#"><b>College Admissions Open for SY 2025-2026</b> (Oct 10, 2025)</a>
        </div>
        <div class="item">
            <a href="#"><b>Preschool Enrollment Ongoing</b> (Oct 5, 2025)</a>
        </div>
        <div class="item">
            <a href="#"><b>Academic Calendar 2024-2025 Released</b> (Sep 30, 2025)</a>
        </div>
    </section>

    <section class="section">
        <h2>Campus Highlights</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="assets/img/hedbac1.jpg" alt="Campus Event">
                <div class="overlay">Campus Event</div>
            </div>
            <div class="gallery-item">
                <img src="assets/img/insti1.png" alt="Institution">
                <div class="overlay">Institution</div>
            </div>
            <div class="gallery-item">
                <img src="assets/img/peacCert.jpg" alt="Certification">
                <div class="overlay">Certification</div>
            </div>
        </div>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/LXdz4GEJBoc" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <section class="section departments">
        <h2>Our Programs</h2>
        <div class="department-card">
            <a href="department_bed.php">
                <img src="assets/img/basic_ed.jpg" alt="Basic Education">
                <h3>Basic Education</h3>
            </a>
        </div>
        <div class="department-card">
            <a href="department_hed.php">
                <img src="assets/img/higher_ed.jpg" alt="Higher Education">
                <h3>Higher Education</h3>
            </a>
        </div>
    </section>

    <section class="section announcements">
        <h2>News Updates</h2>
        <p style="text-align: center;">Follow us on Facebook</p>
        <div class="item">
            <h3>Code the Future Event</h3>
            <p>Oct 15, 2025</p>
            <p>Join our coding workshop to innovate without limits!</p>
        </div>
        <div class="item">
            <h3>Alumni Spotlight</h3>
            <p>Oct 12, 2025</p>
            <p>Meet our distinguished alumni making a difference!</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Saint Francis of Assisi College - Bacoor</p>
    </footer>
</body>
</html>
