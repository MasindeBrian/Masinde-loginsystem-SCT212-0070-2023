<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image:url(pixels.jpg);
        }

        header {
            background-color: #333;
            color:white ;
            padding: 15px;
            text-align: center;
        }

        section {
            text-align: center;
            margin: 10px 0;
        }

        .welcome-message {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .user-info {
            font-size: 18px;
            color: #fbf6f6;
        }

        .logout-btn {
            background-color: #d9534f;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome Home</h1>
    </header>

    <section>
        <h2>Embark on Your Dream Adventure</h2>
        <p>At Your Travel Agency, we believe that every journey is a story waiting to be told. Whether you're seeking the sun-drenched beaches, the thrill of a mountain expedition, or the rich tapestry of cultural experiences, we're here to turn your travel dreams into reality.</p>
        <p>Explore our curated destinations, discover exclusive packages, and let the journey of a lifetime begin!</p>
    </section>
    <section class="destination">
        <h2>Tropical Paradise - Bali, Indonesia</h2>
        <p>Escape to the enchanting island of Bali, where palm-fringed beaches, lush landscapes, and vibrant culture await. Dive into crystal-clear waters, explore ancient temples, and indulge in the warmth of Balinese hospitality.</p>
    </section>

    <section class="destination">
        <h2>Mountain Retreat - Swiss Alps, Switzerland</h2>
        <p>Experience the breathtaking beauty of the Swiss Alps. Surrounded by snow-capped peaks, enjoy skiing in winter or hiking in summer. Relax in charming alpine villages and savor the pure mountain air for an unforgettable retreat.</p>
    </section>

    <section class="destination">
        <h2>Vibrant City - Tokyo, Japan</h2>
        <p>Immerse yourself in the energy of Tokyo, a city where tradition meets modernity. From bustling markets to serene temples, Tokyo offers a dynamic blend of old and new. Discover innovative technology, culinary delights, and the rich cultural tapestry of Japan's capital.</p>
        <a href="index.php" class="logout-btn">Logout</a>
    </section>

    
</body>
</html>
