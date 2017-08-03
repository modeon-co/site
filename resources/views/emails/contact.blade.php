<html>

<head>
  <title>{{ $title }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style type="text/css">
    /* CLIENT-SPECIFIC STYLES */
        #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
        body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
        table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
        img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

        /* iOS BLUE LINKS */

    .ios-links a {color:#db4c3f !important; text-decoration: none !important;}


        /* RESET STYLES */
        body{margin:0; padding:0;}
        img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
        table{border-collapse:collapse !important;}
        body{height:100% !important; margin:0; padding:0; width:100% !important;}


    /* FONT SMOOTHING */
    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }


        /* MOBILE STYLES */
        @media screen and (max-width: 630px) {

            /* RESPONSIVE ELEMENTS */
            img[class="responsive-img"]{
              max-width: 100% !important;
              height: auto !important;
            }

            table[class="responsive-button"]{
              width: 100% !important;
            }

            table[class="responsive-table"]{
              width: 100% !important;
            }

            /* RESPONSIVE VISIBILITY */
            img[class="mobile-hide"]{
              display: none !important;
            }

            td[class="mobile-hide"]{
              display: none !important;
            }

            /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
            td[class="no-padding"]{
              padding: 0 !important;
            }

            /* COMPONENTS */

            /* HEADING A */
            td[class="heading-a-title"]{
              font-size: 23px !important;
            }

            td[class="heading-a-subtitle"]{
              font-size: 20px !important;
            }

        }
  </style>
</head>

<body style="margin: 0; padding: 0;">
  <!-- PREHEADER TEXT -->
  <div style="display: none; font-size: 1px; color: #474747; line-height: 1px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity:0; overflow:hidden;"></div>
  <!-- HEADER -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
      <td bgcolor="#ffffff" align="center" style="padding: 0 15px 25px 15px;">
        <table border="0" cellpadding="0" cellspacing="0" width="480" class="responsive-table">
          <!-- GREEN DASH -->
          <tr>
            <td style="border-top: 4px solid #28c176; padding-bottom: 25px" colspan="2"></td>
          </tr>
          <tr>
            <td bgcolor="#ffffff" width="100" align="left">
              <a href="https://modeon.co" target="_blank">
                <img alt="Modeon" src="https://s21.postimg.org/f9eyk351j/modeon.png" width="119" style="height: auto; display: block; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #666666; font-size: 16px;" border="0">
              </a>
            </td>
            <td bgcolor="#ffffff" width="380" align="right">
              <a href="https://modeon.co" style="color: #28c176; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10px; font-weight: 400; line-height: 14px">Acessar o site</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <!-- GRID CONTAINER -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
      <td bgcolor="#ffffff" align="center" style="padding: 0 15px 0 15px;">
        <table border="0" cellpadding="0" cellspacing="0" width="480" class="responsive-table">
          <!-- GRID ROW -->
          <tr>
            <td>
              <!-- GRID CELL -->
              <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="responsive-table">
                <tr>
                  <td style="padding: 20px 0 20px 0;">
                    <!-- GRID CELL INNER -->
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                      <!-- CONTENT -->
                      <tr>
                        <!-- HEADING -->
                        <td align="center" style="padding-bottom: 0; color: #333; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 21px; font-weight: 300; line-height: 32px">Modeon</td>
                      </tr>
                      <tr>
                        <!-- HEADING -->
                        <td cellspacing="2" align="center" style="padding-bottom: 30px; color: #888; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 300; line-height: 32px">Sua marca é sua presença na web</td>
                      </tr>
                      <tr>
                        <!-- PARAGRAPH -->
                        <td align="center" style="padding-bottom: 25px; color: #474747; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 24px">Obrigado por entrar em contato, responderemos a mensagem que recebemos o mais breve possível.</td>
                      </tr>
                      <tr>
                        <!-- NAME -->
                        <td align="left" style="padding-bottom: 15px; color: #474747; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 24px"><bold style="font-weight: bold;">Nome:</bold> {{ $content['name'] }} </td>
                      </tr>
                      <tr>
                        <!-- EMAIL -->
                        <td align="left" style="padding-bottom: 15px; color: #474747; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 24px"><bold style="font-weight: bold;">Email:</bold> {{ $content['email'] }}</td>
                      </tr>
                      <tr>
                        <!-- PHONE -->
                        <td align="left" style="padding-bottom: 15px; color: #474747; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 24px"><bold style="font-weight: bold;">Telefone:</bold> {{ $content['phone'] }}</td>
                      </tr>
                      <tr>
                        <!-- DEMAND -->
                        <td align="left" style="padding-bottom: 15px; color: #474747; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 24px"><bold style="font-weight: bold;">Solicitação: </bold>{{ $content['demand'] }}</td>
                      </tr>
                      <tr>
                        <!-- OBSERVATION -->
                        <td align="left" style="padding-bottom: 25px; color: #474747; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 24px"><bold style="font-weight: bold;">Observação: </bold>{{ $content['observation'] }}</td>
                      </tr>
                      <tr>
                        <!-- SPACER A -->
                        <td style="padding-bottom: 25px" class="spacer-a"></td>
                      </tr>
                      <tr>
                        <!-- DIVIDER -->
                        <td style="border-top: 1px solid #e4e4e4; padding: 0 15px 30px 15px;"></td>
                      </tr>
                      <tr>
                        <!-- SPACER A -->
                        <td style="padding-bottom: 25px" class="spacer-a"></td>
                      </tr>
                      <tr>
                        <!-- PARAGRAPH -->
                        <td align="center" style="padding-bottom: 25px; color: #474747; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 24px">Gratos,
                          <br>Equipe Modeon</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <!-- FOOTER -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
      <td bgcolor="#ffffff" align="center" style="padding: 25px 15px 25px 15px;">
        <table border="0" cellpadding="0" cellspacing="0" width="480" class="responsive-table">
          <!-- CONTENT -->
          <tr>
            <!-- SOCIAL COLUMN -->
            <td bgcolor="#ffffff" align="center">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" style="padding-right: 20px">
                    <a href="https://www.facebook.com/modeon.co" target="_blank">
                      <img alt="Facebook" src="https://s3.amazonaws.com/f.cl.ly/items/0g20230l0J3J023t2Q0i/icon_facebook.png" width="18" height="18" style="height: auto; display: block; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #666666; font-size: 10px;"
                        border="0">
                    </a>
                  </td>
                  <td align="center" style="padding-right: 20px">
                    <a href="https://twitter.com/modeon_co" target="_blank">
                      <img alt="Twitter" src="https://s3.amazonaws.com/f.cl.ly/items/09063i313T0M0k3Q2911/icon_twitter.png" width="18" height="18" style="height: auto; display: block; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #666666; font-size: 10px;"
                        border="0">
                    </a>
                  </td>
                  <td align="center" style="padding-right: 20px">
                    <a href="https://plus.google.com/u/0/108026992514718319934" target="_blank">
                      <img alt="Google+" src="https://s3.amazonaws.com/f.cl.ly/items/0c0y4222232V033M1a2B/icon_googleplus.png" width="22" height="18" style="height: auto; display: block; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #666666; font-size: 10px;"
                        border="0">
                    </a>
                  </td>
                  <td align="center">
                    <a href="https://www.instagram.com/modeon.co/" target="_blank">
                      <img alt="Instagram" src="https://s3.amazonaws.com/f.cl.ly/items/04222c390r0M1W363m2S/icon_instagram.png" width="18" height="18" style="height: auto; display: block; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #666666; font-size: 10px;"
                        border="0">
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>


</body>

</html>