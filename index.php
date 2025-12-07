<!DOCTYPE html>
<html lang="ru">
    <?php
    require_once 'head.php';
    $pageTitle = 'Гостиница «Свет» в Нижнем Новгороде';
    $pageDescription = 'Комфортная гостиница в Нижнем Новгороде';  
    // $canonicalUrl = 'https://hotel-nn.ru/';
    ?>
    <body>
        <main>
            <?php require_once 'header.php';?>
            <!-- Главный блок -->
            <section class="hero white">
                <div class="container my-5 text-center">
                    <h1>Гостиница «Свет»<br>в Нижнем Новгороде</h1>
                    <p class="py-4">Комфортная гостиница в центре города для отдыха</p>
                    <a class="btn-second btn-sm white transition" href="#" role="button">
                        Забронировать
                    </a>
                </div>
            </section>


            <!-- Номера -->
            <section class="rooms-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading text-center mb-4 mb-md-5">
                                <h2>Наши номера</h2>
                                <p>Выберите комфортный номер для вашего отдыха</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-4 justify-content-center">
                        <!-- Номер Стандарт -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="room-card">
                                <div class="room-image">
                                    <div class="room-placeholder">
                                        Изображение номера
                                    </div>
                                </div>
                                <div class="room-content">
                                    <h3>Стандарт</h3>
                                    <p class="room-price">от 3 500 ₽/ночь</p>
                                    <p class="room-description">Уютный номер с всем необходимым для комфортного отдыха</p>
                                    <div class="room-features">
                                        <span class="feature">16 м²</span>
                                        <span class="feature">1 кровать</span>
                                        <span class="feature">Wi-Fi</span>
                                    </div>
                                    <div class="room-actions">
                                        <a href="#" class="btn btn-room btn-sm transition">Забронировать</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Номер Комфорт -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="room-card">
                                <div class="room-image">
                                    <div class="room-placeholder">
                                        Изображение номера
                                    </div>
                                </div>
                                <div class="room-content">
                                    <h3>Комфорт</h3>
                                    <p class="room-price">от 5 200 ₽/ночь</p>
                                    <p class="room-description">Просторный номер с улучшенной планировкой и видом на город</p>
                                    <div class="room-features">
                                        <span class="feature">24 м²</span>
                                        <span class="feature">1 кровать</span>
                                        <span class="feature">Wi-Fi</span>
                                        <span class="feature">Кондиционер</span>
                                    </div>
                                    <div class="room-actions">
                                        <a href="#" class="btn btn-room btn-sm transition">Забронировать</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Номер Люкс -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="room-card">
                                <div class="room-image">
                                    <div class="room-placeholder">
                                        Изображение номера
                                    </div>
                                </div>
                                <div class="room-content">
                                    <h3>Люкс</h3>
                                    <p class="room-price">от 8 500 ₽/ночь</p>
                                    <p class="room-description">Элитный номер с гостиной зоной и панорамными окнами</p>
                                    <div class="room-features">
                                        <span class="feature">45 м²</span>
                                        <span class="feature">2 комнаты</span>
                                        <span class="feature">Wi-Fi</span>
                                        <span class="feature">Кондиционер</span>
                                        <span class="feature">Мини-бар</span>
                                    </div>
                                    <div class="room-actions">
                                        <a href="#" class="btn btn-room btn-sm transition">Забронировать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Преимущества -->
            <section class="advantages-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading text-center mb-5">
                                <h2>Почему выбирают нас</h2>
                                <p>Мы заботимся о каждом госте</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-4 justify-content-center">
                        <!-- Расположение -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="advantage-card">
                                <div class="advantage-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <h3>Центр города</h3>
                                <p>В шаговой доступности от основных достопримечательностей</p>
                            </div>
                        </div>

                        <!-- Wi-Fi -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="advantage-card">
                                <div class="advantage-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12.55a11 11 0 0 1 14.08 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1.42 9a16 16 0 0 1 21.16 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.53 16.11a6 6 0 0 1 6.95 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <line x1="12" y1="20" x2="12" y2="23" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <line x1="8" y1="20" x2="16" y2="20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <h3>Бесплатный Wi-Fi</h3>
                                <p>Высокоскоростной интернет во всех номерах и зонах отеля</p>
                            </div>
                        </div>

                        <!-- Завтрак -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="advantage-card">
                                <div class="advantage-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6H7a5 5 0 0 0 0 10h11a5 5 0 0 0 0-10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <h3>Завтрак включен</h3>
                                <p>Шведский стол с широким выбором блюд каждое утро</p>
                            </div>
                        </div>

                        <!-- 24/7 -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="advantage-card">
                                <div class="advantage-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <h3>24/7 стойка</h3>
                                <p>Круглосуточная стойка регистрации всегда готова помочь</p>
                            </div>
                        </div>

                        <!-- Парковка -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="advantage-card">
                                <div class="advantage-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9L18.4 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <h3>Парковка</h3>
                                <p>Бесплатная охраняемая парковка для гостей отеля</p>
                            </div>
                        </div>

                        <!-- Кондиционер -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="advantage-card">
                                <div class="advantage-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <h3>Кондиционер</h3>
                                <p>Комфортная температура в номерах в любое время года</p>
                            </div>
                        </div>

                        <!-- Обслуживание -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="advantage-card">
                                <div class="advantage-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <h3>Обслуживание</h3>
                                <p>Ежедневная уборка и замена белья по первому требованию</p>
                            </div>
                        </div>

                        <!-- Безопасность -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="advantage-card">
                                <div class="advantage-icon">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 11H5a2 2 0 0 0-2 2v7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <rect x="2" y="11" width="20" height="11" rx="2" ry="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 2v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <h3>Безопасность</h3>
                                <p>Круглосуточное видеонаблюдение и система контроля доступа</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- О нас -->
            <section class="about-section">
                <div class="container">
                    <div class="row align-items-center g-4 g-lg-5">
                        <!-- Текст -->
                        <div class="col-12 col-lg-6 order-2 order-lg-1">
                            <div class="about-content pe-lg-4">
                                <h2 class="mb-4">О нашей гостинице</h2>
                                <p class="about-text mb-3 mb-lg-4">
                                    Добро пожаловать в уютную гостиницу в самом сердце Нижнего Новгорода. 
                                    Мы создали пространство, где современный комфорт сочетается с домашним теплом.
                                </p>
                                <p class="about-text mb-3 mb-lg-4">
                                    Наша гостиница предлагает номера различных категорий, от уютных стандартных 
                                    до просторных люксов. Каждый номер оборудован всем необходимым для комфортного 
                                    проживания и отдыха.
                                </p>
                                <p class="about-text mb-0">
                                    Мы находимся в непосредственной близости от основных достопримечательностей 
                                    города, ресторанов и торговых центров. Приятные цены, качественный сервис 
                                    и внимание к деталям делают наш отель идеальным выбором для деловых поездок 
                                    и туристических путешествий.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Изображение -->
                        <div class="col-12 col-lg-6 order-1 order-lg-2">
                            <div class="about-image">
                                <div class="image-placeholder h-100">
                                    Фото гостиницы
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Достопримечательности -->
            <section class="attractions-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading text-center mb-5">
                                <h2>Интересные места рядом</h2>
                                <p>Популярные места в шаговой доступности</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-lg-6">
                            <div class="attraction-card attraction-card-large">
                                <div class="card-image">
                                    <div class="image-placeholder">
                                        Фото Нижегородского Кремля
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3>Нижегородский Кремль</h3>
                                    <p class="address">ул. Кремль, 1</p>
                                    <p class="distance">5 минут пешком • 400 метров</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="attraction-card">
                                <div class="card-image">
                                    <div class="image-placeholder">
                                        Фото Чкаловской лестницы
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3>Чкаловская лестница</h3>
                                    <p class="address">ул. Бетанкура</p>
                                    <p class="distance">12 минут пешком</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="attraction-card">
                                <div class="card-image">
                                    <div class="image-placeholder">
                                        Фото площади Минина
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3>Площадь Минина</h3>
                                    <p class="address">пл. Минина</p>
                                    <p class="distance">7 минут пешком</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-6 col-lg-3">
                            <div class="attraction-card">
                                <div class="card-image">
                                    <div class="image-placeholder">
                                        Фото канатной дороги
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3>Канатная дорога</h3>
                                    <p class="address">пр. Гагарина</p>
                                    <p class="distance">15 минут пешком</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="attraction-card">
                                <div class="card-image">
                                    <div class="image-placeholder">
                                        Фото Благовещенского монастыря
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3>Благовещенский монастырь</h3>
                                    <p class="address">ул. Рождественская</p>
                                    <p class="distance">10 минут пешком</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="attraction-card">
                                <div class="card-image">
                                    <div class="image-placeholder">
                                        Фото Дома ученых
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3>Дом ученых</h3>
                                    <p class="address">ул. Ульянова</p>
                                    <p class="distance">8 минут пешком</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="attraction-card">
                                <div class="card-image">
                                    <div class="image-placeholder">
                                        Фото Речного вокзала
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3>Речной вокзал</h3>
                                    <p class="address">пл. Революции</p>
                                    <p class="distance">3 минуты пешком</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Контакты -->
            <section class="contacts-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading text-center mb-5">
                                <h2>Контакты</h2>
                                <p>Свяжитесь с нами любым удобным способом</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-4 h-100">
                        <div class="col-12 col-lg-6">
                            <div class="contacts-info h-100">
                                <div class="contact-item mb-4">
                                    <h3>Адрес</h3>
                                    <p class="contact-text">г. Нижний Новгород, ул. Большая Покровская, д. 50</p>
                                </div>
                                
                                <div class="contact-item mb-4">
                                    <h3>Телефон</h3>
                                    <p class="contact-text">
                                        <a href="tel:+78312345678" class="contact-link">+7 (831) 234-56-78</a>
                                    </p>
                                </div>
                                
                                <div class="contact-item mb-4">
                                    <h3>Email</h3>
                                    <p class="contact-text">
                                        <a href="mailto:info@hotel-nn.ru" class="contact-link">info@hotel-nn.ru</a>
                                    </p>
                                </div>
                                
                                <div class="contact-item mb-0">
                                    <h3>Время работы</h3>
                                    <p class="contact-text">
                                        Круглосуточно<br>
                                        Заселение: с 14:00<br>
                                        Выезд: до 12:00
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="contacts-map h-100">
                                <div class="map-container h-100">
                                    <iframe 
                                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A3d4a5b2c1e9f8g7h6i5j4k3l2m1n0o9p8q7r6s5t4u3v2w1x0y9z8a7b6c5d4e3f2g1h0i9j8k7l6m5n4o3p2q1r0s9t8u7v6w5x4y3z2a1b0c9d8e7f6g5h4i3j2k1l0m9n8o7p6q5r4s3t2u1v0w9x8y7z6&source=constructor" 
                                        width="100%" 
                                        height="100%" 
                                        frameborder="0"
                                        allowfullscreen="true"
                                        style="position:relative;">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php require_once 'footer.php';?>
        </main>

        <script src="/js/bootstrap.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
