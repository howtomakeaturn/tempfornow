<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/atayal/modules/frame/node_modules/semantic-ui-css/semantic.css">    
        <style>
            .main{
                width: 960px;
                margin: 20px auto;
            }
        </style>
    </head>
    <body>
        <div class="main nav">
            <div class="ui main menu">
                <div class="container">
                    <div class="left menu">
                        <a href="/" class=
                        "launch item"><b>Atayal</b></a>
                        <a href='/about' class="item">About</a>
                        <a href='/install' class="item">Install</a>
                        <a href='/documentation' class="item">Documentation</a>
                        <a href='/forum' class="item">Forum</a>
                        <a href='/blog' class="item">Blog</a>
                    </div>

                    <div class="right menu">
                        <a class="item"><i class="github icon"></i></a>
                    </div>
                </div>
            </div>
        </div>

      <div class="main container">
        <?php echo $child; ?>
        <!--
        <h2 class="ui dividing header">Node</h2>

        <h2 class="ui dividing header">Mimosa</h2>

        <h2 class="ui dividing header">Bower</h2>
      </div>
        -->
      <div class="main footer">
        <div class="ui divider"></div>

        <div class="ui divided horizontal footer link list">
            <div class="item">
                &copy; Atayal 2015
            </div>

            <div class="item">
                v 1.0.0
            </div>
            <div class="item">
                Powered by <a href='/'><b>Atayal.</b></a>
            </div>
        </div>
      </div>

      <div class="ui active inverted main dimmer" style="display: none;">
        <div class="loader">
          Loading, please wait.
        </div>
      </div>
    </body>
</html>
