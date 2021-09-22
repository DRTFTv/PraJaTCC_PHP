<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <title>JOIN</title>

    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/join.css">
</head>

<body>
    <div class="container grid-row">
        <div class="container-logo">
            <a href="Home">
                <svg class="logo" viewBox="0 0 2349 744.8">
                    <g id="Art">
                        <rect class="bk" width="2349" height="744.8" />
                        <path class="text"
                            d="M149.5 47.4l100 0 200 0 100 0 0 100 0 100 0 100 -100 0 -200 0 0 200 -100 0 0 -200 0 -100 0 -100 0 -100zm300 200l0 -100 -200 0 0 100 200 0z" />
                        <path class="text"
                            d="M649.5 47.4l100 0 200 0 100 0 0 100 0 100 0 100 -100 0 -129.29 0 200 200 -141.42 0 -129.29 -129.29 0 129.29 -100 0 0 -200 0 -100 0 -100 0 -100zm300 200l0 -100 -200 0 0 100 200 0z" />
                        <path class="text"
                            d="M1149.5 47.4l100 0 200 0 100 0 0 100 0 100 0 100 0 200 -100 0 0 -200 -200 0 0 200 -100 0 0 -200 0 -100 0 -100 0 -100zm300 200l0 -100 -200 0 0 100 200 0z" />
                        <path class="text"
                            d="M1599.5 197.4l100 0 0 400 0 100 -100 0 -200 0 -100 0 0 -100 0 -150 100 0 0 150 200 0 0 -400z" />
                        <path class="text"
                            d="M1799.5 197.4l100 0 200 0 100 0 0 100 0 100 0 100 0 200 -100 0 0 -200 -200 0 0 200 -100 0 0 -200 0 -100 0 -100 0 -100zm300 200l0 -100 -200 0 0 100 200 0z" />
                        <rect class="text" x="149.5" y="597.4" width="1100" height="100" />
                        <path class="text" d="M1599.5 47.4l600 0 0 0 0 100 0 0 -600 0 0 0 0 -100 0 0z" />
                        <path class="accent" d="M1979.22 134.9l35.56 -75 64.44 0 -59.44 75 -40.56 0z" />
                    </g>
                </svg>
            </a>
        </div>

        <div class="container-login grid-row">
            <label>LOGAR-SE</label>
            <form class="form grid-column" action="">
                <label>E-mail:</label>
                <div class="container-form-input">
                    <input class="form-input" id="email_login" type="email" name="email_login" placeholder="Email" autocomplete="off" required>
                </div>
                <small>Exemplo: </small>

                <label>Senha:</label>
                <div class="container-form-input">
                    <input class="form-input" id="password_login" type="password" name="password_login" placeholder="Senha" autocomplete="off" minlength="8" required>
                </div>
                <small>Exemplo: </small>

                <button class="form-btn" type="submit">LOGAR-SE</button>
                <span class="error-login"></span>
            </form>
        </div>

        <div class="container-singup grid-row" id="sla">
            <label>CADASTRAR-SE</label>

            <?= form_open('User/register')?>

                <label>Nome completo:</label>
                <div class="container-form-input">
                    <input class="form-input" id="name_singup" type="text" name="name_singup" placeholder="Nome completo" autocomplete="off" maxlength="250" required>
                </div>
                <small>Exemplo: </small>

                <label>E-mail:</label>
                <div class="container-form-input">
                    <input class="form-input" id="email_singup" type="email" name="email_singup" placeholder="Email" autocomplete="off" maxlength="750" required>
                </div>
                <small>Exemplo: </small>

                <label>Senha:</label>
                <div class="container-form-input">
                    <input class="form-input" id="password_singup" type="password" name="password_singup" placeholder="Senha" autocomplete="off" minlength="8" maxlength="16" required>
                </div>
                <small>Exemplo: </small>

                <label>Confirme a senha:</label>
                <div class="container-form-input">
                    <input class="form-input" id="confirmPassword_singup" type="password" name="confirmPassword_singup" placeholder="Confirme a senha" autocomplete="off" minlength="8" maxlength="16" required>
                </div>
                <small>Exemplo: </small>

                <label>Data de nascimento:</label>
                <div class="container-form-input">
                    <input class="form-input" id="birthDate_singup" type="date" name="birthDate_singup" autocomplete="off" required>
                </div>
                <small>Exemplo: </small>
                
                <label>Numero de telefone:</label>
                <div class="container-form-input">
                    <input class="form-input" id="phone_singup" type="tel" name="phone_singup" placeholder="Numero de telefone" autocomplete="off" pattern="\(.?\[0-9]{2}\).?\s([9]{1})\([0-9]{4})\-.?\([0-9]{4})" minlength="15" maxlength="15" required>
                </div>
                <small>Exemplo: </small>
                
                <label>CPF:</label>
                <div class="container-form-input">
                    <input class="form-input" id="CPF_singup" type="text" name="CPF_singup" placeholder="CPF" autocomplete="off" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" minlength="14" maxlength="14" required>
                </div>
                <small>Exemplo: </small>
                
                <button class="form-btn" type="submit">CADASTRAR-SE</button>
                <span class="error-singup"></span>
                
            <?= form_close()?>
        </div>
    </div>

    <div class="container-bg grid-column">
        <img class="bg-img" src="https://source.unsplash.com/1920x1080/?mercado,streetfair,agricultura">
    </div>

    <div class="container-bottom grid-column">
        <hr />
        PRA jÀ - TCC
    </div>
    
    <script type="text/javascript" src="components/script.js"></script>
    <script type="text/javascript" src="components/inputMask.js"></script>
    <script src="components/comfirmPassword.js"></script>
    
    <!---
                      #######  ##       ########
            #######   #     #  ##       ##    ##  #######
            #######   #        ##       ##    ##  #######
    #######           #######  ##       ########           #######
            #######        ##  ##       ##    ##  #######
            #######   #    ##  ##       ##    ##  #######
                      #######  #######  ##    ##
    -->

</body>

</html>