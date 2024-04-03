<?php
    require('../data/planets/planets_data.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планети</title>
    <link rel="stylesheet" href="../css/header.css"> <!-- Підключення CSS-стилів -->
</head>
<body>
    <header>
        <div class="search">
        <input type="text" placeholder="Пошук...">
        <button>Пошук</button>
        <select id="selectOption" onchange="location = this.value;" onkeypress="if(event.keyCode == 13) location = this.value;">
            <option value="form/planets.php" >Планети</option>
            <option value="stars">Зірки та галактики</option>
            <option value="missions">Космічні місії</option>
            <option value="phenomena">Астрономічні явища</option>
            <option value="theories">Теорії та дослідження</option>
        </select>
    </div>
    <nav>
        <ul>
            <li>Studia Dragon Chaos</li>
        </ul>
    </nav>
    </header>

    <main>
        <section class="hero">
        <img src="../picture/main/Галакт.jpg" alt="Космос">
        <div class="hero-text">
            <h1>Інформація та статті про планет</h1>
        </div>
    </section>

   <div class="planets">
    <h2>Інформація про планети:</h2>

    <?php foreach($data['planet'] as $key => $planet): ?>
    <div>
        <h3>Назва: <span class="planet-name"><?php echo $data['planet']['name']; ?></span></h3>
        <p>Коротко про планету: <span class="planet-about"><?php echo $data['planet']['about']; ?></span></p>
        <p>Факти: <span class="planet-about"><?php echo $data['planet']['about']; ?></span></p>
    </div>
<?php endforeach; ?>

    <div>
        <h3>Назва: <span class="planet-name"><?php echo $data['planet']['name']; ?></span></h3>
        <p>Коротко про планету: <span"><?php echo $data['planet']['about']; ?></span></p>
        <p>Об'єм планети: <span><?php echo $data['planet']['volume']; ?></span></p>
        <p>Відстань від сонця: <span><?php echo $data['planet']['distance']; ?></span></p>
        <p>Кількість супутників: <span><?php echo $data['planet']['satellite']; ?></span></p>
        <p>Тривалість дня в годинах: <span><?php echo $data['planet']['day_time']; ?></span></p>
    </div>

</div>

    <div class="articles">
    <h2>Статті про планети:</h2>
    
    
</div>

    </main>

    <footer>
        <p>Зв'язок: +380 93 133 1200 | Електронна пошта: xvovik13vovik@gmail.com</p>
    </footer>
</body>
</html>
