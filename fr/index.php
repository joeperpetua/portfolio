<?php
    include('../noCache.php');
    header('Location: https://joeperpetua.me');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Joel Perpetua - Portfolio</title>
    <meta name="description" content="Salut ! Je m'appelle Joel et c'est mon portfolio en ligne, ici vous pourrez trouver mes projets et mes connaisances.">
    <meta name="author" content="Joel Perpetua">
    <meta name="keywords" content="Joel,Perpetua,Joel Perpetua,Portfolio,Web developer,Resume,CV,Software Developer,E.E.S.T N7">

    <link rel="icon" type="image/png" href="../img/icon/user.png" sizes="32x32">
    

    <!-- og -->
    <meta property="og:title" content="Joel Perpetua - Portfolio">
    <meta property="og:image" content="https://joeperpetua.github.io/portfolio/img/thumbnail-fr.png">
    <meta property="og:description" content="Salut ! Je m'appelle Joel et c'est mon portfolio en ligne, ici vous pourrez trouver mes projets et mes connaisances.">
    <meta property="og:url" content="https://joeperpetua.github.io/portfolio/fr">


    <!-- styles -->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen">

    <link rel="stylesheet" href="../css/sidebar.css?v=1.0.3">
    <link rel="stylesheet" href="../css/content.css?v=1.0.3">
    <link rel="stylesheet"  href="../css/style.css?v=1.0.3">
</head>
<body>
    
           
    <a id="up"></a>
    <div class="row land">

        <a href="#up" class="btn" id="goUp"><i class="fas fa-chevron-up"></i></a>
        
        <!-- sidebar -->
        <div class="col s12 m12 l3 sidebar sidenav sidenav-fixed">
                <div class="container">
                    
                    <div class="row">
                        <div class="col s12 col-img">
                            <img src="../img/me.jpg" alt="me" class="responsive-img circle animated fadeIn">
                        </div>
    
                        <div class="col s12">
                            <h2 class="animated fadeIn">Perpetua Joel</h2>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col s12 animated fadeInLeft">
                            <a href="#portfolio"><h3>PORTFOLIO</h3></a>
                        </div>
    
                        <div class="col s12 animated fadeInRight">
                            <a href="#about"><h3>À PROPOS</h3></a>
                        </div>
    
                        <div class="col s12 animated fadeInLeft">
                            <a href="#contact"><h3>CONTACT</h3></a>
                        </div>
                    </div>
    
                    <div class="row lang animated fadeInUp">
                        <div class="input-field col s12">       
                            <select class="icons" id="lang">
                                <option value="fr" data-icon="../img/flag/fr.png">Français</option>    
                                <option value="en" data-icon="../img/flag/en.png">English</option>
                                <!-- <option value="es" data-icon="../img/flag/es.png">Español</option> -->
                            </select>
                            <label>Langue du site</label>
                        </div>
                    </div>
                </div>
        </div>

        <!-- content -->
        <div class="col s12 m12 content">
            
            <!-- Portfolio -->
            <a id="portfolio"></a>
            <div class="row">
                <h1>PROJETS</h1>
                

                <!-- exoPhone -->
                <div class="col s12">
                    <h2>PHP e-commerce (DEMO)</h2>
                    <div>
                        <img src="../img/exophone.png" alt="ecommerce php" class="responsive-img hide-on-med-and-down" />
                        <img src="../img/exophone-mobile.png" alt="ecommerce php mobile" class="responsive-img hide-on-large-only" />
                    </div>

                    <div class="col s12">
                        <h3><b>Caractéristiques</b></h3>
                        <ul class="browser-default">
                            <li>Login / Signup (email seulement)</li>
                            <li>Récupération de mot de passe</li>
                            <li>Panier</li>
                            <li>Filtres de recherche</li>
                            <li>Description détaillée du produit</li>
                            <li>CRUD</li>
                            <li>Système de révision des commandes</li>
                            <li>Base de données multirelationnelle</li>
                            <li>Outil de recommandation de produits</li>
                        </ul>

                        <h3><b>Technologies utilisées</b></h3>
                        <ul class="browser-default">
                            <li>HTML5</li>
                            <li>CSS / BULMA CSS</li>
                            <li>JQUERY / Vanilla JS</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                        </ul>

                        <br>

                        <a class="waves-effect waves-light btn" href="https://github.com/joeperpetua/ecommerce-redesign"><i class="fab fa-github material-icons"></i></a>
                        <a class="waves-effect waves-light btn" href="http://exophone.rf.gd"><i class="material-icons left"></i>demo</a>
                    </div>
                </div>

                <!-- React e-commerce -->
                <div class="col s12">
                    <hr>
                        <h2>React e-commerce (DEMO)</h2>
                        <div>
                            <img alt="ecommerce react" src="../img/react-app.jpg" class="responsive-img hide-on-med-and-down" />
                            <img alt="ecommerce react mobile" src="../img/react-app-mobile.png" class="responsive-img hide-on-large-only" />
                        </div>

                        <div class="col s12">
                            <h3><b>Caractéristiques</b></h3>
                            <ul class="browser-default">
                                <li>Description détaillée du produit</li>
                                <li>Base de données multirelationnelle</li>
                                <li>Se connecte à la base de données via une API REST</li>
                            </ul>
        
                            <h3><b>Technologies utilisées</b></h3>
                            <ul class="browser-default">
                                <li>ReactJS</li>
                                <li>react-router / react-bootstrap</li>
                                <li>HTML5 / CSS</li>
                            </ul>
                            <br>
    
                            <a class="waves-effect waves-light btn" href="https://github.com/joeperpetua/react-app"><i class="fab fa-github material-icons"></i></a>
                            <a class="waves-effect waves-light btn" href="https://joeperpetua.github.io/portfolio/projects/react-ecommerce"><i class="material-icons left"></i>voir</a>
                        </div>
                    </div>

                <!-- React e-commerce -->
                <div class="col s12">
                    <hr>
                    <h2>Phonegap e-commerce (DEMO)</h2>
                    <div>
                        <img alt="ecommerce phonegap" src="../img/exo-app-desk.png" class="responsive-img hide-on-med-and-down" />
                        <img alt="ecommerce phonegap mobile" src="../img/exo-app.png" class="responsive-img hide-on-large-only" />
                    </div>

                    <div class="col s12">
                        <h3><b>Caractéristiques</b></h3>
                        <ul class="browser-default">
                            <li>Build APK natif</li>
                            <li>Description détaillée du produit</li>
                            <li>Base de données multirelationnelle</li>
                            <li>Se connecte à la base de données via une API REST</li>
                        </ul>
            
                        <h3><b>Technologies utilisées</b></h3>
                        <ul class="browser-default">
                            <li>Phonegap</li>
                            <li>Vanilla JS</li>
                            <li>HTML5 / Bootstrap CSS</li>
                        </ul>
                        <br>
        
                        <a class="waves-effect waves-light btn" href="https://github.com/joeperpetua/exo-app"><i class="fab fa-github material-icons"></i></a>
                        <!-- <a class="waves-effect waves-light btn" href=""><i class="material-icons left"></i>view</a> -->
                        </div>
                </div>                    

                <!-- Emanuel Asociacion Cristiana -->
                <div class="col s12">
                    <hr>
                        <h1>Emanuel Asociación Cristiana</h1>
                        <div>
                            <img alt="asociacion emanuel" src="../img/asocia.jpg" class="responsive-img hide-on-med-and-down" />
                            <img alt="asociacion emanuel mobile" src="../img/asocia-mobile.png" class="responsive-img hide-on-large-only" />
                        </div>

                        <div class="col s12">
                            <h3><b>Caractéristiques</b></h3>
                            <ul class="browser-default">
                                <li>Horaires et tableaux de prix</li>
                                <li>Description des activités</li>
                                <li>Blog hebdomadaire</li>
                            </ul>
    
                            <h3><b>Technologies utilisées</b></h3>
                            <ul class="browser-default">
                                <li>Wordpress CMS</li>
                                <li>Avada Themes</li>
                                <li>Avada Fusion Builder</li>
                                <li>CSS</li>
                            </ul>
                            <br>

                            <a class="waves-effect waves-light btn disabled"><i class="fab fa-github material-icons"></i></a>
                            <a class="waves-effect waves-light btn" href="https://asociacionemanuel.org"><i class="material-icons left"></i>voir</a>
                        </div>
                    </div>                
            </div>

            <!-- About -->
            <a id="about"></a>
            <div class="row">
                <hr>
                <h1>À PROPOS</h1>
                
                <div class="col s12">
                    <p>Je m'appelle Joel, j'ai 19 ans et j'habite actuellement à Asnières-sur-Seine, Île-de-France.</p>
                    <br>
                    <p>J'ai eu mon diplôme au lycée E.E.S.T N7 "José Hernández" en Décembre 2019 ce qui me permet
                         de passer un diplôme sur la programmation plus spécifiquement sur le développement d’internet.</p>
                    <br>
                    <p>J’ai participé à quelques projets, que vous pouvez consulter <a href="#portfolio">ici</a>, et j’ai essayé différentes technologies.
                         J’ai de l'expérience sur:</p>
                    
                    <h3><b>Langages de Programmation:</b></h3>
                    <ul class="browser-default">
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>SQL</li>
                        <li>HTML / CSS</li>
                        <li>Java</li>
                    </ul>  
                    
                    <h3><b>Outils de développement:</b></h3>
                    <ul class="browser-default">
                        <li>ReactJS (react-router / react-strap)</li>
                        <li>FireBase / FireStore</li>
                        <li>Strapi</li>
                        <li>Bulma CSS / Bootstrap CSS / Materialize CSS</li>
                        <li>Wordpress</li>
                        <li>Phonegap (with API REST)</li>
                        <li>Git (Github / Gitlab)</li>
                        <li>JIRA</li>
                    </ul>
                    <br>
                    
                    <p>L’espagnol est ma langue maternelle, je parle l’anglais couramment et j'étudie actuellement la langue française. 
                        J'ai décidé de venir en France et je suis ici depuis Mars 2020 afin d’apprendre sa culture, de rencontrer sa population,  
                        d’améliorer mon niveau de langue et de gagner de l'expérience professionnelle.  </p>
                    <br>
                    <p>Je suis vraiment passionné d’apprendre de nouvelles choses, de grandir personnellement et professionnellement, et de 
                        profiter de mon temps libre avec les gens que j’aime.</p>
                    <br>
                    <p>J’ai assisté à de nombreux événements et forums pour discuter des sujets allant de la cyber-sécurité et la 
                        gouvernance d’internet.</p>
                    <br>
                    <p>Tous mes certificats d’assistance sont disponibles <a href="http://joeperpetua.me/res/#certificates">ici</a>.</p>
                    <br>
                    <p>Aussi, mon CV est <a href="http://joeperpetua.me/res/">ici</a> disponible en français, anglais et espagnol.</p>
                    <br><br>

                </div>

            </div>

     
            
            <!-- Contact -->
            <a id="contact"></a>
            <div class="row">
                <hr>
                <h1>CONTACT</h1>


                

                <div class="col s12">
                    <form action="https://send.pageclip.co/55BDt4beRrg56vdsPaoER8BqKMAhhpjl/contact-form" class="pageclip-form" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="email" id="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                                <span class="helper-text" data-error="Tapez une adresse e-mail valide" data-success="Valid email adress"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input name="subject" id="subject" type="text" required>
                                <label for="subject">Subjet</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="message" id="textarea" cols="30" rows="100" required></textarea>
                                <label for="textarea">Message</label>
                            </div>
                        </div>
                        <button type="submit" class="pageclip-form__submit btn right">
                            <span>Envoyer</span>
                        </button>
                    </form>                                       
                </div>

                <footer class="footer">
                    <div class="col s12">  
                        <div class="container">
                            <a class="waves-effect waves-light btn" href="https://www.linkedin.com/in/joel-p-10ab3911a/"><i class="material-icons fab fa-linkedin-in"></i></a>
                            <a class="waves-effect waves-light btn" href="https://www.github.com/joeperpetua"><i class="material-icons fab fa-github"></i></a>
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons far fa-envelope"></i></a>
                        </div>
                    </div>

                    <div class="container">
                            <script type="text/javascript"> //<![CDATA[
                                var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
                                document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
                                //]]>
                            </script>
    
                            <script language="JavaScript" type="text/javascript">
                                TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_md_167x42.png", "POSDV", "none");
                            </script>                            
                    </div>
                </footer> 

                <!-- email adress modal -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                      <h3>adresse email:</h3>
                      <a href="mailto:joelperpetua@gmail.com" class="center-align">joelperpetua@gmail.com</a>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Je l'ai !</a>
                    </div>
                  </div>
                
            

            </div>
        </div>
    </div>
    <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../js/script.js?v=1.0.2"></script>
</body>
</html>