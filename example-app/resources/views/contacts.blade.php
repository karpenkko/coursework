<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Контакти</title>
        @vite(['resources/css/contacts.css', 'resources/css/bootstrap-grid.css'])
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
                <div>
                    <a class="button" href="{{route('main')}}">головна</a>
                </div>
            </div>
            <h3>контакти</h3>
            <div class="content">
                <div class="row phone">
                    <div class="col-lg-5 col-8">
                        <p>залиште свою заявку і ми вам перетелефонуємо, або якщо не хочете чекати, то можете зателефонуйвати нам самі</p>
                    </div>
                    <div class="col-lg-4 col-12">
                        <a href="#application-popup">залишити заявку</a>
                    </div>
                    <div class="col-lg-3 col-12">
                        <a href="#">0972397041</a>
                    </div>
                </div>
                <div class="line"></div>
                <div class="row justify-content-between email">
                    <div class="col-lg-4 col-sm-4 col-3">
                        <img src="images/email.png">
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-8 col-9">
                        <p class="biger-p"> voiсe@gmail.com</p>
                    </div>
                    <div class="col-lg-4 col-12 pp-col">
                        <p class="pp">також є можливість написати нам на пошту, ми обов’язково прочитаємо та відповімо на ваш лист</p>
                    </div>
                </div>
                <div class="line"></div>
                <div class="row location">
                    <div class="col-lg-5 col-8">
                        <p class="biger-p street">вул. Київська 47</p>
                        <p class="biger-p">час роботи 10:00-21:00</p>
                    </div>
                    <div class="col-lg-4 col-8 ppp-col">
                        <p class="ppp">ну і ще звісно ж ви можете завітати до нас особисто, ми завжди раді гостям</p>
                    </div>
                    <div class="col-lg-3 col-4">
                        <img src="images/location.png">
                    </div>

                </div>
                <div class="line"></div>
                <div class="row social-media">
                    <div class="col-lg-4 col-sm-8 col-11">
                        <p class="socshl">радимо підписатись на наші соцмережі, аби бути в курсі всіх новин</p>
                        <p class="pppp">за потреби можете зв’язатись з нами і там, написавши в приватні повідомлення</p>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="row socials">
                            <div class="col-4 social inst">
                                <p class="titles">instagram</p>
                                <img src="images/instagam-line.png">
                            </div>
                            <div class="col-4 social titles">
                                <p class="titles">facebook</p>
                                <img src="images/facebook-line.png">
                            </div>
                            <div class="col-4 social titles">
                                <p class="titles">twitter</p>
                                <img src="images/twitter-line.png">
                            </div>
                        </div>
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
        @if(session('success'))
            <div class="lesson-popup" id="popup-success">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-12 inner-lesson-popup">
                            <a href="{{route('contacts')}}" class="cross-ref"><img class="cross" src="images/x.png"></a>
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
                            <a href="{{route('contacts')}}" class="cross-ref"><img class="cross" src="images/x.png"></a>
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
