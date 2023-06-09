<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Викладачі</title>
        @vite(['resources/css/teachers.css', 'resources/css/bootstrap-grid.css'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <p>voice</p>
                    <p class="pretitle">курси вокалу</p>
                </div>
                <div class="back-button">
                    <a class="button" href="{{route('main')}}">головна</a>
                </div>
            </div>
            <div class="teachers">
                <h3>викладачі</h3>
                <div class="row justify-content-start">
                    <div class="col-md-4 col-sm-8 col-12">
                        <p class="name">Оберемченко Ростислав</p>
                        <div class="first-face">
                            <img class="face-photo" src="images/rostislav.png">
                            <div class="experience first-exp">
                                <p>досвід</p>
                                <img src="images/5years.png">
                            </div>
                        </div>
                        <a href="#rostislav-popup">детальніше</a>
                    </div>
                    <div class="col-md-4 col-sm-8 col-12">
                        <p class="name">Худченко Єва</p>
                        <div class="second-face">
                            <img class="face-photo" src="images/eva.png">
                            <div class="experience second-exp">
                                <p>досвід</p>
                                <img src="images/10years.png">
                            </div>
                        </div>
                        <a href="#eva-popup">детальніше</a>
                    </div>
                    <div class="col-md-4 col-sm-8 col-12">
                        <p class="name">Шумейко Анастасія</p>
                        <div class="third-face">
                            <img class="face-photo" src="images/nastia.png">
                            <div class="experience third-exp">
                                <p>досвід</p>
                                <img src="images/7years.png">
                            </div>
                        </div>
                        <a href="#nastia-popup">детальніше</a>
                    </div>
                    <div class="col-md-4 col-sm-8 col-12">
                        <p class="name">олійник Мстислав</p>
                        <div class="fourth-face">
                            <img class="face-photo" src="images/mstuslav.png">
                            <div class="experience fourth-exp">
                                <p>досвід</p>
                                <img src="images/7years.png">
                            </div>
                        </div>
                        <a href="#mstuslav-popup">детальніше</a>
                    </div>
                    <div class="col-md-4 col-sm-8 col-12">
                        <p class="name">ткаченко Орися</p>
                        <div class="fifth-face">
                            <img class="face-photo" src="images/orysa.png">
                            <div class="experience fifth-exp">
                                <p>досвід</p>
                                <img src="images/8years.png">
                            </div>
                        </div>
                        <a href="#orysa-popup">детальніше</a>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="row footer-titles">
                    <div class="col-lg-6 col-md-9 voice-title">
                        <p>voice</p>
                    </div>
                    <div class="col-lg-3 col-md-3 con-title">
                        <p>контакти</p>
                    </div>
                    <div class="col-lg-3 nav-title">
                        <p>навігація</p>
                    </div>
                </div>
                <div class="row socials">
                    <div class="col-lg-2 col-md-3 col-6 social footer-titles">
                        <p>instagram</p>
                        <img src="images/inst-line.png">
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 social footer-titles">
                        <p>facebook</p>
                        <img src="images/face-line.png">
                    </div>
                    <div class="col-lg-2 col-md-3 col-12 social footer-titles">
                        <p>twitter</p>
                        <img src="images/twi-line.png">
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 contacts">
                        <p>voiсe@gmail.com</p>
                        <p>+380972397041</p>
                        <p>вул. Київська 47</p>
                    </div>
                    <div class="col-3">
                        <div class="row navigation">
                            <div class="col-6 column">
                                <a href="landing.html">головна</a>
                            </div>
                            <div class="col-6 column">
                                <a href="contacts.html">контакти</a>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="first-phone-smile" src="images/1-black-phone-smile.png">
                <img class="second-phone-smile" src="images/2-black-phone-smile.png">
            </div>
        </div>
        <div class="popup" id="rostislav-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 inner-popup">
                        <a href="#popup-close" class="cross-ref"><img class="cross" src="images/x.png"></a>
                        <div class="content">
                            <div class="photo">
                                <img src="images/rostislav.png">
                            </div>
                            <div class="information">
                                <div class="name-exp">
                                    <p>Оберемченко Ростислав</p>
                                    <div class="experience">
                                        <p>досвід</p>
                                        <img src="images/5years.png">
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Викладаю спів та допомагаю подолати дефекти мовлення і голосу. Допоможу пізнати і навчитися вільно володіти всіма ресурсами свого мовного та голосового аппарату.</p>
                                    <p>Маю досвід роботи з найрізноматнішими особистостями. Пріорітетом для мене є не просто сила голосу чи неймовірний діпазон, а ще більше окультурення та сприяння проникливості та свідомому володінню всіх можливостей голосу.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup" id="eva-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 inner-popup">
                        <a href="#popup-close" class="cross-ref"><img class="cross" src="images/x.png"></a>
                        <div class="content">
                            <div class="photo">
                                <img src="images/eva.png">
                            </div>
                            <div class="information">
                                <div class="name-exp">
                                    <p>Худченко Єва</p>
                                    <div class="experience">
                                        <p>досвід</p>
                                        <img src="images/10years-white.png">
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Випускниця НДУ імені Миколи Гоголя. Магістр з відзнакою.</p>
                                    <p>Мої учні люблять співати нові, сучасні, цікаві композиції, і я з радістю їм у цьому допомагаю!
                                        Ті, хто ходять до мене на заняття давно, знають про те, що я пишу пісні дорослим та дітям. ⠀
                                        </p>
                                    <p>Підбираю мелодію за діапазоном учня та його улюбленим жанром [танцювальні, ліричні, джазові, сучасні, фатальні, тощо]. Пишу композиції українською та англійською мовами.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup" id="nastia-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 inner-popup">
                        <a href="#popup-close" class="cross-ref"><img class="cross" src="images/x.png"></a>
                        <div class="content">
                            <div class="photo">
                                <img src="images/nastia.png">
                            </div>
                            <div class="information">
                                <div class="name-exp">
                                    <p>Шумейко Анастасія</p>
                                    <div class="experience">
                                        <p>досвід</p>
                                        <img src="images/7years.png">
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Маю дві вищі освіти: музичне мистецтво та соціальний працівник.</p>
                                    <p>Допоможу освоїти музичну мову за різними підходами. Успішний досвід роботи як з дітьми, так і зі студентами та дорослими. Рівень підготовки не має значення.</p>
                                    <p>Для мене важливо допомогти всім учням повністью розкрити свою індивідуальність з усіма відтінками та подолати можливі комплекси шляхом наших занять.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup" id="mstuslav-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 inner-popup">
                        <a href="#popup-close" class="cross-ref"><img class="cross" src="images/x.png"></a>
                        <div class="content">
                            <div class="photo">
                                <img src="images/mstuslav.png">
                            </div>
                            <div class="information">
                                <div class="name-exp">
                                    <p>олійник Мстислав</p>
                                    <div class="experience">
                                        <p>досвід</p>
                                        <img src="images/7years.png">
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Займаюся з усіма типами голосів: чоловіки, жінки та діти.</p>
                                    <p>Мої заняття дадуть змогу спочатку освоїти правильну техніку співу для новачків та серйозно допоможуть професіоналам у подальшому вокальному розвитку.</p>
                                    <p>Якщо ваша робота пов'язана з промовою, доводиться багато говорити, голос при цьому швидко втомлюється і втрачає свою свіжість, мої заняття допоможуть вилікувати голос і уникнути подальших труднощів.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup" id="orysa-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 inner-popup">
                        <a href="#popup-close" class="cross-ref"><img class="cross" src="images/x.png"></a>
                        <div class="content">
                            <div class="photo">
                                <img src="images/orysa.png">
                            </div>
                            <div class="information">
                                <div class="name-exp">
                                    <p>ткаченко Орися</p>
                                    <div class="experience">
                                        <p>досвід</p>
                                        <img src="images/8years-white.png">
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Багаторічний досвід викладання з різними віковими категоріями.</p>
                                    <p>Численні перемоги моїх учнів на міжнародних та всіх українських конкурсах та фестивалях [з них понад 40 Гран-прі].</p>
                                    <p>Унікальний підхід до кожного учня. Кваліфікована підготовка до конкурсів та вступних іспитів. Академічна та естрадна постановка голосу для початківців, продовжуючих та професіоналів.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
