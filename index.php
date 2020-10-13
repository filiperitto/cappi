<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Cappi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="./assets/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/img/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

    <body class="page-home">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        

        <header class="clearfix">
                <div class="wrap">
                    <a href="index.php" class="logo"><img src="./assets/img/svg/logo.svg">cappi</a>

                    <div class="hamburger-container">
                        <div id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <nav>
                        <ul>
                            <li class="cl-effect-13"><a href="index.php">Home</a></li>
                            <li class="cl-effect-13"><a href="recursos.php">Recurso</a></li>
                            <li class="cl-effect-13"><a href="sobre.php">Sobre</a></li>
                            <li><a href="#" class="btn">Download</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

        <div class="main">
            <svg class="bg-hero" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="1997.822" height="2263.897" viewBox="0 0 1997.822 2263.897">
                <defs>
                    <filter id="Shape_1_copy" x="51.493" y="46.24" width="1815.533" height="2217.657"
                        filterUnits="userSpaceOnUse">
                        <feOffset dx="-3.178" dy="6.237" input="SourceAlpha" />
                        <feGaussianBlur stdDeviation="27" result="blur" />
                        <feFlood flood-opacity="0.071" />
                        <feComposite operator="in" in2="blur" />
                        <feComposite in="SourceGraphic" />
                    </filter>
                    <filter id="Shape_1_copy_2" x="182.289" y="0" width="1815.533" height="2217.656"
                        filterUnits="userSpaceOnUse">
                        <feOffset dx="-3.178" dy="6.237" input="SourceAlpha" />
                        <feGaussianBlur stdDeviation="27" result="blur-2" />
                        <feFlood flood-opacity="0.071" />
                        <feComposite operator="in" in2="blur-2" />
                        <feComposite in="SourceGraphic" />
                    </filter>
                </defs>
                <g id="Group_1" data-name="Group 1" transform="translate(-1632.986 604.911)">
                    <path id="Shape_1" data-name="Shape 1"
                        d="M1717.852-439.352s-352.3,845.1,378.7,1231.429c656.961,347.2,673.674,824.321,673.674,824.321L3169.594,603.387l117.2-406.73Z"
                        transform="translate(0)" fill="#14cb83" />
                    <g transform="matrix(1, 0, 0, 1, 1632.99, -604.91)" filter="url(#Shape_1_copy)">
                        <path id="Shape_1_copy-2" data-name="Shape 1 copy"
                            d="M1853.527-483.908S1501.25,361.2,2232.121,747.479c656.84,347.153,673.531,824.27,673.531,824.27L3304.99,558.732,3422.191,152Z"
                            transform="translate(-1632.99 604.91)" fill="#0ed084" opacity="0.412" />
                    </g>
                    <g transform="matrix(1, 0, 0, 1, 1632.99, -604.91)" filter="url(#Shape_1_copy_2)">
                        <path id="Shape_1_copy_2-2" data-name="Shape 1 copy 2"
                            d="M1984.323-530.148S1632.046,314.959,2362.916,701.238c656.84,347.153,673.531,824.27,673.531,824.27L3435.786,512.491l117.2-406.729Z"
                            transform="translate(-1632.99 604.91)" fill="#00d984" opacity="0.4" />
                    </g>
                </g>
            </svg>

            <section id="hero">

                <div class="wrap">
                        
                    <div class="column-50">
                        <h1 class="hero-title">Você dono dos<br>seus dados</h1>
                        <p class="hero-text">Em breve você conseguirá controlar todos os dados importantes da sua vida
                            em um
                            só local. A cappi está chegando para revolucionar como cuidamos e mantemos seguras as nossas
                            informações</p>
                        <div class="btns-cont">
                            <a href="#"><img src="./assets/img/svg/disponivel-google-play-badge.svg"></a>
                            <a href="#"><img src="./assets/img/svg/disponivel-na-app-store-botao-1.svg"></a>
                        </div>
                    </div>
                    <div class="column-50">
                        <?php include'inc/animation-home.php' ?>
                    </div>

                </div>
            </section>

            <section id="features">
                <div class="wrap">
                    <h1 class="title">A <span>cappi</span> cuida da sua capivara</h1>

                    <?php include'inc/features.php' ?>

                    <a href="recursos.php" class="btn">Veja mais</a>

                </div>
            </section>


            <section id="steps">
                <div id="waves-separator1"><img src="./assets/img/svg/ondas.svg"></div>
                <div class="wrap">

                    <div class="column-50">
                        <?php include'inc/animation-steps.php' ?>
                    </div>
                    <div class="column-50">
                        <div class="text-cont">
                            <h1>Como Funciona</h1>

                            <div class="step-box">
                                <div class="title-step"><img src="./assets/img/svg/baixe-app.svg">
                                    <h3>Baixa o aplicativo</h3>
                                </div>
                                <p>Baixe gratuitamente o aplicativo na Appstore ou no Google Play</p>
                            </div>
                            <div class="step-box">
                                <div class="title-step"><img src="./assets/img/svg/plus-app.svg">
                                    <h3>Cria sua conta</h3>
                                </div>
                                <p>Crie sua conta para que possamos começar a puxar a sua cappivara</p>
                            </div>
                            <div class="step-box">
                                <div class="title-step"><img src="./assets/img/svg/bell-app.svg">
                                    <h3>Habilite as notificações</h3>
                                </div>
                                <p>Habilite suas notificações para receber nossos avisos de segurança!</p>
                            </div>
                            <div class="step-box">
                                <div class="title-step"><img src="./assets/img/svg/check-app.svg">
                                    <h3>Fique seguro!</h3>
                                </div>
                                <p>Agora deixe com a gente que te manteremos informados de tudo 🙂</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section id="waves-separator2"><img src="./assets/img/svg/bottom-wave.svg"></section>

            <section id="pricing">
                <h1 class="title">Planos</h1>
                <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>

                <div class="wrap ancor-box">
                    <div class="ancor-trigger">
                        <div class="box-pricing">
                            <div class="header-pricing">

                                <label>Cappi Grátis</label>
                            </div>
                            <div class="cta-box">
                                <div class="price">
                                    <div class="top-box">
                                        <span style="visibility: hidden;">s</span>
                                        <span style="visibility: hidden;">s</span>
                                    </div>
                                    <h2>Grátis</h2>
                                    <p style="visibility: hidden;">s</p>
                                </div>

                                <a href="#" class="btn">Começe Agora</a>
                            </div>
                        </div>

                        <div class="box-pricing">
                            <label class="pop">(Mais popular)</label>
                            <div class="header-pricing">
                                <label>Cappi Premium Anual</label>
                            </div>
                            <div class="cta-box">
                                <div class="price">
                                    <div class="top-box">
                                        <span>R$250,80</span>
                                        <span>-52%</span>
                                    </div>
                                    <h2>R$9,90</h2>
                                    <p>por mês</p>
                                </div>

                                <a href="#" class="btn">Começe Agora</a>
                            </div>
                        </div>

                        <div class="box-pricing">
                            <div class="header-pricing">
                                <label>Cappi Premium Mensal</label>
                            </div>
                            <div class="cta-box">
                                <div class="price">
                                    <div class="top-box">
                                        <span>R$20,90</span>
                                        <span>-29%</span>
                                    </div>
                                    <h2>R$14,90</h2>
                                    <p>por mês</p>
                                </div>
                                <a href="#" class="btn">Começe Agora</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap">


                    <div class="box-pricing">
                        <div class="header-pricing">

                            <label>Cappi Grátis</label>
                        </div>
                        <div class="cta-box">
                            <div class="price">
                                <div class="top-box">
                                    <span style="visibility: hidden;">s</span>
                                    <span style="visibility: hidden;">s</span>
                                </div>
                                <h2>Grátis</h2>
                                <p style="visibility: hidden;">s</p>
                            </div>

                            <a href="#" class="btn">Começe Agora</a>
                        </div>
                        <div class="main-pricing">
                            <div class="text">
                                <p>Comece a cuidar de sua
                                    cappivara sem gastar nada.
                                    Confira se há algo anormal
                                    em seu nome.</p>
                            </div>
                            <ul>
                                <li>Raio-X do seu CPF</li>
                                <li>Raio-X dos Processos jurídicos</li>
                                <li>Senhas vazadas na deepweb</li>
                                <li>Raio-X de Cheques sem fundo</li>
                                <li>Raio-X de Negativações e Pendências financeiras</li>
                                <li>Raio-X de Telefones em seu nome</li>
                            </ul>
                        </div>
                    </div>

                    <div class="box-pricing">
                        <label class="pop">(Mais Popular)</label>
                        <div class="header-pricing">
                            <label>Cappi Premium Anual</label>
                        </div>
                        <div class="cta-box">
                            <div class="price">
                                <div class="top-box">
                                    <span>R$250,80</span>
                                    <span>-52%</span>
                                </div>
                                <h2>R$9,90</h2>
                                <p>por mês</p>
                            </div>

                            <a href="#" class="btn">Começe Agora</a>
                        </div>
                        <div class="main-pricing">
                            <div class="text">
                                <p>Nosso plano mais econômico.
                                    Os mesmos benefícios do
                                    plano mensal, mas te livra
                                    de preocupações
                                    por um ano inteiro!</p>
                            </div>
                            <ul>
                                <li>Alerta de alteração nos seus dados</li>
                                <li>Monitoramento das consultas no seu CPF </li>
                                <li>Monitoramento dos processos jurídicos em seu cpf</li>
                                <li>Monitoramento de Senhas vazadas na deepweb</li>
                                <li>Monitoramento dos cheques sem fundo em seu nome</li>
                                <li>Monitoramento das Negativações e Pendências financeiras em seu nome</li>
                                <li> Monitoramento dos telefones em seu nome</li>
                            </ul>

                        </div>
                    </div>

                    <div class="box-pricing">
                        <div class="header-pricing">
                            <label>Cappi Premium Mensal</label>
                        </div>
                        <div class="cta-box">
                            <div class="price">
                                <div class="top-box">
                                    <span>R$20,90</span>
                                    <span>-29%</span>
                                </div>
                                <h2>R$14,90</h2>
                                <p>por mês</p>
                            </div>
                            <a href="#" class="btn">Começe Agora</a>
                        </div>
                        <div class="main-pricing">
                            <div class="text">
                                <p>Fique tranquilo :)
                                    Te avisaremos se acontecer
                                    alguma mudança em seus
                                    dados !</p>
                            </div>
                            <ul>
                                <li>Alerta de alteração nos seus dados </li>
                                <li>Monitoramento das consultas no seu CPF </li>
                                <li>Monitoramento dos processos jurídicos em seu cpf</li>
                                <li>Monitoramento de Senhas vazadas na deepweb</li>
                                <li>Monitoramento dos cheques sem fundo em seu nome</li>
                                <li>Monitoramento das Negativações e Pendências financeiras em seu nome</li>
                                <li>Monitoramento dos telefones em seu nome</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div id="contentEnd"></div>
                <div id="pageEnd"></div>
            </section>

            <section id="testimonials">
                <!-- Reviews -->
                <div class="wrap">
                    <h1 class="title">Reviews</h1>

                    <!-- Swiper -->
                    <div class="wrap-swiper">
                        <div class="slide-review swiper-container">
                            <div class="swiper-wrapper">

                                <article class="swiper-slide">
                                    <div class="header-review">
                                        <span class="date">02/12/2018</span>
                                        <span class="stars">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                        </span>
                                    </div>
                                    <p class="text-box">1Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit, sed do eiusmod tempor incididunt ut labore</p>
                                    <div class="profile-box">
                                        <div class="img-wrap">
                                            <img src="./assets/img/svg/profile-placeholder.svg" alt="profile">
                                        </div>

                                        <span>Michael Jordan</span>
                                    </div>
                                </article>

                                <article class="swiper-slide">
                                    <div class="header-review">
                                        <span class="date">02/12/2018</span>
                                        <span class="stars">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                        </span>
                                    </div>
                                    <p class="text-box">1Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit, sed do eiusmod tempor incididunt ut labore</p>
                                    <div class="profile-box">
                                        <div class="img-wrap">
                                            <img src="./assets/img/svg/profile-placeholder.svg" alt="profile">
                                        </div>

                                        <span>Michael Jordan</span>
                                    </div>
                                </article>

                                <article class="swiper-slide">
                                    <div class="header-review">
                                        <span class="date">02/12/2018</span>
                                        <span class="stars">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                        </span>
                                    </div>
                                    <p class="text-box">1Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit, sed do eiusmod tempor incididunt ut labore</p>
                                    <div class="profile-box">
                                        <div class="img-wrap">
                                            <img src="./assets/img/svg/profile-placeholder.svg" alt="profile">
                                        </div>

                                        <span>Michael Jordan</span>
                                    </div>
                                </article>

                                <article class="swiper-slide">
                                    <div class="header-review">
                                        <span class="date">02/12/2018</span>
                                        <span class="stars">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                            <img src="./assets/img/svg/star-icon.svg">
                                        </span>
                                    </div>
                                    <p class="text-box">1Lorem ipsum dolor sit amet, consectetur adipiscing<br>
                                        elit, sed do eiusmod tempor incididunt ut labore</p>
                                    <div class="profile-box">
                                        <div class="img-wrap">
                                            <img src="./assets/img/svg/profile-placeholder.svg" alt="profile">
                                        </div>

                                        <span>Michael Jordan</span>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>
            </section> <!-- /Reviews -->

            <section id="blog">
                <h1 class="title">Blog</h1>

                <div class="wrap">
                    <div class="loop-blog">

                        <div class="container-blog">
                            <div class="thumb-box">
                                <span class="date">09 jun</span>
                                <div class="img-wrap">
                                    <img src="./assets/img/waterfall1.jpg">
                                    <h3>Lorem Ipsum</h3>
                                </div>
                            </div>
                            <div class="preview-post">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="container-blog">
                            <div class="thumb-box">
                                <span class="date">09 jun</span>
                                <div class="img-wrap">
                                    <img src="./assets/img/waterfall2.jpg">
                                    <h3>Lorem Ipsum</h3>
                                </div>
                            </div>
                            <div class="preview-post">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="container-blog">
                            <div class="thumb-box">
                                <span class="date">09 jun</span>
                                <div class="img-wrap">
                                    <img src="./assets/img/waterfall3.jpg">
                                    <h3>Lorem Ipsum</h3>
                                </div>
                            </div>
                            <div class="preview-post">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>

                    </div>

                    <a href="#" class="btn">Veja mais</a>


                </div>
            </section>

            <section id="faq">
                <!-- Faq -->
                <div class="wrap">
                    <h1 class="title">FAQ</h1>
                    <div class="cards-faq">
                        <div class="column accordion-group">
                            <div class="cards">
                                <div class="card-container accordion-group__accordion">
                                    <div class="accordion-group__accordion-head">
                                        <div class="accordion-group__accordion-heading">
                                            <div class="accordion-group__accordion-btn">
                                                <h4>A Cappi é gratuita?</h4>
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="14" viewBox="0 0 24 14">
                                                        <image id="_001-next" data-name="001-next" width="24"
                                                            height="14"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAOCAYAAAA1+Nx+AAAABHNCSVQICAgIfAhkiAAAATNJREFUOE+tlMtNAzEQhr8RfXCcFqgBOEAC5IFAcESiBN8Q00BEAyAQ78cBKIM7LoEWOAxKZEebzW52QezJsuf/P8/v0Yq70/aTaMfAkmsYtda0BUi0LeAhGe+5hqs2EGkDkGg7wF3JcN81XDZBGgEl8xXgG/hIxo2QhQCJ1gNuk9m2a3gcryXaOvCa9g9cw0VdJ7UAiTYArpOw6xqeiyYSbQ14S3uHruG8ClIJkGh94CYJOq7hpVIcbRV4X9TJHECibQDZcOAackSVKUi0TSB313cNM8MwAygV77qGHNHCYZFoXWDyPsDMpaYAidYBnlLR0DXkiJomcXJe0k8hE0DdYSvnQlFVAsLnafHmcxn+AVJ8w+EYkH9GPddw/1vDmumaQsaAE+DLNZz9h3n2kGhHwPIPOK2R4rFMF20AAAAASUVORK5CYII=" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group__accordion-panel">
                                        <div class="accordion-group__accordion-content">
                                            <p>O aplicativo da cappi é gratuito. Você pode utilizar diversas
                                                funcionalidades sem pagar nada! Mas para ter todos os benefícios que
                                                existem na cappi, que te habilitam a cuidar muito bem de sua cappivara,
                                                você tem a opção de assinar o plano premium.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cards">
                                <div class="card-container accordion-group__accordion">
                                    <div class="accordion-group__accordion-head">
                                        <div class="accordion-group__accordion-heading">
                                            <div class="accordion-group__accordion-btn">
                                                <h4>Qual a diferença entre o plano gratuito e o premium?</h4>
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="14" viewBox="0 0 24 14">
                                                        <image id="_001-next" data-name="001-next" width="24"
                                                            height="14"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAOCAYAAAA1+Nx+AAAABHNCSVQICAgIfAhkiAAAATNJREFUOE+tlMtNAzEQhr8RfXCcFqgBOEAC5IFAcESiBN8Q00BEAyAQ78cBKIM7LoEWOAxKZEebzW52QezJsuf/P8/v0Yq70/aTaMfAkmsYtda0BUi0LeAhGe+5hqs2EGkDkGg7wF3JcN81XDZBGgEl8xXgG/hIxo2QhQCJ1gNuk9m2a3gcryXaOvCa9g9cw0VdJ7UAiTYArpOw6xqeiyYSbQ14S3uHruG8ClIJkGh94CYJOq7hpVIcbRV4X9TJHECibQDZcOAackSVKUi0TSB313cNM8MwAygV77qGHNHCYZFoXWDyPsDMpaYAidYBnlLR0DXkiJomcXJe0k8hE0DdYSvnQlFVAsLnafHmcxn+AVJ8w+EYkH9GPddw/1vDmumaQsaAE+DLNZz9h3n2kGhHwPIPOK2R4rFMF20AAAAASUVORK5CYII=" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group__accordion-panel">
                                        <div class="accordion-group__accordion-content">
                                            <p>No plano premium a cappi vai monitorar e te alertar sempre que acontecer
                                                alguma mudança em seus dados, te dando todos os detalhes possíveis do
                                                que está acontecendo para você tomar as devidas providências. Enquanto
                                                no plano gratuito, você pode conferir manualmente a sua situação mas
                                                terá as informações mais limitadas.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="cards">
                                <div class="card-container accordion-group__accordion">
                                    <div class="accordion-group__accordion-head">
                                        <div class="accordion-group__accordion-heading">
                                            <div class="accordion-group__accordion-btn">
                                                <h4>Quando poderei acessar a cappi?</h4>
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="14" viewBox="0 0 24 14">
                                                        <image id="_001-next" data-name="001-next" width="24"
                                                            height="14"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAOCAYAAAA1+Nx+AAAABHNCSVQICAgIfAhkiAAAATNJREFUOE+tlMtNAzEQhr8RfXCcFqgBOEAC5IFAcESiBN8Q00BEAyAQ78cBKIM7LoEWOAxKZEebzW52QezJsuf/P8/v0Yq70/aTaMfAkmsYtda0BUi0LeAhGe+5hqs2EGkDkGg7wF3JcN81XDZBGgEl8xXgG/hIxo2QhQCJ1gNuk9m2a3gcryXaOvCa9g9cw0VdJ7UAiTYArpOw6xqeiyYSbQ14S3uHruG8ClIJkGh94CYJOq7hpVIcbRV4X9TJHECibQDZcOAackSVKUi0TSB313cNM8MwAygV77qGHNHCYZFoXWDyPsDMpaYAidYBnlLR0DXkiJomcXJe0k8hE0DdYSvnQlFVAsLnafHmcxn+AVJ8w+EYkH9GPddw/1vDmumaQsaAE+DLNZz9h3n2kGhHwPIPOK2R4rFMF20AAAAASUVORK5CYII=" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group__accordion-panel">
                                        <div class="accordion-group__accordion-content">
                                            <p>A cappi ficará disponível em breve! Se cadastre pare garantir sua cappi
                                                que lhe enviaremos um e-mail assim que estiver disponível para download.
                                                E caso você opte por assinar o plano premium, você contará com um preço
                                                promocional de lançamento!</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="cards">
                                <div class="card-container accordion-group__accordion">
                                    <div class="accordion-group__accordion-head">
                                        <div class="accordion-group__accordion-heading">
                                            <div class="accordion-group__accordion-btn">
                                                <h4>O significa "cuidar da minha capivara"?</h4>
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="14" viewBox="0 0 24 14">
                                                        <image id="_001-next" data-name="001-next" width="24"
                                                            height="14"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAOCAYAAAA1+Nx+AAAABHNCSVQICAgIfAhkiAAAATNJREFUOE+tlMtNAzEQhr8RfXCcFqgBOEAC5IFAcESiBN8Q00BEAyAQ78cBKIM7LoEWOAxKZEebzW52QezJsuf/P8/v0Yq70/aTaMfAkmsYtda0BUi0LeAhGe+5hqs2EGkDkGg7wF3JcN81XDZBGgEl8xXgG/hIxo2QhQCJ1gNuk9m2a3gcryXaOvCa9g9cw0VdJ7UAiTYArpOw6xqeiyYSbQ14S3uHruG8ClIJkGh94CYJOq7hpVIcbRV4X9TJHECibQDZcOAackSVKUi0TSB313cNM8MwAygV77qGHNHCYZFoXWDyPsDMpaYAidYBnlLR0DXkiJomcXJe0k8hE0DdYSvnQlFVAsLnafHmcxn+AVJ8w+EYkH9GPddw/1vDmumaQsaAE+DLNZz9h3n2kGhHwPIPOK2R4rFMF20AAAAASUVORK5CYII=" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group__accordion-panel">
                                        <div class="accordion-group__accordion-content">
                                            <p>Puxar a capivara", na linguagem penal, significa ver os antecedentes de
                                                uma pessoa. Ao "cuidar da sua capivara", você garante que os seus dados
                                                estão como deveriam estar. A cappi te ajuda a cuidar da sua capivara :)
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="cards">
                                <div class="card-container accordion-group__accordion">
                                    <div class="accordion-group__accordion-head">
                                        <div class="accordion-group__accordion-heading">
                                            <div class="accordion-group__accordion-btn">
                                                <h4>Ao identificar uma irregularidade nos meus dados, como a cappi me
                                                    ajuda?</h4>
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
                                                        height="14" viewBox="0 0 24 14">
                                                        <image id="_001-next" data-name="001-next" width="24"
                                                            height="14"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAOCAYAAAA1+Nx+AAAABHNCSVQICAgIfAhkiAAAATNJREFUOE+tlMtNAzEQhr8RfXCcFqgBOEAC5IFAcESiBN8Q00BEAyAQ78cBKIM7LoEWOAxKZEebzW52QezJsuf/P8/v0Yq70/aTaMfAkmsYtda0BUi0LeAhGe+5hqs2EGkDkGg7wF3JcN81XDZBGgEl8xXgG/hIxo2QhQCJ1gNuk9m2a3gcryXaOvCa9g9cw0VdJ7UAiTYArpOw6xqeiyYSbQ14S3uHruG8ClIJkGh94CYJOq7hpVIcbRV4X9TJHECibQDZcOAackSVKUi0TSB313cNM8MwAygV77qGHNHCYZFoXWDyPsDMpaYAidYBnlLR0DXkiJomcXJe0k8hE0DdYSvnQlFVAsLnafHmcxn+AVJ8w+EYkH9GPddw/1vDmumaQsaAE+DLNZz9h3n2kGhHwPIPOK2R4rFMF20AAAAASUVORK5CYII=" />
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group__accordion-panel">
                                        <div class="accordion-group__accordion-content">
                                            <p>Se algo de irregular acontecer com seus dados, a cappi vai te orientar no
                                                que deve ser feito para resolver os problemas.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </section> <!-- /Faq -->


            

        <?php include'inc/footer.php'?>

    </body>

    </html>