<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Курси вокалу</title>
        @vite(['resources/css/general.css', 'resources/css/bootstrap-grid.css'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="main-img" id="main">
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <p>voice</p>
                        <p class="pretitle">курси вокалу</p>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="#">головна</a></li>
                            <li><a href="#for-whom">для кого</a></li>
                            <li><a href="#lessons">уроки</a></li>
                            <li><a href="#teachers">викладачі</a></li>
                            <li><a href="#reviews">відгуки</a></li>
                            <li><a href="{{route('contacts')}}">контакти</a></li>
                        </ul>
                    </div>
                    <div class="number">
                        <a class="call" href="#">0972397041</a>
                        <img class="phone-icon" src="images/phone-icon.png">
                        <img class="arrow" src="images/arrow.png">
                        <a class="menu-a" href="#burger"><img class="menu-icon" src="images/menu.png"> </a>
                        <img class="phone-arrow" src="images/phone-arrow.png">
                    </div>
                </div>
                <div class="central-area">
                    <div class="main-text">
                        <h1>За <span class="3-month">3 місяці</span> навчимо співати за допомогою ваших улюблених пісень</h1>
                    </div>
                    <div class="subtitle-text">
                        <h2><span class="vocal-courses-text">курси вокалу,</span> на яких зможе займатися кожен: від новачка до профі</h2>
                    </div>
                    <div class="cta">
                        <a href="#free-lesson">спробувати безкоштовно</a>
                        <img src="images/button-line.png">
                        <img class="phone" src="images/phone-button.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="burger" id="burger">
            <div class="container" >
                <div class="header-top">
                    <div class="logo">
                        <p>voice</p>
                    </div>
                    <div>
                        <a class="menu-a" href="landing.html"><img class="menu-icon" src="images/x.png"> </a>
                    </div>
                </div>
                <div class="menu-top">
                    <a href="#main">головна</a>
                    <img src="images/black-arrow.png">
                </div>
                <div class="menu-top">
                    <a href="#for-whom">для кого</a>
                    <img src="images/black-arrow.png">
                </div>
                <div class="menu-top">
                    <a href="#lessons">уроки</a>
                    <img src="images/black-arrow.png">
                </div>
                <div class="menu-top">
                    <a href="#teachers">викладачі</a>
                    <img src="images/black-arrow.png">
                </div>
                <div class="menu-top">
                    <a href="#reviews">відгуки</a>
                    <img src="images/black-arrow.png">
                </div>
                <div class="menu-top">
                    <a href="{{route('contacts')}}">контакти</a>
                    <img src="images/black-arrow.png">
                </div>
                <div class="number-top">
                    <p>+380972397041</p>
                    <img src="images/phone-icon.png">
                </div>
            </div>

        </div>
        <div class="second-block" id="for-whom">
            <div class="container">
                <h3>Для кого</h3>
                <div class="row justify-content-start">
                    <div class="col-lg-6 col-sm-12">
                        <div class="beginners">
                            <img class="begin-vector" src="images/begin-vector.png">
                            <img src="images/beginners.png">
                            <p>Наші педагоги допоможуть вам впоратися зі страхом, а від вас знадобляться сформовані цілі. </p>
                            <p>Після цього педагог розробить вам індивідуальний план занять і ви приступите до навчання.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-12 col-sm-7">
                        <div class="amateurs">
                            <img class="amat-vector" src="images/amat-vector.png">
                            <img src="images/amateurs.png">
                            <p>На аматорському етапі ви навчитесь співати у різних жанрах.</p>
                            <p>Освоїте різноманітні вокальні техніки та зможете сформувати свою власну манеру виконання.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-lg-6 col-sm-12">
                        <div class="professional">
                            <img class="profi-vector" src="images/profi-vector.png">
                            <img src="images/proffesional.png">
                            <p>Навіть якщо ви давно займаєтесь вокалом , вам буде чому повчитися у наших педагогів.</p>
                            <p>Вони допоможуть вам оволодіти професійною вокальною технікою, створити сценічний образ та  підготуватися до конкурсів.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="lessons">
            <div class="third-title">
                <h3>під час навчання</h3>
                <img class="smile" src="images/smile.png">
            </div>
            <div class="skills">
                <div class="row justify-content-start">
                    <div class="col-md-6 col-sm-12 col-12" >
                        <div class id="first-skill-block">
                            <p class="first-skill">Навчитесь дихати діафрагмою. Освоїте дихальну гімнастику.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class id="second-skill-block">
                            <p class="second-skill">Позбудетесь ознак сценічного хвилювання.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-6 col-sm-12">
                        <div class id="third-skill-block">
                            <p class="third-skill">Розвинете слух, вокальний діапазон та почуття ритму.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class id="fourth-skill-block">
                            <p class="fourth-skill">Навчитесь гарно співати у різних музичних жанрах.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="free-lesson" id="free-lesson">
            <div class="container">
                <h3>безкоштовний пробний урок</h3>
                <div class="row justify-content-start">
                    <div class="col-lg-6 col-md-8 col-sm-7 col-10 step step1">
                        <p class="step-name">знайомство з педагогом</p>
                        <p class="step-description">Ви розповісте про свій досвід занять музикою [якщо він був], про результати, які хочете отримати, а також про цілі, яких прагнете досягти.</p>
                        <img class="step-number" src="images/1.png">
                        <img class="second-img" src="images/photo2.png">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-8 col-sm-7 col-10 step step2">
                        <p class="step-name">прослуховування</p>
                        <p class="step-description">Коротке прослуховування визначить вашу зону розвитку на найближчі кілька місяців.</p>
                        <img class="step-number" src="images/2.png">
                        <img class="first-img" src="images/photo1.png">
                        <img class="third-img" src="images/photo3.png">
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-lg-6 col-md-8 col-sm-7 col-10 step step3">
                        <p class="step-name">питання & відповідь</p>
                        <p class="step-description">Ви можете запитати педагога про те, що вас цікавить і отримати докладні відповіді. Чим більше буде питань, тим точніше викладач зможе вибудувати навчальний процес.</p>
                        <img class="step-number" src="images/3.png">
                        <img class="fourth-img" src="images/photo4.png">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-8 col-sm-7 col-10 step step4">
                        <p class="step-name">розробка програми</p>
                        <p class="step-description">Педагог запропонує вам індивідуальну програму навчання, яка враховуватиме ваші цілі та нинішній рівень.</p>
                        <img class="step-number" src="images/4.png">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-9 col-sm-12 free-lesson-button">
                        <a href="#application-popup">записатись<span>на пробний урок</span></a>
                        <img src="images/button-arrow.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="lesson-popup hidden-popup" id="application-popup" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12 inner-lesson-popup">
                        <h4>Залиште свої контакти і наш менеджер зателефонує вам</h4>
                        <img class="popup-smile" src="images/popup-smile.png">
                        <a href="#lesson-popup-close" class="cross-ref"><img class="cross" src="images/x.png"></a>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <p>під час розмови буде уточнено ваш рівень досягнень, час заняття та викладача, з яким би ви хотіли провести пробний урок. </p>
                                <p id="par2">також ви зможете задати будь-які питання, наш менеджер вас проконсультує</p>
                            </div>
                            <div class="col-lg-6 col-12 form-col">
                                <form class="form" action="{{ route('main') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="name" id="name" placeholder="ім'я">
                                    <input type="text" name="phone" id="phone"placeholder="телефон">
                                    <button type="submit">зателефонуйте мені</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="prices">
            <div class="container">
                <h3>ціни</h3>
                <div class="row justify-content-end">
                    <div class="col-lg-11 col-md-12 first-tariff">
                        <p class="price-title">разове заняття</p>
                        <div class="price-value">
                            <p class="price">270</p>
                            <img src="images/hrn1.png">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-11 col-md-12 first-tariff">
                        <p class="price-title">1 місяць [4 заняття]</p>
                        <div class="price-value">
                            <p class="price">990</p>
                            <img src="images/hrn2.png">
                        </div>
                    </div>
                </div>
                <img class="long-photo" src="images/long-photo.png">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-8 col-md-10 third-tariff">
                        <p class="price-title">2 місяці [8 занятть]</p>
                        <div class="price-value">
                            <p class="price">1890</p>
                            <img src="images/hrn2.png">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-8 col-md-10 fourth-tariff">
                        <p class="price-title">3 місяці [12 занятть]</p>
                        <div class="price-value">
                            <p class="price">2790</p>
                            <img src="images/hrn1.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="teachers" id="teachers">
            <div class="container">
                <h3>викладачі</h3>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-8 col-12">
                        <p class="name">Оберемченко Ростислав</p>
                        <div class="first-face">
                            <img class="face-photo" src="images/rostislav.png">
                            <div class="experience first-exp">
                                <p>досвід</p>
                                <img src="images/5years.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-12 second-teacher">
                        <p class="extre-name">Худченко Єва</p>
                        <div class="second-face">
                            <img class="face-photo" src="images/eva.png">
                            <div class="experience second-exp">
                                <p>досвід</p>
                                <img src="images/10years.png">
                            </div>
                        </div>
                        <p class="name">Худченко Єва</p>
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
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-9 col-sm-12 teachers-button">
                        <a href="{{route('teachers')}}">глянути <span>більше та детальніше</span></a>
                        <img src="images/white-button-arrow.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews" id="reviews">
            <div class="container">
                <h3>відгуки</h3>
                <div class="people-rev">
                    <img src="images/stars.png">
                    <div class="firts-rev">
                        <p class="rev-name">Тихенко Ірина [21 рік]</p>
                        <p>Я продовжую займатись кожен день. Неймовірно вдячна Ростиславу, який втілив мрію у реальність.</p>
                    </div>
                    <div class="second-rev">
                        <p class="rev-name">Осташ роман [18 років]</p>
                        <p>Я отримав багато корисних порад та вправ, які допомогли мені покращити мою техніку та контроль над голосом.</p>
                    </div>
                    <div class="third-rev">
                        <p class="rev-name">карпюк влад [27 років]</p>
                        <p>Дуже задоволений цими курсами. Викладачі були кваліфікованими та мали немалий досвід викладання.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact" id="contactForm">
            <div class="container">
                <h3 class="special_h">залишились питання?</h3>
                <div class="row justify-content-center">
                    <div class="col-10 application ">
                        <h4 >Залиште свої контакти і наш менеджер зателефонує вам</h4>
                        <div class="row">
                            <div class="col-xl-6 col-lg-5">
                                <img class="deformed-smile" src="images/deformed-smile.png">
                            </div>
                            <div class="col-xl-6 col-lg-7 col-md-10" class="contact_form">
                                    <form class="form" action="{{route('main')}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="text" name="name" id="name" placeholder="ім'я">
                                        <input type="text" name="phone" id="phone" placeholder="телефон">
                                        <button type="submit">зателефонуйте мені</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
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
                    <div class="col-lg-3">
                        <div class="row navigation">
                            <div class="col-6 column">
                                <a href="#main">головна</a>
                                <a href="#for-whom">для кого</a>
                                <a href="#lessons">уроки</a>
                            </div>
                            <div class="col-6 column">
                                <a href="#teachers">викладачі</a>
                                <a href="#reviews">відгуки</a>
                                <a href="contacts.html">контакти</a>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="first-phone-smile" src="images/1-phone-smile.png">
                <img class="second-phone-smile" src="images/2-phone-smile.png">
            </div>
        </div>
        @if(session('success'))
            <div class="lesson-popup" id="popup-success">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-12 inner-lesson-popup">
                            <a href="{{route('main')}}" class="cross-ref"><img class="cross" src="images/x.png"></a>
                            <div class="success">
                                <h4>дякуємо, ваша заявка успішно заповнена</h4>
                                <img src="images/happy-smile.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if($errors->any())
            <div class="lesson-popup" id="popup-fail">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-12 inner-lesson-popup">
                            <a href="{{route('main')}}" class="cross-ref"><img class="cross" src="images/x.png"></a>
                            <div class="success">
                                <h4>упс, сталась помилка, спробуйте ще раз</h4>
                                @foreach($errors->all() as $error)
                                    <p class="errors">{{$error}}</p>
                                @endforeach
                                <img src="images/fail-smile.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </body>
</html>
