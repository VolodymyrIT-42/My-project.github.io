<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Енциклопедія про космос</title>
    <link rel="stylesheet" href="css/main-style.css"> <!-- Підключаємо CSS-стилі -->
</head>
<body>

<header >
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
        <img src="picture/main/Галакт.jpg" alt="Космос">
        <div class="hero-text">
            <h1>Енциклопедія про космос</h1>
            <p>Автор: Степанець.В.В</p>
        </div>
    </section>

    <section class="news">
        <h2>Останні новини та статті</h2>
        <ul>
            <li><a href="https://zn.ua/ukr/SCIENCE/ucheni_vidkrili_planetu_v_inshiy_galaktitsi.html" target="_blank" >Нова відкрита планета в іншій галактиці</a></li>
            <li><a href="https://fenixslovo.com/2023/04/24/23058/" target="_blank">Інтересні факти про чорні діри</a></li>
            <li><a href="https://speka.media/koli-na-mars-poletyat-lyudi-kosmicni-misiyi-pkrd59" target="_blank">Космічна місія на Марс</a></li>
        </ul>
    </section>
</main>

<footer>
    <p>Зв'язок: +380 93 133 1200 | Електронна пошта: xvovik13vovik@gmail.com</p>
</footer>

</body>
</html>
